<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
Route::get('/login',function(){

    return view('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);