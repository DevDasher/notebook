<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/notes', [NoteController::class, 'index'])->name('notes');

// Route::get('/notes/store', [NoteController::class, 'store']);

Route::resource('notes', NoteController::class);

// Route::get('/notes/{note}', [NoteController::class, 'show']);
// Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
// Route::delete('/notes/{note}', [NoteController::class, 'destroy']);

