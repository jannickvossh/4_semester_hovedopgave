<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    protected $passwordMinChar = 8;
    protected int $maxChar = 255;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName'         => ['required', 'max:' . $this->maxChar],
            'lastName'          => ['required', 'max:' . $this->maxChar],
            'email'             => ['required', 'email:rfc,dns', 'unique:App\Models\User,email'],
            'password'          => ['required', 'min:' . $this->passwordMinChar, 'max:' . $this->maxChar]
        ];
    }

    public function attributes(): array
    {
        return [
            'firstName'         => 'First name',
            'lastName'          => 'Last name',
            'email'             => 'E-mail',
            'password'          => 'Password'
        ];
    }

    public function messages(): array
    {
        return [
            'required'          => ':attribute is required.',
            'email'             => ':attribute must be a valid e-mail address',
            'email.unique'      => 'A user with that e-mail address already exists.',
            'password.min'      => ':attribute must be at least ' . $this->passwordMinChar . ' characters long.',
            'max'               => ':attribute length can\'t exceed' . $this->maxChar . 'characters.'
        ];
    }
}
