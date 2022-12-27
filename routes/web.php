<?php

use App\Http\Controllers\AdminController;
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

Route::view('/', 'landingPage')->name('landingPage');
Route::view('/rooms', 'rooms')->name('rooms');
Route::view('/reservation', 'reservation')->name('reservation');
Route::view('/about', 'about')->name('about');
Route::get('/rooms/{id}', function ($id) {
    echo $id;
});

Route::post('reservation', function () {

})->name('submit');

Route::resource('admin', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
