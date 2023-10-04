<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePat_givingsRequest extends FormRequest
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
            'patient_id' => 'required',
            //            'bp' => 'required',
            //            't' => 'required',
            //            'p' => 'required',
            //            'r' => 'required',
            //            'pain' => 'required',
            //            'wt' => 'required',
            //            'ht' => 'required',
            //            'bsa' => 'required',
            //            'cycle' => 'required',
            //            'day' => 'required',
            //            'referred_doctor' => 'required',
            //            'registry_sheet' => 'required',
            //            'pathology_report' => 'required',
            //            'radiology_report' => 'required',
            //            'previous_ctx' => 'required',
            //            'history' => 'required',
            //            'check_in_to_ch' => 'required',
            //            'pre_ctx_lab_test' => 'required',
            //            'health_cente_visit' => 'required',
            //            'appointment_of_the_two_cycle' => 'required',
            //            'cycle_and_treatment_complain_used' => 'required',
            //            'new_complain' => 'required',
            //            'nursing_notes' => 'required',
            //            'doctor_note' => 'required',
        ];
    }
}
