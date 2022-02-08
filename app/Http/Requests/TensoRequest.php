<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TensoRequest extends FormRequest
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
            'images' => [
                'nullable',
                'array',
                'min:1',
                Rule::requiredIf(function() {
                    return Request::routeIs('store tenso');
                })
            ],
            'name_en' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'des_en' => 'required',
            'des_ar' => 'required',
        ];
    }
}
