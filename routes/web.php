<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs',[blogsController::class,'index']);
Route::get('/blogs',[blogsController::class,'store']);
Route::get('/blogs/{blog}/update',[blogsController::class,'update']);
Route::put('/blogs/{blog}',[blogsController::class],'change');
Route::get('/blogs/create',[blogsController::class,'create']);
Route::put('/blogs/{blog}',[blogsController::class],'destory');