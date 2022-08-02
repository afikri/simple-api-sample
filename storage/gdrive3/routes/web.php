<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('u', function () {
    Storage::disk('google')->put('google-drive.txt', 'Google Drive As Filesystem In Laravel (ManhDanBlogs)');
    dd('Đã upload file lên google drive thành công!');
});
Route::get('/', function () {
    return view('welcome');
});
