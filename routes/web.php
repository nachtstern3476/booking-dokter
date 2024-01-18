<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
    Route::post('/', [MainController::class, 'book_doctor'])->name('book');
    Route::get('/booking', [MainController::class, 'book_list'])->name('book.list');
    Route::get('/contact-us', [MainController::class, 'contact'])->name('contact');
    Route::get('/about', [MainController::class, 'about'])->name('about');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'check_login'])->name('login.post');
    Route::post('/signup', [AuthController::class, 'signup'])->name('register.post');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
