<?php

namespace App\Services\Laboratory\Testreports;

use Carbon\Carbon;
use App\Models\TsrSample;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;
use App\Models\TsrSampleReport;
use App\Models\TsrSampleReportList;

class SaveClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->configuration = AgencyConfiguration::with('agency.address')->where('agency_id',$this->agency)->first();
    }

    public function single($request){
        $labs = $this->configuration->laboratories;
        $laboratory_id = $request->laboratory_id;

        $lab_type = ListLaboratory::select('short')->where('id',$laboratory_id)->first();
        $c = TsrSampleReport::whereHas('sample',function ($query) use ($laboratory_id){
            $query->whereHas('tsr',function ($query) use ($laboratory_id){
                $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
            });
        })
        ->whereYear('created_at',date('Y'))->where('code','!=',NULL)->count();
        $sample = TsrSample::where('id',$request->id)->first();
        if($sample ){
            if($sample->completed_at){
                $date = Carbon::parse($sample->completed_at)->format('mdY');
            }else{
                $endAt = $sample->analyses()->max('end_at');
                $date = $endAt ? Carbon::parse($endAt)->format('mdY') : null;
            }
        }
        $code = $this->configuration->agency->code.'-'.$date.'-'.$lab_type->short.'-'.str_pad(($c+1), 4, '0', STR_PAD_LEFT);  //$report_count REMOVED

        $check = TsrSampleReport::where('code',$code)->count();
        if($check == 0){
            $count = TsrSampleReport::where('sample_id',$request->id)->count();
            if($count == 0){
                $data = TsrSampleReport::create([
                    'code' => $code,
                    'sample_id' => $request->id,
                    'user_id' => \Auth::user()->id
                ]);
                $message = 'Report number was generated!';
            }else{
                $data = null;
                $message = 'The sample already has a report number.';
            }
        }else{
            $data = null;
            $message = 'Report number already generated!';
        }

        return [
            'data' => $data,
            'message' => $message, 
            'info' => "You've successfully generated the report number."
        ];
    }

    public function multiple($request){
        $labs = $this->configuration->laboratories;
        $laboratory_id = $request->laboratory_id;
        $lists = $request->checked;
        $lab_type = ListLaboratory::select('short')->where('id',$laboratory_id)->first();
        
        if($request->is_single){
            $count = TsrSampleReport::whereHas('sample',function ($query) use ($laboratory_id){
                $query->whereHas('tsr',function ($query) use ($laboratory_id){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
                });
            })
            ->whereYear('created_at',date('Y'))->where('code','!=',NULL)->count();
            $latestCompletedAt = TsrSample::whereIn('id', $lists)->max('completed_at');
            $date = Carbon::parse($latestCompletedAt)->format('mdY');
            $code = $this->configuration->agency->code.'-'.$date.'-'.$lab_type->short.'-'.str_pad(($count+1), 4, '0', STR_PAD_LEFT);
            
            $check = TsrSampleReport::where('code',$code)->count();
            if($check == 0){
                $errors = [];
                foreach($lists as $i => $list){
                    $count = TsrSampleReport::where('sample_id',$list)->count();
                    if($count == 0){
                        if ($i == 0){
                            $first = TsrSampleReport::create([
                                'code' => $code,
                                'sample_id' => $list,
                                'user_id' => \Auth::user()->id
                            ]);
                            $id = $first->id;
                        }else{
                            $count = TsrSampleReportList::where('sample_id',$list)->count();
                            if($count == 0){
                                $tsrl = TsrSampleReportList::create([
                                    'sample_id' => $list,
                                    'report_id' => $id
                                ]);
                            }else{
                                $errors[] = 'A report number has already been assigned to the sample . '+$list;
                            }
                        }
                    }else{
                        $errors[] = 'A report number has already been assigned to the sample . '+$list;
                    }
                }
            }else{
                $data = null;
                $message = 'Report number already generated!';
            }
        }else{

        }
    }
}
