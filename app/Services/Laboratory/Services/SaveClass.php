<?php

namespace App\Services\Laboratory\Services;

use App\Imports\TestImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Testservice;
use App\Models\TestserviceName;
use App\Models\TestserviceMethod;

class SaveClass
{
    public function create($request){
        $service = Testservice::create(array_merge($request->all()));
        return [
            'data' => $service,
            'message' => 'Testservice creation was successful!', 
            'info' => "You've successfully created the new testservice."
        ];
    }

    public function add($request){
        $name = TestserviceName::create($request->all());
        $data = TestserviceName::findOrFail($name->id);
        $data = [
            'value' => $data->id,
            'name' => $data->name,
        ];
        return $data;
    }

    public function method($request){
        $method = TestserviceMethod::create($request->all());
        $data = TestserviceMethod::with('method')->where('id',$method->id)->first();
        return $data;
    }

    public function fee($request){
        $data = Testservice::findOrFail($request->id);
        $data->fees()->create($request->all());
        return [
            'data' => $data,
            'message' => 'Additional fee added was successful!', 
            'info' => "You've successfully added additional fee."
        ];
    }

    public function preview($request){
        $data =  Excel::toCollection(new TestImport,$request->import_file);
        $rows = $data[0]; 
        foreach($rows as $row){ 
            if($row[0] != 'Sample Type'){
                $information[] = [
                    'sampletype' => $row[0],
                    'parameter' => $row[1],
                    'method' => $row[2],
                    'reference' => '-',
                    'fee' => $row[3]
                ];
            }
        }
        return $information;
    }

    public function upload($request){

        if (empty($request->laboratory_id) || empty($request->agency_id)) {
            return [
                'success' => [],
                'failed' => [],
                'duplicate' => [],
                'error' => 'Both laboratory_id and agency_id are required.',
            ];
        }

        ini_set('max_execution_time', 0);
        set_time_limit(0);
        $results = [
            'success' => [],
            'failed' => [],
            'duplicate' => []
        ];
        $index= 0;
        $rows = $request->lists;

        foreach ($rows as $index => $row) {

            $sampletypeName = $row['sampletype'];
            $parameterName = $row['parameter'];
            $methodName = $row['method'];
            $fee = $row['fee'];
            $referenceName = $row['reference'];

            try {
                $sampletype = TestserviceName::firstOrCreate(
                    [
                        'name' => $sampletypeName,
                        'type_id' => 30,
                        'laboratory_id' => $request->laboratory_id,
                    ]
                );
        
                $parameter = TestserviceName::firstOrCreate(
                    [
                        'name' => $parameterName,
                        'type_id' => 31,
                        'laboratory_id' => $request->laboratory_id,
                    ]
                );
        
                $method = TestserviceName::firstOrCreate(
                    [
                        'name' => $methodName,
                        'type_id' => 28,
                        'laboratory_id' => $request->laboratory_id,
                    ]
                );

                $reference = TestserviceName::firstOrCreate([
                    'name' => $referenceName,
                    'type_id' => 29,
                    'laboratory_id' => $request->laboratory_id,
                ]);

                $methodCombo = TestserviceMethod::firstOrCreate([
                    'method_id' => $method->id,
                    'reference_id' => $reference->id,
                    'laboratory_id' => $request->laboratory_id,
                    'fee' => $fee,
                ]);

                // Check if this testservice already exists
                $existing = Testservice::where([
                    'sampletype_id' => $sampletype->id,
                    'testname_id' => $parameter->id,
                    'method_id' => $methodCombo->id,
                    'laboratory_id' => $request->laboratory_id,
                    'agency_id' => 11,
                ])->first();

                if ($existing) {
                    $results['duplicate'][] = [
                        'row' => $index + 1,
                        'data' => $row,
                    ];
                    continue;
                }

                // Create new testservice
                Testservice::create([
                    'sampletype_id' => $sampletype->id,
                    'testname_id' => $parameter->id,
                    'method_id' => $methodCombo->id,
                    'laboratory_id' => $request->laboratory_id,
                    'agency_id' => $request->agency_id,
                ]);

                $results['success'][] = [
                    'row' => $index + 1,
                    'data' => '-',
                ];

            } catch (\Exception $e) {
                $results['failed'][] = [
                    'row' => $index + 1,
                    'data' => '-',
                    'error' => $e->getMessage(),
                ];
            }
        }
    
        return $results;
    }
}
