<?php

namespace App\Http\Requests\Laboratory;

use Illuminate\Foundation\Http\FormRequest;

class TsrUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->option){
            case 'Confirm':
                return [
                    'due_at' => 'sometimes|required',
                    'is_government' => 'required_if:industry,Government',
                ];
            break;
            default: 
            return [];
        }
        
    }
}
