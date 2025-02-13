<?php

namespace App\Http\Controllers\API\v1;

use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Auth\{LoginRequest, RegisterRequest};
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken(env('APP_NAME', 'Laravel'), ['*'], now()->addWeek())->plainTextToken;

        return response()->json(compact('user', 'token'), 201);
    }

    /**
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->getQueryParams();

        if (Auth::attempt($credentials) === false) {
            return response()->json(['message' => __('auth.failed')], 403);
        }

        $user = $request->user();
        $token = $user->createToken(env('APP_NAME', 'Laravel'), ['*'], now()->addWeek())->plainTextToken;

        return response()->json(compact('user', 'token'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' =>  __('auth.logout')]);
    }
}
