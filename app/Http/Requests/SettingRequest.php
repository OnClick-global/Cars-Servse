<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'Adress_ar' => 'required|max:255',
            'Adress_en' => 'required|max:255',
            'phone1' => 'required|numeric',
            'phone2' => 'required|numeric',
            'Email' => 'required|email|max:255',
            'Whatsapp' => 'required|numeric',
            'facebook' => 'required|url|max:255',
            'twitter' => 'required|url|max:255',
            'logo' => 'required',
        ];
    }
}
