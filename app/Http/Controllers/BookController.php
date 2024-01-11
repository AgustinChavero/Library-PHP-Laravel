<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create(Request $request)
    {
    }
    
    public function getAll()
    {
        $books = Book::all();

        return response()->json($books);
    }

    public function getOne($id)
    {
        $books = Book::all();

        return response()->json($books);
    }
}
