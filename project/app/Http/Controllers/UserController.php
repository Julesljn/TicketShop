<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use illuminate\Http\RedirectResponse;
use App\Models\User;
use Auth;
use Hash;
class UserController extends Controller
{
    public function userStore(UserRequest $request): RedirectResponse
    {   // Add User DB
        $user = User::create(attributes: [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make(value: $request->password), // Hash Password
            'birthday' => $request->birthday,
            'artiste_name' => $request->artiste_name,
            'picture' => $request->picture,
            'role' => 'client',
        ]);

        // Response
        return redirect()->route(route: 'home');
    }
    public function userLogin(LoginRequest $request)
    {
        $credentials = $request->only('email','password'); // Je prend que email, password
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();   
            return redirect()->route(route: 'home');
        }
        return redirect()->route(route: 'login')->withErrors('Adresse Email ou Mot de passe incorrect');
    }
}
