<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function register(Request $request)
    {
        //Validate data
        $data = $request->only('name', 'email', 'password');
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|string|min:6|max:50'
        ]);

        // Retrieve the validated input...
        $validated = $validator->validated();

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 200);
        }

        // Hash Password
        $validated['password'] = bcrypt($validated['password']);

        // Create User
        $user = User::create($validated);

        //User created, return success response
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ], Response::HTTP_CREATED);

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        // send failed response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 200);
        }


    }
}
