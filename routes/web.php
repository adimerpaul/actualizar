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
    return view('auth/login');
});
Route::get('/inicio', function () {
    return view('layouts/principal');
})->middleware('auth');

Route::get('/actualiza', function () {
    return view('formcontrib');
})->middleware('auth');

Route::get('/gestion', function () {
    return view('gestion');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logeo', [App\Http\Controllers\user::class, 'consulta']);
Route::get('/codham', [App\Http\Controllers\ContribController::class, 'codham'])->name('home');
Route::get('/datoscontrib/{comun}', [App\Http\Controllers\ContribController::class, 'buscarcont'])->middleware('auth');
Route::get('/gestiones/{comun}/{cantidad}', [App\Http\Controllers\ContribController::class, 'gestiones'])->middleware('auth');
Route::get('/cambioges/{comun}/{gestion}', [App\Http\Controllers\ContribController::class, 'cambioges'])->middleware('auth');
Route::get('/inmuebles/{comun}', [App\Http\Controllers\ContribController::class, 'inmuebles'])->middleware('auth');
Route::get('/ultimages/{comun}', [App\Http\Controllers\ContribController::class, 'ultimages'])->middleware('auth');
Route::post('/limpiar', [App\Http\Controllers\ContribController::class, 'limpiar'])->middleware('auth');
Route::put('/modificar/{comun}', [App\Http\Controllers\ContribController::class, 'update'])->middleware('auth');

