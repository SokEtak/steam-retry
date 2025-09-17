<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/test-upload', function () {
    $disk = Storage::disk('s3');

    if ($disk->exists('folder/file.txt')) {
        return "File exists!";
    }

    $uploaded = $disk->put('folder/file.txt', 'Hello Laravel Cloud!');
    return $uploaded ? "Uploaded successfully!" : "Upload failed!";
});


Route::get('/', function () {
    return view('welcome');
});


