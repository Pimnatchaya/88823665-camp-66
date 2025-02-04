<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layouts.default');
});

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});
Route::get("/mycontroller/{id?}", 
[MyController::class, 'myfunction']);

Route::post("/mycontroller/{id?}", 
[MyController::class, 'MYFUNCTION']);

Route::get('/login',
    [LoginController::class, 'index']);
Route::get('/register',
    [RegisterController::class, 'index']);
Route::post('/register',
        [RegisterController::class, 'create']);
Route::get('/home',
    [HomeController::class, 'index']);
Route::get('/',
    [HomeController::class, 'index']);
Route::get('/users',
    [UserController::class, 'index']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}',
    [MyController::class, 'MYFUNCTION']);