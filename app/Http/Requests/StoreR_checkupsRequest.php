<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreR_checkupsRequest extends FormRequest
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
            'list_checkup_id'=> 'required',
            'li_ch_det_id'=> 'required',
        ];
    }
}
