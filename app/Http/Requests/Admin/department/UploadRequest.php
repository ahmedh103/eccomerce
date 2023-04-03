<?php

namespace App\Http\Requests\Admin\department;

use App\Models\Department;
use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        return array_merge(Department::sheetRules(), [
            'file' => 'required|file|mimes:xlsx'
        ]);
    }
}
