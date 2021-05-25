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
Route::get('/anulacion', function () {
    return view('anulacion');
})->middleware('auth');
Route::get('/rec', function () {
    return view('rec');
})->middleware('auth');
Route::get('/indcom', function () {
    return view('indcom');
})->middleware('auth');
Route::get('/indcomj', function () {
    return view('indcomj');
})->middleware('auth');
Route::get('/updatearchi', function () {
    return view('updatearchi');
})->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logeo', [App\Http\Controllers\user::class, 'consulta']);
Route::get('/codham', [App\Http\Controllers\ContribController::class, 'codham'])->name('home');
Route::group(['middleware'=>'auth'],function (){
    Route::get('/datoscontrib/{comun}', [App\Http\Controllers\ContribController::class, 'buscarcont']);
    Route::get('/dpadron/{comun}', [App\Http\Controllers\IndcomController::class, 'dpadron']);
    Route::get('/datosindustria/{comun}', [App\Http\Controllers\IndcomController::class, 'index']);
    Route::get('/datosindustriaj/{comun}', [App\Http\Controllers\IndcomController::class, 'indexj']);
    Route::get('/datosrec/{comun}', [App\Http\Controllers\ContribController::class, 'datosrec']);
    Route::get('/gestiones/{comun}/{cantidad}', [App\Http\Controllers\ContribController::class, 'gestiones']);
    Route::get('/pagosinmu/{comun}', [App\Http\Controllers\IndcomController::class, 'pagosinmu']);
    Route::get('/inmuebles/{comun}', [App\Http\Controllers\ContribController::class, 'inmuebles']);
    Route::get('/ultimages/{comun}', [App\Http\Controllers\ContribController::class, 'ultimages']);
    Route::post('/actualizarrec', [App\Http\Controllers\ContribController::class, 'actualizarrec']);
    Route::post('/limpiar', [App\Http\Controllers\ContribController::class, 'limpiar']);
    Route::post('/limpiarp', [App\Http\Controllers\IndcomController::class, 'limpiarp']);
    Route::post('/cambiorec', [App\Http\Controllers\ContribController::class, 'cambiorec']);
    Route::post('/bandera', [App\Http\Controllers\ContribController::class, 'bandera']);
    Route::put('/modificar/{comun}', [App\Http\Controllers\ContribController::class, 'update']);
    Route::put('/modnatural/{comun}', [App\Http\Controllers\IndcomController::class, 'update']);
    Route::put('/modjuridico/{comun}', [App\Http\Controllers\IndcomController::class, 'updatej']);
    Route::post('/cambiogesind',[App\Http\Controllers\IndcomController::class, 'cambiogesind']);
    Route::post('/cambioges',[App\Http\Controllers\ContribController::class, 'cambioges']);
    Route::post('/actualizararchi', [App\Http\Controllers\ContribController::class, 'actualizararchi']);
    Route::apiResource('/ufv', App\Http\Controllers\UfvController::class);

    Route::apiResource('/patente', App\Http\Controllers\PatenteController::class);

});

