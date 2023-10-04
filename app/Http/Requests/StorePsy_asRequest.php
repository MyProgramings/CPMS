<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePsy_asRequest extends FormRequest
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
                    //     'dorm' => 'required',
        //     'delicacies' => 'required',
        //     'memory' => 'required',
        //     'edgy_and_adenological' => 'required',
        //     'ailment_precognition' => 'required',
        //     'direction_social' => 'required',
        //     'thinking_in_Disease' => 'required',
        //     'medicament_traces' => 'required',
        //    'psycho_traces' => 'required',
        //    'proposals_and_recommendations' => 'required',
        //    'notes_psy' => 'required',
        //     'patient_id' => 'required',
        ];
    }
}
