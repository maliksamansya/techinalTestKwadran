<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FormController::class, 'index'])->name('home'); // udah
// Route::get('/form', [FormController::class, 'showForm'])->name('form');
Route::post('/submit-form', [FormController::class, 'processForm'])->name('process.form');
