<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {   
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    public function getAll()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function getOne($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    
}
