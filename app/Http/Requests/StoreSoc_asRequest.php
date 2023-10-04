<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSoc_asRequest extends FormRequest
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
                        // 'patient_id' => 'required',

            // 'monthly_incomes' => 'required',
            // 'incomes_source' => 'required',

            // 'living_kind' => 'required',
            // 'master_name' => 'required',
            // 'master_phone' => 'required',

            // 'pre_infestation' => 'required',
            // 'post_infestation' => 'required',

            // 'infestation_date' => 'required',
            // 'traveling' => 'required',
            // 'other_infestation_from_family' => 'required',
            // 'disease_kind' => 'required',
            // 'problem_rating' => 'required',
            // 'Doctor_view_of_patient' => 'required',
            // 'sociologist_appreciations' => 'required',
        ];
    }
}
