<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            
            'name_en'=>'required|min:3|unique:categories,name,' . $this->category->id,
            'name_ar'=>'required|min:3|unique:categories,name,' . $this->category->id,
            'slug_en'=>'required|min:5',
            'slug_ar'=>'required|min:5',
            'image'=>'nullable|image|mimes:jpg,png,jpeg'
        ];
    }
}
