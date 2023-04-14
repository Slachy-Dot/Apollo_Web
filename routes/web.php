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
Route::get('/home', [PageController::class, 'Home'])->name('index');

Route::get('/', function () {
    return view('Pages.Home.index');
});  

Route::get('/online', function () {
    return view('Pages.Online_Players.index');
});

Route::get('/discord', [PageController::class, 'Discord']);
Route::get('/apply', [PageController::class, 'McForum']);

Route::get('/wiki', [PageController::class, 'Wiki'])->name('index');
Route::get('/blog', [PageController::class, 'Blog'])->name('index');

Route::get('/dynmap', [PageController::class, 'Dynmap'])->name('index');
