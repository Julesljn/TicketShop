<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userStore(UserRequest $request)
    {   // Add User DB
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash Password
            'birthday' => $request->birthday,
            'artiste_name' => $request->artiste_name,
            'picture' => $request->picture,
            'role' => 'client',
        ]);

        // Response
        return redirect()->route('home');
    }
}
