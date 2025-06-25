<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})
->name('home')
->middleware('auth');


Route::resource('/users', UserController::class)
->middleware('auth');
Route::resource('/posts', PostController::class)->middleware('auth');
Route::resource('/comments', CommentController::class)->middleware('auth');

Route::get("/register",[AuthController::class, "showRegisterForm"])
->name("show_registration");

Route::post("/register",[AuthController::class, "register"])
->name("register_user");


Route::get("/login",[AuthController::class, "showLoginForm"])
->name("show_login");

Route::post("/login",[AuthController::class, "login"])
->name("login");

Route::post("/logout",[AuthController::class, "logout"])
->name("logout");
