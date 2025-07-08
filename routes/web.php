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

Route::get('/', function () {
    return view('home'); // home.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
});

Route::get('/myproject', function () {
    return view('myproject');
});

Route::get('/v&m', function () {
    return view('v&m');
});

Route::get('/introduction', function () {
    return view('introduction');
});

Route::get('/skills', function () {
    return view('skills');
});
