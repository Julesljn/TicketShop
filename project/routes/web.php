<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('forms.register');
})->name('register');
Route::get('/login', function () {
    return view('forms.login');
})->name('login');

Route::post('/register/addUser', [UserController::class, 'userStore'])->name('user.store');
Route::post('/login/loginUser', [UserController::class,'userLogin'])->name('user.login');