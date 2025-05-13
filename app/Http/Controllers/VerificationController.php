<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use Illuminate\Http\Request;
use App\Http\Resources\Operation\SampleResource;
use App\Http\Resources\Operation\Verification\IndexResource;

class VerificationController extends Controller
{
    public function sample_verification($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);


        $samples = TsrSample::query()->whereIn('id',$id)
            ->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample')
            ->orderBy('created_at','ASC')
            ->get();
        $analyses = TsrAnalysis::query()->with('testservice.method.method','testservice.testname','sample')
        ->whereHas('sample',function ($query) use ($id) {
            $query->where('id',$id);
        })
        ->orderBy('created_at','ASC')
        ->get();

        $tsr = Tsr::query()->where('id',$samples[0]->tsr_id)
        ->with('received:id','received.profile:id,firstname,lastname,user_id')
        ->with('laboratory:id,name','status:id,name,color,others')
        ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        ->with('conforme:id,name,contact_no')
        ->with('payment:tsr_id,id,total,subtotal,discount,or_number,is_paid,paid_at,status_id,discount_id,collection_id,payment_id','payment.status:id,name,color,others','payment.collection:id,name','payment.type:id,name','payment.discounted:id,name,value')
        ->first();

        $groupedData = [];
        foreach ($analyses as $row) {
            $sampleCode = $row['sample']['code'];
            $sampleName = $row['sample']['name'];
            $testName = $row['testservice']['testname']['name'];
            $testMethod = $row['testservice']['method']['method']['name'];
            
            $key = $sampleCode . "_" . $testName . "_" . $testMethod;
            
            if (!isset($groupedData[$key])) {
                $groupedData[$key] = [
                    "samplecode" => $sampleCode,
                    "samplename" => $sampleName,
                    "testname" => $testName,
                    "method" => $testMethod,
                    "count" => 0,
                    "fee" => $row['fee']
                ];
            }
            $groupedData[$key]["count"] += 1;
        }
        $analyses = array_values($groupedData);

        return inertia('Modules/Public/Verification',[
            'tsr' => new IndexResource($tsr),
            'samples' => SampleResource::collection($samples),
            'analyses' => $analyses
        ]);
    }

    public function verification($code){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($code);

        $tsr = Tsr::query()->where('id',$id)
        ->with('received:id','received.profile:id,firstname,lastname,user_id')
        ->with('laboratory:id,name','status:id,name,color,others')
        ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        ->with('conforme:id,name,contact_no')
        ->with('payment:tsr_id,id,total,subtotal,discount,or_number,is_paid,paid_at,status_id,discount_id,collection_id,payment_id','payment.status:id,name,color,others','payment.collection:id,name','payment.type:id,name','payment.discounted:id,name,value')
        ->first();
        $samples = TsrSample::query()->where('tsr_id',$id)
            ->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample')
            ->orderBy('created_at','ASC')
            ->get();

        $analyses = TsrAnalysis::query()->with('testservice.method.method','testservice.testname','sample')
        ->whereHas('sample',function ($query) use ($id) {
            $query->whereHas('tsr',function ($query) use ($id) {
                $query->where('id',$id);
            });
        })
        ->orderBy('created_at','ASC')
        ->get();

        $groupedData = [];
        foreach ($analyses as $row) {
            $sampleCode = $row['sample']['code'];
            $sampleName = $row['sample']['name'];
            $testName = $row['testservice']['testname']['name'];
            $testMethod = $row['testservice']['method']['method']['name'];
            
            $key = $sampleCode . "_" . $testName . "_" . $testMethod;
            
            if (!isset($groupedData[$key])) {
                $groupedData[$key] = [
                    "samplecode" => $sampleCode,
                    "samplename" => $sampleName,
                    "testname" => $testName,
                    "method" => $testMethod,
                    "count" => 0,
                    "fee" => $row['fee']
                ];
            }
            $groupedData[$key]["count"] += 1;
        }
        $analyses = array_values($groupedData);

        return inertia('Modules/Public/Verification',[
            'tsr' => new IndexResource($tsr),
            'samples' => SampleResource::collection($samples),
            'analyses' => $analyses
        ]);
    }
}
