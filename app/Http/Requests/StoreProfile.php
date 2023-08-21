<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'personal_email'=> 'required|unique:users,email',
            'dob'=> 'required',
            'gender'=> 'required',
            'religion'=> 'required',
            'contact_number'=> 'required',
            'residential_address'=> 'required',
            'permanent_address'=> 'required',
            'cnic'=> 'required',
            'meezan_account'=> 'required',
            'martial_status'=> 'required',
            'father_name'=> 'required',
            'mother_name'=> 'required',
            'emergency_contact'=> 'required',
            'emergency_contact_relationship'=> 'required',
            'emergency_relation_contact'=> 'required',
            'emergency_residential_address'=> 'required',
        ];
    }
}
