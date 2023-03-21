<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = User::$rules;
        $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->user->id];
        $rules['password'] = ['nullable', 'string', 'min:8', 'confirmed'];
        $rules['phone'] = ['required', 'string', 'max:255', 'unique:users,phone,' . $this->user->id];

        return $rules;
    }
}
