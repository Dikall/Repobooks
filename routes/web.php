<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('Rusak Saja Buku Ini', function () {
    return view('vibrantecosystem');
});

Route::get('Si Kancil', function () {
    return view('namaweb');
});
