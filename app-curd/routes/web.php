<?php

use App\Http\Controllers\ProductController;
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

// Default route pointing to the 'welcome' view
Route::get('/', function () {
    return view('welcome');
});

// Route to display all products
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Route to display the form for creating a new product
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// Route to store a new product in the database
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// Route to display the form for editing a specific product
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

// Route to update a specific product in the database
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');

// Route to delete a specific product from the database
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
