<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/update',[PostController::class,'update']);
Route::get('/posts/delete',[PostController::class,'delete']);

Route::get('/cars',[CarController::class,'index']);
