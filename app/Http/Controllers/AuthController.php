<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\DeleteRequest;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth-token')->plainTextToken;

            return response()->json(['success' => 'Login successful', 'user' => $user, 'token' => $token], 200);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }


    public function logout(Request $request)
    {
        $user_id = $request->input('user_id');

        $query = DB::table('personal_access_tokens');
        if ($user_id) {
            $query->where('tokenable_id', 'like', '%' . $user_id . '%');
        }

        $tokens = $query->get();

        foreach ($tokens as $token) {
            DB::table('personal_access_tokens')->where('id', $token->id)->delete();
        }

        return response()->json(['success' => 'Token deleted'], 200);
    }
}

