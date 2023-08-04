<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{

    public function signup(Request $request) {
        $fields = $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'role_id' => 'required|integer'
        ]);


        if ($fields['role_id'] === 1) {
            $roleType = 'user';
        } elseif ($fields['role_id'] === 2) {
            $roleType = 'admin';
        } else {
            return response(['message' => 'Invalid role_id'], 400);
        }

        // Check if the role with the specified type exists in the roles table
        $role = Role::where('type', $roleType)->first();

        if (!$role) {
            return response(['message' => 'Invalid role_id'], 400);
        }

        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'role_id' => $role->id
        ]);

        $token = $user->createToken('myappToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        //return successful when create
        return response($response, 201);
    }

    public function logout(Request $request) {

        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });

        return [
            "message" => "Logout out"
        ];

    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //check email
        $user = User::where('email', $fields['email'])->first();

        //check password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myappToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        //return successful when create
        return response($response, 201);
    }
}
