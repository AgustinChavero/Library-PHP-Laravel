<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|exists:users,id',
            'title' => 'required|string|max:50|min:5',
            'author' => 'required|string|max:50',
            'preview' => 'required|string',
            'edition' => 'required|string',
            'publication_year' => 'required|string|min:4'
        ];
    }
}
