<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('landingPage');
})->name('landingPage');

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/rooms/{id}', function ($id) {
    echo $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
