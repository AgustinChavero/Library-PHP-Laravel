<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'review_text' => 'required | string | min:5',
            'rating' => 'required | numeric | between:0,5',
            'user_id' => 'required | exists:users,id',
            'book_id' => 'required | exists:books,id',
        ];
    }
}
