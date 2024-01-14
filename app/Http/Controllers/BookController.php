<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Book;
use App\Http\Requests\BookRequest;
use App\Http\Requests\DeleteRequest;

class BookController extends Controller
{
    public function create(Request $request): JsonResponse
    {   
        /* $token = $request->input('token');
        
        if (!$token || !Auth::guard('api')->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        } */

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'preview' => $request->preview,
            'edition' => $request->edition,
            'publication_year' => $request->publication_year,
            'is_deleted' => $request->is_deleted
        ]);

        return response()->json(['success' => 'Book created successfully', 'data' => $book], 201);
    }


    public function update(BookRequest $request, $id): JsonResponse
    {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'preview' => $request->preview,
            'edition' => $request->edition,
            'publication_year' => $request->publication_year,
            'is_deleted' => $request->is_deleted,
        ]);

        return response()->json(['success' => 'Book updated successfully', 'data' => $book], 201);
    }

    public function getAll(Request $request): JsonResponse
    {
        $title = $request->query('title');
        $author = $request->query('author');
        $publication_year = $request->query('publication_year');

        $query = Book::query();

        if ($title) $query->where('title', 'like', '%' . $title . '%');
        if ($author) $query->where('author', 'like', '%' . $author . '%');
        if ($publication_year) $query->where('publication_year', 'like', '%' . $publication_year . '%');
        
        $books = $query->get();

        return response()->json(['success' => 'Books found successfully', 'data' => $books], 200);
    }

    public function getOne($id): JsonResponse
    {
        $book = Book::find($id);

        return response()->json(['success' => 'Book finded successfully', 'data' => $book], 200);
    }

    public function delete(DeleteRequest $request, $id): JsonResponse
    {
        $book = Book::find($id);
        $book->update([
            'is_deleted' => $request->is_deleted
        ]);

        return response()->json(['success' => 'Book deleted successfully', 'data' => $book], 201);
    }
}
