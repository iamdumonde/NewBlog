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
// master.blade
Route::get('/', function () {
    return view('layouts.master');
});

// contact.blade
Route::get('/contact-us', function () {
    return view('layouts.contact');
});
