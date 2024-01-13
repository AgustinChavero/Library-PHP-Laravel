<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize(): bool
    {
        /* $id = $this->input('user_id');
        $user = User::find($id);

        return $user && $user->is_admin === true; */
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required | string | max:50 | min:5',
            'author' => 'required | string | max:50',
            'preview' => 'required | string | min:5',
            'edition' => 'required | string | min:1',
            'publication_year' => 'required | string | min 4'
        ];
    }
}
