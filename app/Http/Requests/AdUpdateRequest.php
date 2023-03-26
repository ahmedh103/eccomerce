<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdUpdateRequest extends FormRequest
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
            'description_en'=>'required',
            'description_ar'=>'required',
            'city' => 'required|string|max:255',
            'price'=>'required|numeric',
            'image'=>'nullable|image|mimes:png,jpg,jpeg,webp',
            'category_id'=>'required|exists:categories,id'
        ];
    }
}
