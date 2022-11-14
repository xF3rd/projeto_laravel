<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/show', [App\Http\Controllers\HomeController::class,'show']);
Route::get('/home/edit', [App\Http\Controllers\HomeController::class,'edit']);
Route::post('/home', [App\Http\Controllers\HomeController::class,'store']);
Route::put('/home/update', [App\Http\Controllers\HomeController::class,'update']);



