<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'images' => 'required|array|min:1',
            'name_en' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'des_en' => 'required|max:255',
            'des_ar' => 'required|max:255',
        ];
    }
}
