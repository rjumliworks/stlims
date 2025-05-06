<?php

namespace App\Http\Requests\Operation;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TsrRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customer' => 'sometimes|required',
            'conforme' => 'sometimes|required',
            'conforme_id' => 'sometimes|required',
            'purpose_id' => 'sometimes|required|integer',
            'laboratory_id' => 'sometimes|required',
            'discount_id' => 'sometimes|required|integer',
            'due_at' => 'sometimes|required',
            'is_government' => 'sometimes|required_if:industry,Government',
            'is_referral' => 'sometimes|required',
            'agency_id' => [
                'sometimes',
                Rule::requiredIf(function () {
                    return $this->is_referral === true;
                }),
            ],
            'province_code' => [
                'sometimes',
                Rule::requiredIf(function () {
                    return $this->is_referral === true && $this->agency_id == $this->my_agency;
                }),
            ],
            'is_onsite' => [
                'sometimes',
                Rule::requiredIf(function () {
                    return $this->laboratory_id == 3;
                }),
            ]
        ];
    }
}
