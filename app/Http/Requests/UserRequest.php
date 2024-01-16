<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'admin' => 'sometimes | exists:users,id',
            'name' => 'required | string | max:50 | min:5',
            'email' => 'required | email | max:50',
            'password' => 'required | string | max:20 | min:7',
        ];
    }
}
