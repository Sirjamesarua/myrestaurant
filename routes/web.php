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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\PagesController::class, 'aboutus']);
Route::get('/menu', [App\Http\Controllers\PagesController::class, 'menu']);
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blog']);
Route::get('/contacts', [App\Http\Controllers\PagesController::class, 'contact']);
