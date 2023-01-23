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

Route::resource('/admin/index', \App\Http\Controllers\IndexController::class);
Route::resource('/admin/slide', \App\Http\Controllers\SlideController::class);
Route::resource('/admin/noticia', \App\Http\Controllers\NoticiaController::class);
Route::resource('/admin/proyecto', \App\Http\Controllers\ProyectoController::class);
Route::resource('/admin/blog', \App\Http\Controllers\BlogController::class);
