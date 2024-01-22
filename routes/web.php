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
    $start_date = \Carbon\Carbon::parse(config('app.start_date'));

    return view('home', [
        'start_date' => $start_date,
        'year_count' => config('app.year_count')
    ]);
})->name('home');

Route::get('/kontakt', function () {
    return view('contact');
})->name('contact');

Route::get('/mapa', function () {
    return view('map');
})->name('map');
