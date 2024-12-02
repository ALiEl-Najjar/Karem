<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
