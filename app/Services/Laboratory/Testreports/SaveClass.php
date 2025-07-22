<?php

namespace App\Services\Laboratory\Testreports;

use Carbon\Carbon;
use App\Models\UserRole;
use App\Models\TsrSample;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;
use App\Models\TsrSampleReport;
use App\Models\TsrSampleReportList;
use Illuminate\Support\Str;
use Hashids\Hashids;

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
        // $sample = TsrSample::where('id',$request->id)->first();
        // if($sample ){
        //     if($laboratory_id == 3){
        //         if($sample->completed_at){
        //             $date = Carbon::parse($sample->completed_at)->format('mdY');
        //         }else{
        //             $endAt = $sample->analyses()->max('end_at');
        //             $date = $endAt ? Carbon::parse($endAt)->format('mdY') : null;
        //         }
        //     }else{
        //         $date = Carbon::now()->format('mdY');
        //     }
        // }
        $date = Carbon::now()->format('mdY');
        $code = $this->configuration->agency->code.'-'.$date.'-'.$lab_type->short.'-'.str_pad(($c+1), 4, '0', STR_PAD_LEFT);  //$report_count REMOVED

        $head = UserRole::with('user:id')
       ->where('laboratory_id',$laboratory_id)->whereHas('role',function ($query){
            $query->where('name','Technical Manager');
        })->where('agency_id',$this->agency)->where('is_active',1)->pluck('user_id');

        $check = TsrSampleReport::where('code',$code)->count();
        if($check == 0){
            $count = TsrSampleReport::where('sample_id',$request->id)->count();
            if($count == 0){
                $data = TsrSampleReport::create([
                    'code' => $code,
                    'sample_id' => $request->id,
                    'passkey' => $this->generatePasskey(),
                    'user_id' => \Auth::user()->id,
                    'tm_id' => $head[0]
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
        $lab = array_values(array_filter($labs, function ($object) use ($laboratory_id) {
            return $object['value'] === $laboratory_id;
        }));
        $test_count = $lab[0]['report_count'];

        if($request->is_single){
            $count = TsrSampleReport::whereHas('sample',function ($query) use ($laboratory_id){
                $query->whereHas('tsr',function ($query) use ($laboratory_id){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
                });
            })
            ->whereYear('created_at',date('Y'))->where('code','!=',NULL)->count();
     
            // if($laboratory_id == 3){
            //     $latestCompletedAt = TsrSample::whereIn('id', $lists)->max('completed_at');
            //     $date = Carbon::parse($latestCompletedAt)->format('mdY');
            // }else{
            //     $date = Carbon::now()->format('mdY');
            // }
            $date = Carbon::now()->format('mdY');
            $code = $this->configuration->agency->code.'-'.$date.'-'.$lab_type->short.'-'.str_pad(($test_count+$count+1), 4, '0', STR_PAD_LEFT);
            $head = UserRole::with('user:id')
            ->where('laboratory_id',$laboratory_id)->whereHas('role',function ($query){
                $query->where('name','Technical Manager');
            })->where('agency_id',$this->agency)->where('is_active',1)->pluck('user_id');
            $codes = [];

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
                                'user_id' => \Auth::user()->id,
                                'tm_id' => $head[0],
                                'passkey' => $this->generatePasskey(),
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
                        $codes[] = [
                            'id' => $list,
                            'code' => $code
                        ];
                    }else{
                        $errors[] = 'A report number has already been assigned to the sample . '.$list;
                        $codes[] = [
                            'id' => $list,
                            'code' => TsrSampleReport::where('sample_id',$list)->value('code')
                        ];
                    }
                }
            }else{
                $data = null;
                $message = 'Report number already generated!';
            }
        }else{
            $codes = [];
            foreach($lists as $list){
                $count = TsrSampleReport::whereHas('sample',function ($query) use ($laboratory_id){
                    $query->whereHas('tsr',function ($query) use ($laboratory_id){
                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
                    });
                })
                ->whereYear('created_at',date('Y'))->where('code','!=',NULL)->count();

                // if($laboratory_id == 3){
                //     $latestCompletedAt = TsrSample::whereIn('id', $lists)->max('completed_at');
                //     $date = Carbon::parse($latestCompletedAt)->format('mdY');
                // }else{
                //     $date = Carbon::now()->format('mdY');
                // }
                $date = Carbon::now()->format('mdY');
                $code = $this->configuration->agency->code.'-'.$date.'-'.$lab_type->short.'-'.str_pad(($test_count+$count+1), 4, '0', STR_PAD_LEFT);
                $head = UserRole::with('user:id')
                ->where('laboratory_id',$laboratory_id)->whereHas('role',function ($query){
                    $query->where('name','Technical Manager');
                })->where('agency_id',$this->agency)->where('is_active',1)->pluck('user_id');

                $check = TsrSampleReport::where('code',$code)->count();
                if($check == 0){
                    $errors = [];
                    
                    $count = TsrSampleReport::where('sample_id',$list)->count();
                    if($count == 0){
                        $first = TsrSampleReport::create([
                            'code' => $code,
                            'sample_id' => $list,
                            'user_id' => \Auth::user()->id,
                            'tm_id' => $head[0],
                            'passkey' => $this->generatePasskey(),
                        ]);

                        $codes[] = [
                            'id' => $list,
                            'code' => $code
                        ];
                    }else{
                        $errors[] = 'A report number has already been assigned to the sample . '.$list;
                        $codes[] = [
                            'id' => $list,
                            'code' => TsrSampleReport::where('sample_id',$list)->value('code')
                        ];
                    }
                    
                }else{
                    $data = null;
                    $message = 'Report number already generated!';
                }
            }
        }

        return [
            'data' => $codes,
            'message' => 'Report number successfully generated!',
            'info' => "The laboratory analyst result has been recorded and the report number has been created."
        ];
    }

    public function generatePasskey()
    {
        // Required components
        $uppercase = chr(rand(65, 90)); // A-Z
        $lowercase = chr(rand(97, 122)); // a-z
        $numbers = rand(10, 99); // two digits, e.g. "42"

        // Random 2 characters (any)
        $remaining = Str::random(2);

        // Combine all parts
        $raw = $uppercase . $lowercase . $numbers . $remaining;

        // Shuffle to randomize character order
        $passkey = Str::of(str_shuffle($raw))->substr(0, 6);

        return $passkey;
    }
    

    public function report($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $data = TsrSampleReport::where('sample_id',$id[0])->first();

        $attach = $this->upload($data,$request);
        $data->attachment = $attach;
        $data->save();
        
        return [
            'data' => $data,
            'message' => 'Testreport updated.', 
            'info' => 'Testreport details have been successfully updated.',
        ];
    }

    public function upload($data,$request){
        $name = $data->code;
        
        if($request->hasFile('pdf'))
        {   
            $pdf = $request->file('pdf');   
            $file_name = strtolower($name).'.'.$pdf->getClientOriginalExtension();
            $file_path = $pdf->storeAs('uploads/testreports', $file_name, 'public');
            $attachment = [
                'name' => $file_name,
                'file' => $file_path,
                'added_by' => \Auth::user()->id,
                'created_at' => date('M d, Y g:i a', strtotime(now()))
            ];
            return $attachment;
        }
    }
}
