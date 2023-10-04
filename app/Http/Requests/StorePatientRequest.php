<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            // 'age' => 'required',
//            'place_of_birth' => 'required',
            // 'Birthday' => 'required',
            'Birthday' => 'required|before:today',
            'gender' => 'required',
//            'social_status' => 'required',
//            'profession' => 'required',
            'nationality' => 'required',
//            'card_number' => 'required',
            'permanent_address' => 'required',
//            'temporary_address' => 'required',
//            'near_mosque' => 'required',
            'phone_number' => 'required',
            // 'file_number' => 'required',
            // 'file_colors' => 'required',
//            'today_date' => 'required',
//            'incident_date' => 'required',
//            'previous_treatment' => 'required',
//            'chemotherapy' => 'required',
//            'radiotherapy' => 'required',
//            'Surgery' => 'required',
//            'site_of_tumor' => 'required',
//            'type_of_tumor' => 'required',
//            'status' => 'required',
//            'doctors_name' => 'required',
//            'speciality' => 'required',
//            'reported_by' => 'required',
//            'is_smokeout' => 'required',
//            'is_khat' => 'required',
//            'is_chwingtobaco' => 'required',
//            'date_of_last_contact' => 'required',
//            'cause_of_death' => 'required',
//            'notes_re' => 'required',
        ];
    }
}
