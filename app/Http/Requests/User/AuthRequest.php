<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'min:3', 'max:255', 'exists:users,login'],
            'password' => ['required', 'string', Password::min(8)->mixedCase()],
        ];
    }
}
