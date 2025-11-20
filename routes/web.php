<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

route::get('mi_vista', function () {
    return view('mi_vista');
});

route::get('suma', function () {
    return view('suma');
});

route::get('resta', function () {
    return view('resta');
});

route::get('multiplicacion', function () {
    return view('multiplicacion');
});

route::get('/user', [UserController::class, 'index']);

route::get('/user/edit', [UserController::class, 'edit']);
route::post('/user/update', [UserController::class, 'update']);

route::get('/user/create', [UserController::class, 'create']);
route::post('/user/store', [UserController::class, 'store']);

route::get('/user/delete', [UserController::class, 'delete']);

Route::get('/pokemones', [UserController::class, 'pokemones']);