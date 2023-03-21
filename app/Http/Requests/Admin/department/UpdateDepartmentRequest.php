<?php

namespace App\Http\Requests\Admin\department;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        return [

           'name_en'=>'required|unique:departments,name|max:255',
           'name_ar'=>'required|unique:departments,name|max:255',
            'slug_en'=>'required|max:255',
            'slug_ar'=>'required|max:255',
            'image' => 'nullable|mage|mimes:jpg,png,jpeg,gif,svg|max:2048'


        ];
    }
}