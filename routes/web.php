<?php

use App\Http\Controllers\UserdonController;
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

//Route::get('/', [UserdonController::class, 'home'])->name('home');
Route::get('/', [UserdonController::class, 'index'])->name('index');
Route::get('/donate', [UserdonController::class, 'donate'])->name('donate');
Route::post('/donate', [UserdonController::class, 'store'])->name('donate.store');
Route::get('/payment', [UserdonController::class, 'payment'])->name('payment');

