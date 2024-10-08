<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use illuminate\Http\RedirectResponse;
use App\Models\User;
use Request;
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
    public function userLogin(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password'); // Je prend que email, password
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route(route: 'home');
        }
        return redirect()->route(route: 'login')->withErrors(provider: 'Adresse Email ou Mot de passe incorrect');
    }
    public function userLogout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route(route: 'home');
    }
    public function userDelete(): RedirectResponse
    {
        $user = Auth::user();

        if ($user) {
            $user->delete();
            Auth::logout();
            return redirect()->route(route: 'home');
        }
    }
    public function userUpdate(UserUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->update(attributes: [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
        ]);
        return redirect()->route(route: 'profil');
    }
}