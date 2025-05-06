<?php

namespace App\Services\Laboratory\Testreports;

use Hashids\Hashids;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use App\Models\TsrSample;
use App\Models\UserRole;
use App\Models\TsrSampleReport;
use App\Models\AgencyConfiguration;
use App\Http\Resources\Operation\TestreportResource;
use App\Http\Resources\Operation\NoTestreportResource;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->laboratory = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
        $this->role = UserRole::where('user_id',\Auth::user()->id)->pluck('role_id');
        $this->configuration = AgencyConfiguration::with('agency.address','agency.member')->where('agency_id',$this->agency)->first();
    }

    public function lists($request){
        if($request->status == 'with'){
            $data = TestreportResource::collection(
                TsrSampleReport::query()
                ->with('sample.tsr','user.profile')
                ->with('sample.analyses:testservice_id,sample_id','sample.analyses.testservice:id,testname_id','sample.analyses.testservice.testname:id,name')
                ->when($request->keyword, function ($query, $keyword) {
                    $query->where('code', 'LIKE', "%{$keyword}%");
                    $query->orWhereHas('sample', function ($query) use ($keyword){
                        $query->where('code', 'LIKE', "%{$keyword}%");
                        $query->orwhereHas('tsr', function ($query) use ($keyword){
                            $query->where('code', 'LIKE', "%{$keyword}%");
                            $query->when($this->laboratory, function ($query) {
                                if(in_array(4, $this->role->toArray(), false)){
                                    $query->whereIn('laboratory_id',$this->laboratory);
                                }
                            });
                        });
                    });
                })
                ->when($request->analyst, function ($query, $analyst) {
                    $query->where('user_id',$analyst);
                })
                ->whereHas('sample', function ($query) use ($request){
                    $query->whereHas('tsr', function ($query) use ($request){
                        $query->when($request->laboratory , function ($query, $labtype) {
                            $query->where('laboratory_id',$labtype);
                        });
                        $query->where('agency_id',$this->agency);
                    });
                })
                ->orderBy('created_at','DESC')
                ->paginate($request->count)
            );
        }else{
            $data = NoTestreportResource::collection(
                TsrSample::where('is_completed',1)->whereDoesntHave('report')
                ->with(['tsr' => function ($query) {
                    $query->when($this->laboratory, function ($query) {
                        if (in_array(4, $this->role->toArray(), false)) {
                            $query->whereIn('laboratory_id', $this->laboratory);
                        }
                    });
                }])
                ->orderBy('created_at','DESC')
                ->paginate($request->count)
            );
        }
        return $data;
    }

    public function count(){
        $count = TsrSample::where('is_completed',1)->whereDoesntHave('report')->count();
        return $count;
    }

    public function qrcode($request){
        $id = $request->id;

        $url = $_SERVER['HTTP_HOST'].'/verification/sample/'.$id;
        $qrCode = new QrCode($url);
        $qrCode->setSize(100);
        $qrCode->setMargin(-5);

        $pngWriter = new PngWriter();
        $qrCodeImageString = $pngWriter->write($qrCode)->getString();
        $base64Image = 'data:image/png;base64,' . base64_encode($qrCodeImageString);

        return response($qrCodeImageString)
        ->header('Content-Type', 'image/png')
        ->header('Content-Disposition', 'inline; filename="sample_qrcode.png"');
    }
    
    public function analysts(){
        $data = UserRole::with('user.profile')
        ->whereHas('user', function ($query){
            $query->where('is_active',1);
        })
        ->where('agency_id',$this->agency)->where('role_id',4)
        ->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->user->profile->firstname.' '.$item->user->profile->lastname
            ];
        });
        return $data;
    }

    public function print($request){
        $id = $request->id;
        $sample = TsrSample::with('report','analyses:id,testservice_id,sample_id','analyses.testservice:id,testname_id,sampletype_id,method_id','analyses.testservice.sampletype:id,name','analyses.testservice.testname:id,name','analyses.testservice.method:id,method_id,fee','analyses.testservice.method.method:id,name,short')
        ->with('tsr:id,code,created_at,customer_id','tsr.customer:id,name_id,name,is_main','tsr.customer.customer_name:id,name,has_branches','tsr.customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','tsr.customer.address.region:code,name,region','tsr.customer.address.province:code,name','tsr.customer.address.municipality:code,name','tsr.customer.address.barangay:code,name')
        ->where('id',$id)->first();

        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($request->id);
        $url = $_SERVER['HTTP_HOST'].'/verification/sample/'.$code;
        $qrCode = new QrCode($url);
        $qrCode->setSize(300);
        $pngWriter = new PngWriter();
        $qrCodeImageString = $pngWriter->write($qrCode)->getString();
        $base64Image = 'data:image/png;base64,' . base64_encode($qrCodeImageString);
        $testreport = ($sample->report) ? $sample->report->code : 'TESTCODE123';

        $array = [
            'qrCodeImage' => $base64Image,
            'configuration' => $this->configuration,
            'edited' => json_decode($request->data),
            'sample' => $sample,
            'code' => $testreport
        ];

        $pdf = \PDF::loadView('reports.test',$array)->setPaper('a4', 'portrait');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            
            $text = "PAGE $pageNumber OF $pageCount"; 
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 7;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(106 - $width, 796, $text, $font, $size);
        });
        return $pdf->stream( $testreport.'-testreport.pdf');
    }
}
