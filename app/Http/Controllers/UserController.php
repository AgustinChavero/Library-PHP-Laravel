<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(UserRequest $request): JsonResponse
    {   
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_deleted' => false
        ]);

        return response()->json(['success' => 'User created successfully', 'data' => $user], 201);
    }

    public function update(UserRequest $request, $id): JsonResponse
    {
        $admin_id = $request->admin;
        $admin = User::find($admin_id);

        if (!$admin->is_admin) {
            return response()->json(['error' => 'Unauthorized. Only admins can update users.'], 403);
        }

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_deleted' => $request->is_deleted,
        ]);

        return response()->json(['success' => 'User updated successfully', 'data' => $user], 201);
    }

    public function getAll(): JsonResponse
    {
        $users = User::all();

        return response()->json(['success' => 'Users finded successfully', 'data' => $users], 200);
    }

    public function getOne($id): JsonResponse
    {
        $user = User::find($id);

        return response()->json(['success' => 'User finded successfully', 'data' => $user], 200);
    }

    public function delete(DeleteRequest $request, $id): JsonResponse
    {
        $userId = $request->input('user_id');

        $tokenExists = DB::table('personal_access_tokens')
                        ->where('tokenable_id', $userId)
                        ->exists();

        if (!$tokenExists) {
            return response()->json(['error' => 'Unauthorized. User not authenticated.'], 401);
        }

        $admin = User::find($userId);

        if (!$admin->is_admin) {
            return response()->json(['error' => 'Unauthorized. Only admins can update users.'], 403);
        }

        $user = User::find($id);
        $user->update([
            'is_deleted' => true
        ]);

        return response()->json(['success' => 'User deleted successfully', 'data' => $user], 201);
    }
}
