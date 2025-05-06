<?php

namespace App\Http\Requests\Laboratory;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->option){
            case 'quotation':
                return [
                    'customer' => 'sometimes|required',
                    'conforme' => 'sometimes|required',
                    'conforme_id' => 'sometimes|required',
                    'purpose_id' => 'sometimes|required|integer',
                    'laboratory_id' => 'sometimes|required|integer',
                    'discount_id' => 'sometimes|required|integer'
                ];
            break;
            default:
                return [];
        }
    }
}
