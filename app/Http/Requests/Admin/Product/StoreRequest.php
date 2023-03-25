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
            'name_en'=>'required|max:255',
            'name_ar'=>'required|max:255',
            'detalis_en'=>'required',
            'detalis_ar'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:png,jpg,jpeg,webp',
            'category_id'=>'required|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'neme_en.required'=> trans('validation.required'),
        ];
    }
}
