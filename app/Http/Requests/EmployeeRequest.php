<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch($this->option){
            case 'employee':
                return [
                    'username' => 'sometimes|required|max:20|unique:users,username,'.$this->id,
                    'email' => 'sometimes|required|email|max:150|unique:users,email,'.$this->id,
                    'firstname' => 'sometimes|required|string|max:100',
                    'lastname' => 'sometimes|required|string|max:100',
                    'middlename' => 'sometimes|required|string|max:50',
                    'suffix' => 'sometimes|nullable|string|max:10',
                    'sex' => 'sometimes|required|string|max:6',
                    'birthdate' => 'sometimes|required',
                    'contact_no' => 'sometimes|required|numeric|digits:11|unique:user_profiles,contact_no,'.$this->profile_id,
                    'marital_id' => 'sometimes|required',
                    'religion_id' => 'sometimes|required',
                    'blood_id' => 'sometimes|required',
                    'division_id' => 'sometimes|required',
                    'station_id' => 'sometimes|required',
                    'unit_id' => 'sometimes|required',
                    'type_id' => 'sometimes|required',
                    'position_id' => 'sometimes|required',
                ];
            break;
            case 'credential':
                return [
                    'name_id' => [
                        'required',
                        Rule::unique('user_credentials')->where(function ($query){
                            return $query->where('type_id', $this->type_id)
                                         ->where('user_id', $this->user_id);
                        }),
                    ],
                    'type_id' => 'required',
                    'user_id' => 'required',
                ];
            break;
            case 'academic':
                return [
                    'school' => 'required',
                    'course' => 'required',
                    'is_ongoing' => 'required',
                    'level_id' => 'required',
                    'user_id' => 'required',
                    'graduated_at' => 'required_if:is_ongoing,0'
                ];
            break;
            default: 
                return [];
        }
    }

    public function messages()
    {
        switch($this->option){
            case 'employee':
                return [
                    'contact_no.required' => 'required',
                    'username.required' => 'required',
                    'email.required' => 'required',
                    'birthdate.required' => 'required',
                    'sex.required' => 'required',
                    'marital_id.required' => 'required',
                    'religion_id.required' => 'required',
                    'blood_id.required' => 'required',
                    'marital_id.required' => 'required'
                ];
            break;
            case 'credential':
                return [
                    'name_id.required' => 'The credential field is required',
                    'name_id.unique' => 'The credential has already been taken'
                ];
            break;
            case 'academic':
                return [
                    'level_id.required' => 'required',
                    'graduated_at.required_if' => 'required',
                ];
            break;
            default: 
                return [];
        }
    }
}
