<?php

use App\Http\Controllers\KuisController;
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

Route::get('/kuis', function () {
    return view('kuis');
});

Route::post('/kuis', [KuisController::class, 'biodata']);

Route::get('/results', [KuisController::class, 'getResults']);
Route::post('/results', [KuisController::class, 'results']);

Route::get('/hasil', function () {
    return view('hasil');
});
