<?php

use App\Http\Controllers\KuisController;
use App\Http\Controllers\NomophobiaController;
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

Route::get('/', function () {
    return view('index');
});



Route::get('/nomophobia', function () {
    return view('nomophobia');
});

Route::get('/kuis-nomophobia', function () {
    return view('kuis-nomo');
});

Route::post('/kuis-nomo', [NomophobiaController::class, 'biodata']);
Route::post('/results-nomo', [NomophobiaController::class, 'results']);
Route::get('/hasil-nomo', function () {
    return view('hasil-nomo');
});

Route::get('/literasi-digital', function () {
    return view('literasi-digital'); 
 });

Route::get('/kuis', function () {
    return view('kuis');
});

Route::post('/kuis', [KuisController::class, 'biodata']);
Route::get('/results', [KuisController::class, 'getResults']);
Route::post('/results', [KuisController::class, 'results']);
Route::get('/hasil', function () {
    return view('hasil');
});


