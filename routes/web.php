<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

// Comic CRUD

// Index
Route::get('/comics',[ResourceController::class, 'index'])->name('comics.index');

// Create
Route::get('/comics/create', [ResourceController::class, 'create'])->name('comics.create');


// Show
Route::get('/comics/{comic}', [ResourceController::class, 'show'])->name('comics.show');


// Store
Route::post('/houses', [ResourceController::class, 'store'])->name('comics.store');