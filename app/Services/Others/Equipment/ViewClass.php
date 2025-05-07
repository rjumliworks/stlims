<?php

namespace App\Services\Others\Equipment;

use Carbon\Carbon;
use App\Models\Equipment;
use App\Models\EquipmentLog;
use App\Http\Resources\Operation\Equipment\IndexResource;
use App\Http\Resources\Operation\Equipment\LogsResource;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function lists($request){
        $data = IndexResource::collection(
            Equipment::query()
            ->with('logs','info','type','user.profile','laboratory')
            ->addSelect([
                'last_calibration' => EquipmentLog::select('date')->where('is_calibrated',1)->whereColumn('equipment_id', 'equipment.id')->latest()->take(1),
                'last_maintenance' => EquipmentLog::select('date')->where('is_calibrated',0)->whereColumn('equipment_id', 'equipment.id')->latest()->take(1),
            ])
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('code', 'LIKE', "%{$keyword}%")->orWhere('name', 'LIKE', "%{$keyword}%");
            })
            ->when($this->agency, function ($query) {
                $query->where('agency_id',$this->agency);
            })
            ->when($request->laboratory , function ($query, $labtype ) {
                (is_array($labtype)) ?  $query->whereIn('laboratory_id',$labtype ) : $query->where('laboratory_id',$labtype );
            }) 
            ->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Calibration Complete':
                        $query->whereDate('calibration_due','>',now());
                    break;
                    case 'Calibration Due Soon':
                        $query->whereBetween('calibration_due', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()]);
                    break;
                    case 'Overdue Calibration':
                        $query->whereDate('calibration_due','<',now());
                    break;
                    case 'Unscheduled Calibration':
                        $query->where('calibration_due',NULL);
                    break;
                    case 'Maintenance Complete':
                        $query->whereDate('maintenance_due','>',now());
                    break;
                    case 'Maintenance Due Soon':
                        $query->whereBetween('maintenance_due', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()]);
                    break;
                    case 'Overdue Maintenance':
                        $query->whereDate('maintenance_due','<',now());
                    break;
                    case 'Unscheduled Maintenance':
                        $query->where('maintenance_due',NULL);
                    break;
                }
            })
            ->paginate($request->count)
        );
        return $data;
    }

    public function calibrations($request){
        return [
            [
                'name' => 'Calibration Complete',
                'description' => 'Successfully calibrated and ready for use',
                'count' => Equipment::whereDate('calibration_due','>',now())->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-checkbox-circle-fill',
                'color' => 'bg-success-subtle text-success'
            ],
            [
                'name' => 'Calibration Due Soon',
                'description' => '5 days ahead of the calibration due date',
                'count' => Equipment::whereBetween('calibration_due', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()])->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-error-warning-line',
                'color' => 'bg-warning-subtle text-warning'
            ],
            [
                'name' => 'Overdue Calibration',
                'description' => 'Calibration is past its scheduled due date',
                'count' => Equipment::whereDate('calibration_due','<',now())->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-error-warning-fill',
                'color' => 'bg-danger-subtle text-danger'
            ],
            [
                'name' => 'Unscheduled Calibration',
                'description' => 'Ensure follow-up on unclaimed reports.',
                'count' => Equipment::where('calibration_due',NULL)->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-information-fill',
                'color' => 'bg-dark-subtle text-dark'
            ],
        ];
    }

    public function maintenances($request){
        return [
            [
                'name' => 'Maintenance Complete',
                'description' => 'Successfully maintained and ready for use',
                'count' => Equipment::whereDate('maintenance_due','>',now())->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-checkbox-circle-fill',
                'color' => 'bg-success-subtle text-success'
            ],
            [
                'name' => 'Maintenance Due Soon',
                'description' => '5 days ahead of the maintenance due date',
                'count' => Equipment::whereBetween('maintenance_due', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()])->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-error-warning-line',
                'color' => 'bg-warning-subtle text-warning'
            ],
            [
                'name' => 'Overdue Maintenance',
                'description' => 'Maintenance is past its scheduled due date',
                'count' => Equipment::whereDate('maintenance_due','<',now())->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-error-warning-fill',
                'color' => 'bg-danger-subtle text-danger'
            ],
            [
                'name' => 'Unscheduled Maintenance',
                'description' => 'Ensure follow-up on unclaimed reports.',
                'count' => Equipment::where('maintenance_due',NULL)->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-information-fill',
                'color' => 'bg-dark-subtle text-dark'
            ],
        ];
    }
}
