<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $validated['email'])
            ->where('is_admin', true)
            ->first();

        if (! $user || ! Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => '認証に失敗しました',
            ], 401);
        }

        return response()->json([
            'message' => 'ログイン成功',
        ], 200);
    }
}
