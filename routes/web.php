<?php

use App\Http\Controllers\HomeController;
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
Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');




// Route::get('/all-url-list', [HomeController::class, 'allUrlList'])->name('all_url_list');
// Route::post('/shorten', [HomeController::class, 'shorten'])->name('shorten');
// Route::get('/{shortCode}', [HomeController::class, 'redirect']);




