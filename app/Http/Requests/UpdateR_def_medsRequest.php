<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateR_def_medsRequest extends FormRequest
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
            // 'appointment_id' => 'required',
            // 'patient_id' => 'required',
            // 'quantity' => 'required',
            // 'medicine_type' => 'required',
            // 'power' => 'required',
            // 'each_day' => 'required',
            // 'duration' => 'required',
            // 'description_medic' => 'required',
        ];
    }
}
