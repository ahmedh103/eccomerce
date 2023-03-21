<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_en'=>'required',
            'name_ar'=>'required',
            'detalis_en'=>'required',
            'detalis_ar'=>'required',
            'price'=>'required',
            'image'=>'required'
        ];
    }

//    public function messages()
//    {
//        return [
//            'neme_en.required'=> trans('validation.required'),
//        ];
//    }
}
