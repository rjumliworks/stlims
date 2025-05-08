<?php

namespace App\Services\Others\Equipment;

use App\Models\Agency;
use App\Models\Equipment;
use App\Models\EquipmentLog;
use App\Models\EquipmentInfo;
use App\Models\ListLaboratory;
use App\Http\Resources\Operation\Equipment\IndexResource;

class SaveClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function save($request){
        $code = $this->generateCode($request->laboratory_id);
        $service = Equipment::create(array_merge($request->all(),[
            'agency_id' => $this->agency
        ]));
        if($service){
            $service->info()->create(array_merge($request->all(),[
                'user_id' => \Auth::user()->id
            ]));
        }
        return [
            'data' => $service,
            'message' => 'Equipment added successful!', 
            'info' => "You've successfully added the new equipment."
        ];
    }

    public function perform($request){
        $service = EquipmentLog::create(array_merge($request->all(),[
            'user_id' => \Auth::user()->id
        ]));
        if($service){
            if($request->is_calibrated){
                Equipment::where('id',$request->equipment_id)->update(['calibration_due' => $request->next_date]);
            }else{
                Equipment::where('id',$request->equipment_id)->update(['maintenance_due' => $request->next_date]);
            }
        }

        $data = Equipment::with('logs','user.profile','laboratory','agency')
        ->addSelect([
            'last_calibration' => EquipmentLog::select('date')->where('is_calibrated',1)->whereColumn('equipment_id', 'equipment.id')->latest()->take(1),
            'last_maintenance' => EquipmentLog::select('date')->where('is_calibrated',0)->whereColumn('equipment_id', 'equipment.id')->latest()->take(1),
        ])
        ->where('id',$request->equipment_id)->first();

        return [
            'data' => new IndexResource($data),
            'message' => 'Equipment successfully calibrated or maintained.', 
            'info' => "Your submission has been recorded. The next due date is automatically set based on the duration field."
        ];
    }

    public function update($request){
        $data = Equipment::where('id',$request->id)->first();
        $data->code = $request->code;
        $data->name = $request->name;
        $data->calibration_program = $request->calibration_program;
        $data->maintenance_plan = $request->maintenance_plan;
        $data->calibration_testpoints = $request->calibration_testpoints;
        $data->laboratory_type = $request->laboratory_type;
        if($data->save()){
            $data1 = EquipmentInfo::where('equipment_id',$request->id)->first();
            $data1->manufacturer = $request->manufacturer;
            $data1->model = $request->model;
            $data1->price = $request->price;
            $data1->serial_no = $request->serial_no;
            $data1->supplier_id = $request->supplier_id;
            $data1->acquired_at = $request->acquired_at;
            $data1->others = $request->others;
            $data1->save();
            $data = Equipment::where('id',$request->id)->first();
            return [
                'data' => $data,
                'message' => 'Equipment updated successfully!', 
                'info' => "You've successfully updated the equipment."
            ];
        }
    }   

    private function generateCode($laboratory){
        $lab = Agency::where('id',$this->agency)->first();
        $type = ListLaboratory::where('id',$laboratory)->value('short');
        $c = Equipment::where('agency_id',$this->agency)->where('laboratory_id',$laboratory)->count();
        $code = $lab->code.'-'.$type.'-'.str_pad(($c+1), 5, '0', STR_PAD_LEFT);  
        return $code;
    }
}
