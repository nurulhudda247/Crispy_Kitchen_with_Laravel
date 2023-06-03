<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
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

// Frontend

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/news-detail', [FrontendController::class, 'newsDetail'])->name('newsDetail');

// Backend

Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [BackendController::class, 'products'])->name('add-products');