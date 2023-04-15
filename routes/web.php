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
use App\Http\Controllers\HomeController;
Route::view('/', 'Pages.Home.index')->name('home');
Route::get('home', [HomeController::class, 'Home'])->name('index');


use App\Http\Controllers\PageController;

Route::get('/discord', [PageController::class, 'Discord'])->name('discord');

Route::get('/apply', [PageController::class, 'McForum'])->name('apply');

Route::get('/wiki', [PageController::class, 'Wiki'])->name('wiki');
Route::get('/blog', [PageController::class, 'Blog'])->name('blog');

Route::get('/dynmap', [PageController::class, 'dynmap'])->name('dynmap');

Route::get('/donate', function () {
    return view('Pages.Donate.index');
});


