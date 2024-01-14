<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Review;
use App\Models\User;
use App\Models\Book;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    
    public function create(ReviewRequest $request): JsonResponse
    {   
        $userId = $request->input('user_id');

        $tokenExists = DB::table('personal_access_tokens')
                        ->where('tokenable_id', $userId)
                        ->exists();

        if (!$tokenExists) {
            return response()->json(['error' => 'Unauthorized. User not authenticated.'], 401);
        }

        $review = Review::create([
            'review_text' => $request->review_text,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'is_deleted' => false
        ]);

        return response()->json(['success' => 'Review created successfully', 'data' => $review], 201);
    }

    public function update(ReviewRequest $request, $id): JsonResponse
    {
        $review = Review::find($id);

        if ($request->user_id !== $review->user_id) {
            return response()->json(['error' => 'Unauthorized. You are not the creator of this book.'], 403);
        }

        $review->update([
            'review_text' => $request->review_text,
            'rating' => $request->rating
        ]);

        return response()->json(['success' => 'Review updated successfully', 'data' => $review], 201);
    }

    public function getAll(Request $request): JsonResponse
    {
        $book_id = $request->query('book_id');

        $query = Review::query();

        if ($book_id) $query->where('book_id', 'like', '%' . $book_id . '%');
        
        $reviews = $query->get();

        return response()->json(['success' => 'Reviews found successfully', 'data' => $reviews], 200);
    }

    public function getOne($id): JsonResponse
    {
        $review = Review::find($id);

        return response()->json(['success' => 'Review finded successfully', 'data' => $review], 200);
    }

    public function delete(DeleteRequest $request, $id): JsonResponse
    {
        $review = Review::find($id);

        $userId = $request->input('user_id');

        $tokenExists = DB::table('personal_access_tokens')
                        ->where('tokenable_id', $userId)
                        ->exists();

        if (!$tokenExists) {
            return response()->json(['error' => 'Unauthorized. User not authenticated.'], 401);
        }

        if ($request->user_id !== $review->user_id) {
            return response()->json(['error' => 'Unauthorized. You are not the creator of this review.'], 403);
        }

        $review->update([
            'is_deleted' => true
        ]);

        return response()->json(['success' => 'Review deleted successfully', 'data' => $review], 201);
    }
}

