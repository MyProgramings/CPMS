<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
            'role_id' => 'required',
//            'last_seen' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'يرجى إدخال التاريخ',
            'username.required' => ' يرجى إدخال الرقم',
            'email.required' => ' يرجى اختار الدكتور',
            'password.required' => 'يرجى اختيار المستقبل',
            'role_id.required' => 'يرجى اختيار المريض',
            'last_seen.required' => 'يرجى اختيار المريض',
        ];
    }
}
