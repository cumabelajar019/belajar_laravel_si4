<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Hello, World!';
});

Route::get('about', function () {
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('mahasiswa', function () {
    return 'Ini adalah halaman <b>mahasiswa</b>';
});

Route::get('profile', function () {
    return 'Ini adalah halaman <b>profile</b>';
});