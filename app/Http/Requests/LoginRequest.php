<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class LoginRequest extends FormRequest
{
    protected $passwordMinChar = 8;

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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'     => ['required', 'email:rfc,dns'],
            'password'  => ['required', 'min:' . $this->passwordMinChar]
        ];
    }

    public function attributes(): array
    {
        return [
            'email'     => 'E-mail',
            'password'  => 'Password'
        ];
    }

    public function messages(): array
    {
        return [
            'required'  => ':attribute is required.',
            'email'     => ':attribute must be a valid e-mail address'
        ];
    }
}
