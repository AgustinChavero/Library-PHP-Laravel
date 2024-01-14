<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Review;
use App\Models\User;
use App\Models\Book;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\DeleteRequest;

class ReviewController extends Controller
{
    
    public function create(ReviewRequest $request): JsonResponse
    {   
        /* $token = $request->input('token');
        
        if (!$token || !Auth::guard('api')->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        } */

        $user = User::findOrFail($request->user_id);
        $book = Book::findOrFail($request->book_id);

        if (!$user || !$book) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $review = $user->reviews()->create([
            'review_text' => $request->review_text,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
        ]);

        return response()->json(['success' => 'Review created successfully', 'data' => $review], 201);
    }

    public function update(ReviewRequest $request, $id): JsonResponse
    {
        $review = Review::find($id);
        $review->update([
            'review_text' => $request->review_text,
            'rating' => $request->rating
        ]);

        return response()->json(['success' => 'Review updated successfully', 'data' => $review], 201);
    }

    public function getAll(): JsonResponse
    {
        $reviews = Review::all();

        return response()->json(['success' => 'Reviews finded successfully', 'data' => $reviews], 200);
    }

    public function getOne($id): JsonResponse
    {
        $review = Review::find($id);

        return response()->json(['success' => 'Review finded successfully', 'data' => $review], 200);
    }

    public function delete(DeleteRequest $request, $id): JsonResponse
    {
        $review = Review::find($id);
        $review->update([
            'is_deleted' => $request->is_deleted
        ]);

        return response()->json(['success' => 'Review deleted successfully', 'data' => $review], 201);
    }
}

