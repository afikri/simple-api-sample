<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/image', [ImageController::class,'getImage']);
Route::post('/store', [ImageController::class,'store'])->name('image.store');