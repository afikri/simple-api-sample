<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('up', function() {
    Storage::disk('google')->put('google-drive.txt', 'Google Drive As Filesystem In Laravel (ManhDanBlogs)');
    dd('Upload file test google drive');
})->name('up');
Route::get('/', function () {
    return view('welcome');
});
