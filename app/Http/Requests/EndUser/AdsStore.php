<?php

namespace App\Http\Requests\EndUser;

use Illuminate\Foundation\Http\FormRequest;

class AdsStore extends FormRequest
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
            'name_en'=>'required|min:3|unique:ads,name',
            'name_ar'=>'required|min:3',
            'city' => 'required|max:14',
            'description' => "required|max:100",
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ];
    }
}
