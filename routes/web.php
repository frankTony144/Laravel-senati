<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/user', [UserController::class,'index']);

Route::get('/user/edit', [UserController::class,'edit']);

Route::post('/user/update', [UserController::class,'update']);

