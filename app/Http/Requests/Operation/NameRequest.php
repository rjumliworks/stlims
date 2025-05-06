<?php

namespace App\Http\Requests\Operation;

use App\Rules\NotZeroPeso;
use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if($this->option == 'add'){
            return [
                'name' => 'sometimes|required|string|unique:testservice_names,name,NULL,'.$this->id.',laboratory_id,'.$this->laboratory_id.',short,'.$this->short,
            ];
        }else if($this->option == 'create'){
            return [
                'laboratory_id' => 'sometimes|required|unique:testservices,laboratory_id,NULL,'.$this->id.',sampletype_id,'.$this->sampletype_id.',testname_id,'.$this->testname_id.',method_id,'.$this->method_id.',agency_id,'.$this->agency_id,
                'sampletype_id' => 'sometimes|required',
                'testname_id' => 'sometimes|required',
                'method_id' => 'sometimes|required'
            ];
        }else if($this->option == 'method'){
            return [
                'method_id' => 'sometimes|required',
                'reference_id' => 'sometimes|required',
                'fee' => ['required', new NotZeroPeso],
            ];
            //  'method_id' => 'sometimes|required|unique:testservice_methods,method_id,NULL,'.$this->id.',reference_id,'.$this->reference_id,
        }else if($this->option == 'fee'){
            return [
                'name' => 'sometimes|required',
                'fee' => ['required', new NotZeroPeso]
            ];
        }else{
            return [];
        }
    }
}
