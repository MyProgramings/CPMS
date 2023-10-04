<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoriesRequest extends FormRequest
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
            'quantity' => 'required',
            'power' => 'required',
            'medicines_shape' => 'required',
            'medicine_type' => 'required',
            'complete_date' => 'required',
            'price' => 'required',
        ];
    }
}
