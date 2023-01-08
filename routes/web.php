<?php

use App\Models\Kamer;
use App\Models\Klant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KlantController;

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
Route::view('/message', 'message')->name('message');
Route::get('/rooms', function () {
    return view('rooms', [
        'rooms' => Kamer::all()
    ]);
})->name('rooms');

Route::get('/reservation', function (Request $request) {
    return view('reservation', [
        'Kamernummer' => $request->Kamernummer
    ]);
})->name('reservation');

Route::post('/reservation', function (Request $request) {
    $klant = new Klant();
    $klant->datum_van_boeking = $request->datum_van_boeking;
    $klant->naam = $request->naam;
    $klant->address = $request->address;
    $klant->Aankomstdatum = $request->Aankomstdatum;
    $klant->Vertrekdatum = $request->Vertrekdatum;
    $klant->Kamernummer = $request->Kamernummer;
    $klant->Creditkaartnummer = $request->Creditkaartnummer;
    $klant->save();

    return redirect()->route('message');
});

Route::view('/about', 'about')->name('about');
Route::get('/rooms/{room}', function (Kamer $room) {
    return view('room', [
        'room' => $room,
    ]);
});



Route::resource('admin', AdminController::class);
Route::resource('adminKlant', KlantController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
