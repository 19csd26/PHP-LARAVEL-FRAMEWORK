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

/**
 * Welcome Route
 * 
 * This route responds to the root URL and returns the Welcome view.
 */
Route::get('/', function () {
    return view('Welcome');
});

/**
 * Alpha Route
 * 
 * This route responds to the /alpha URL and returns the alpha view.
 */
Route::get('/alpha', function () {
    return view('alpha');
});

/**
 * Beta Route
 * 
 * This route responds to the /beta URL and returns the beta view.
 */
Route::get('/beta', function () {
    return view('beta');
});