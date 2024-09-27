<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
})->name(name: 'home');

Route::get('/register', function () {
    return view(view: 'forms.register');
})->name(name: 'register');

Route::get('/login', function () {
    return view(view: 'forms.login');
})->name(name: 'login');

Route::get('/menu', function () {
    return view(view: 'menu');
})->name(name: 'menu');

Route::get('/menu/profil', function () {
    return view(view: 'profil');
})->name(name: 'profil');

Route::post('/register/addUser', [UserController::class, 'userStore'])->name(name: 'user.store');
Route::post('/login/loginUser', [UserController::class,'userLogin'])->name(name: 'user.login');
Route::post('/menu/profil/modif', [UserController::class,'userUpdate'])->name(name:'user.update');

Route::get('/menu/profil/logout', [UserController::class,'userLogout'])->name(name: 'user.logout');
Route::get('/menu/profil/delete', [UserController::class,'userDelete'])->name(name: 'user.delete');