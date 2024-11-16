<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/status', function () {
    return view('status');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/kontak', function () {
    return view('kontak');
});
