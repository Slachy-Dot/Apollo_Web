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

//* Direct url redirect //*
Route::get('/discord', [PageController::class, 'Discord']);
Route::get('/apply', [PageController::class, 'McForum']);
//* End of Direct url redirect //*

Route::get('/wiki', [PageController::class, 'Wiki'])->name('index');
Route::get('/blog', [PageController::class, 'Blog'])->name('index');

Route::get('/home', function () {
    return view('Pages.Home.index');

Route::get('/home', function () {
    return view('Pages.Dynmap.index');    
});
