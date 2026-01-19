<?php

namespace App\Services\Laboratory\Samples;

use Hashids\Hashids;
use App\Models\Tsr;
use App\Models\ListName;
use App\Models\ListSample;
use App\Models\UserRole;
use App\Models\TsrSample;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use App\Http\Resources\Operation\SampleResource;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->laboratory = UserRole::where('user_id',\Auth::user()->id)->where('is_active',1)->pluck('laboratory_id');
        $this->role = UserRole::where('user_id',\Auth::user()->id)->pluck('role_id');
        $this->province = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->province_code : null;
    }

    public function lists($request){
        $code = $request->code;
        $data = SampleResource::collection(
            TsrSample::query()->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample','analyses.analyst.profile')
            ->with('disposal')
            ->withWhereHas('tsr',function ($query) use ($code){
                $query->whereNotIn('status_id',[1,2]);
                $query->select('id','due_at','created_at');
                $query->where('agency_id',$this->agency);
                $query->when($this->laboratory, function ($query) {
                    // if(in_array(4, $this->role->toArray(), false)){
                        $query->whereIn('laboratory_id',$this->laboratory);
                    // }
                });
                $query->when($code, function ($query) use ($code){
                    $query->where('code', 'LIKE', "%{$code}%");
                });
            })
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('code', 'LIKE', "%{$keyword}%")->orWhere('name', 'LIKE', "%{$keyword}%");
            })
            ->when($request->sample, function ($query, $sample) {
                $query->where('name', 'LIKE', "%{$sample}%");
            })
            ->when($request->has('status'), function ($query) use ($request) {
                $query->where('is_completed', $request->status);
            })
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function counts(){
        $counts = 
        [
            TsrSample::where('is_completed',0)->withWhereHas('tsr',function ($query){
                $query->whereNotIn('status_id',[1,2]);
                $query->where('agency_id',$this->agency);
                $query->when($this->laboratory, function ($query) {
                    $query->whereIn('laboratory_id',$this->laboratory);
                });
            })->count(),
            TsrSample::withWhereHas('tsr',function ($query){
                $query->where('agency_id',$this->agency);
                $query->when($this->laboratory, function ($query) {
                    $query->whereIn('laboratory_id',$this->laboratory);
                });
            })->where('is_completed',1)->count()
        ];
        return $counts;
    }

    public function sample($id){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($id);

        $data = New SampleResource(
            TsrSample::query()->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample','analyses.analyst.profile')
            ->with('tsr:id,due_at','disposal.disposal','disposal.user.profile','disposal.sample')
            ->where('id',$id)
            ->orderBy('created_at','ASC')
            ->first()
        );
        return $data;
    }

    public function analysts(){
        $data = UserRole::with('user.profile')
        ->whereHas('user', function ($query){
            $query->where('is_active',1);
        })
        ->where('agency_id',$this->agency)->whereIn('role_id',[4,9])
        ->select('user_id')   // important
        ->distinct()          // removes duplicates
        ->get()->map(function ($item) {
            return [
                'value' => $item->user_id,
                'name' => $item->user->profile->firstname.' '.$item->user->profile->lastname
            ];
        });
        return $data;
    }

    public function qrcode($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $sample = TsrSample::with('analyses:id,sample_id,testservice_id','analyses.testservice:id,testname_id','analyses.testservice.testname:id,name')
        ->with('tsr:id,due_at,created_at')
        ->where('id',$id)->first();
        $testnames = [];
      
        foreach ($sample->analyses as $analysis) {
            if (isset($analysis->testservice->testname->name)) {
                $testnames[] = $analysis->testservice->testname->name;
            }
        }
       
        $code = $sample->code;
        $qrCode = new QrCode($code);
        $qrCode->setSize(300);
        $pngWriter = new PngWriter();
        $qrCodeImageString = $pngWriter->write($qrCode)->getString();
        $base64Image = 'data:image/png;base64,' . base64_encode($qrCodeImageString);

        $array = [
            'qrCodeImage' => $base64Image,
            'sample_code' => $code,
            'sample_name' => $sample->name,
            'due_at' => $sample->tsr->due_at,
            'created_at' => $sample->tsr->created_at,
            'testnames' => $testnames
        ];
        if($this->agency == 14){
            $width = 6.20 * 28.35; 
            $height = 6.00 * 28.35;
            $pdf = \PDF::loadView('qrcodes.sample',$array)->setPaper([0, 0, $width, $height], 'portrait');
        }else if($this->agency == 11){
            $width = 108; 
            $height = 144; 
            $pdf = \PDF::loadView('qrcodes.sample6',$array)->setPaper([0, 0, $width, $height], 'landscape');
        }

        return $pdf->stream('sampleqrcode.pdf');
    }

    public function qrcode_list($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);
        $samples = TsrSample::with('analyses:id,sample_id,testservice_id','analyses.testservice:id,testname_id','analyses.testservice.testname:id,name')
        ->with('tsr:id,due_at,created_at')
        ->where('tsr_id',$id)->get();
        $lists = [];
        foreach($samples as $sample){
            $testnames = [];

            foreach ($sample->analyses as $analysis) {
                if (isset($analysis->testservice->testname->name)) {
                    $testnames[] = $analysis->testservice->testname->name;
                }
            }

            $code = $sample->code;
            $qrCode = new QrCode($code);
            $qrCode->setSize(300);
            $pngWriter = new PngWriter();
            $qrCodeImageString = $pngWriter->write($qrCode)->getString();
            $base64Image = 'data:image/png;base64,' . base64_encode($qrCodeImageString);

            $lists[] = [
                'qrCodeImage' => $base64Image,
                'sample_code' => $code,
                'sample_name' => $sample->name,
                'due_at' => $sample->tsr->due_at,
                'created_at' => $sample->tsr->created_at,
                'testnames' => $testnames
            ];
        }
        $array = [
            'lists' => $lists
        ];
        $width = 6.20 * 28.35; 
        $height = 6.00 * 28.35;
        $pdf = \PDF::loadView('qrcodes.list-sample',$array)->setPaper([0, 0, $width, $height], 'portrait');
        return $pdf->stream(Tsr::where('id',$id)->value('code').'_qrcodes.pdf');
    }

    //  public function types($request){
    //     $keyword = $request->keyword;
    //     $data = ListSample::where('agency_id',$this->agency)->where('laboratory_id',$request->laboratory)
    //     ->when($keyword, function ($query) use ($keyword){
    //         $query->whereHas('name', function ($query) use ($keyword){
    //             $query->where('name', 'LIKE', "%{$keyword}%");
    //         });
    //     })
    //     ->get()->map(function ($item) {
    //         return [
    //             'value' => $item->name->id,
    //             'name' => $item->name->name
    //         ];
    //     });
    //     return $data;
    // }


    public function types($request){
        $keyword = $request->keyword;
        $data = ListSample::where('agency_id',$this->agency)->where('laboratory_id',$request->laboratory)
        ->when($keyword, function ($query) use ($keyword){
            $query->withWhereHas('name', function ($query) use ($keyword){
                $query->where('name', 'LIKE', "%{$keyword}%");
            });
        })
        ->with('name.subs')
        ->get()->map(function ($item) {
            return [
                'value' => $item->name->id,
                'name' => $item->name->name,
                'subs' => $item->name->subs->map(function ($sub) {
                    return [
                        'value' => $sub->id,
                        'name'  => $sub->name,
                    ];
                }),
            ];
        });
        return $data;
    }

    public function sampletypes($request){
        $keyword = $request->code;
        $data = ListName::with('subs')->where('parent_id',null)
        ->when($keyword, function ($query) use ($keyword){
            $query->where('name', 'LIKE', "%{$keyword}%");
        })
        ->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'subs' => $item->subs
            ];
        });
        return $data;
    }
}
