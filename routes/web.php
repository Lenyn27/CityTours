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

Route::get('tusplanes', function () {
    return view('tusplanes');
});

Route::get('lugares', function () {
    return view('lugares');
});

Route::get('hoteles', function () {
    return view('hoteles');
});

Route::get('contactos', function () {
    return view('contactos');
});

Route::get('comentarios', function () {
    return view('comentarios');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
