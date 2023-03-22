<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name_en'=>'required|min:3|unique:categories,name',
            'name_ar'=>'required|min:3',
            
            'image'=>'nullable|image|mimes:jpg,png,jpeg',
            'department_id'=>'required|exists:departments,id'
        ];
    }

// public function messages()
// {
//     return [

//         'name_en.required'=>trans('validation')
//     ];
// }



}
