<?php

namespace App\Services\Laboratory\Analysis;

USE Carbon\Carbon;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\TsrSampleDisposal;
use App\Http\Resources\Operation\SampleResource;
use App\Http\Resources\Operation\AnalysisResource;

class UpdateClass
{
    public function start($request){
        $tsr_id = $request->tsr_id;
        $data = TsrAnalysis::whereIn('id',$request->id)->update([
            'status_id' => $request->status_id,
            'analyst_id' => \Auth::user()->id,
            'start_at' => $request->start_at
        ]);
        

        $data = New SampleResource(
            TsrSample::query()
            ->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample','analyses.analyst.profile')
            ->with('tsr:id,due_at','disposal')
            ->where('id',$request->sample_id)
            ->orderBy('created_at','ASC')
            ->first()
        );
        
        return [
            'data' => $data,
            'message' => 'Sample analysis successfully started!', 
            'info' => "You've successfully started the analyzation.",
        ];
    }

    public function end($request){
        $tsr_id = $request->tsr_id;
        $sample_id = $request->sample_id;
        $data = TsrAnalysis::whereIn('id',$request->id)->update([
            'status_id' => $request->status_id,
            'end_at' => $request->end_at
        ]);
        if($data){
            $count = TsrAnalysis::whereHas('sample',function ($query) use ($tsr_id){
                $query->whereHas('tsr',function ($query) use ($tsr_id){
                    $query->where('id',$tsr_id);
                });
            })->whereIn('status_id',[10,11])->count();
            if($count === 0){
                $tsr = Tsr::where('id',$tsr_id)->update(['status_id' => 4]); 
            }

            $count = TsrAnalysis::where('sample_id',$sample_id)->whereIn('status_id',[10,11])->count();
            if($count === 0){
                $tsr = TsrSample::where('id',$request->sample_id)->update([
                    'is_completed' => 1,
                    'completed_at' => Carbon::now()
                ]); 
                $count2 = TsrSampleDisposal::where('sample_id',$sample_id)->count();
                if($count2 === 0){
                    TsrSampleDisposal::create([
                        'status_id' => 28,
                        'sample_id' => $sample_id,
                    ]);
                }
            }    
        }
        $data = New SampleResource(
            TsrSample::query()->with('analyses.status','analyses.testservice.method.method','analyses.testservice.testname','analyses.sample','analyses.analyst.profile')
            ->with('tsr:id,due_at','disposal')
            ->where('id',$request->sample_id)
            ->orderBy('created_at','ASC')
            ->first()
        );
        
        return [
            'data' => $data,
            'message' => 'Analysis was completed!', 
            'info' => "You've successfully completed the analysis.",
        ];
    }

    public function tagging($request){
        $data = TsrAnalysis::with('status')->where('id',$request->id)->first();
        $data->analyst_id = $request->analyst['value'];
        $data->start_at = $request->start_at;
        $data->end_at = $request->end_at;
        $data->save();

        return [
            'data' => new AnalysisResource($data),
            'message' => 'Analysis was updated!', 
            'info' => "You've successfully updated the analysis."
        ];
    }

    public function group($request){
        $analyses = TsrAnalysis::whereIn('sample_id', $request->lists)->get();

        foreach ($analyses as $analysis) {
            if (is_null($analysis->start_at)) {
                $analysis->start_at = $request->date;
                $analysis->status_id = 11; 
                $analysis->analyst_id = \Auth::user()->id;
            } else {
                $analysis->end_at = $request->date;
                $analysis->status_id = 12; 
            }
            $analysis->save();
        }
        foreach ($request->lists as $sample) {
            $tsr_id = TsrSample::find($sample)?->tsr_id;
            $count = TsrAnalysis::whereHas('sample',function ($query) use ($tsr_id){
                $query->whereHas('tsr',function ($query) use ($tsr_id){
                    $query->where('id',$tsr_id);
                });
            })->whereIn('status_id',[10,11])->count();
            if($count === 0){
                $tsr = Tsr::where('id',$tsr_id)->update(['status_id' => 4]); 
            }
        }

        foreach($request->lists as $sampleId) {
            if (!TsrAnalysis::where('sample_id', $sampleId)->where('status_id', '!=', 12)->exists()) {
                TsrSample::where('id', $sampleId)->update(['is_completed' => true, 'completed_at' => Carbon::now()]);
            }
        }

        $samples = SampleResource::collection(TsrSample::whereIn('id',$request->lists)->get());

        return [
            'data' => $samples,
            'message' => 'Analysis was updated!', 
            'info' => "You've successfully updated the analysis."
        ];
    }
}
