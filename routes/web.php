<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
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
Route::view('/', 'Pages.Home.index')->name('home');

Route::get('home', [PageController::class, 'Home'])->name('index');


Route::get('/online', function () {
    return view('Pages.Online_Players.index');
});


Route::get('/discord', [PageController::class, 'Discord'])->name('discord');

Route::get('/apply', [PageController::class, 'McForum'])->name('apply');

Route::get('/wiki', [PageController::class, 'Wiki'])->name('wiki');
Route::get('/blog', [PageController::class, 'Blog'])->name('blog');

Route::get('/dynmap', [PageController::class, 'dynmap'])->name('dynmap');