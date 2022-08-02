<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('upload', function () {
    Storage::disk('google')->put("google.txt", "Hello world");
    dd("Test upload");
});
