<?php

namespace App\Http\Requests\Finance;

use Illuminate\Foundation\Http\FormRequest;

class CashieringRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if($this->option == 'series'){
            return [
                'name' => 'required|string',
                'start' => 'required|integer',
                'next' => 'required|integer',
                'end' => 'required|integer',
            ];
        }else{
            return [];
        }
    }
}
