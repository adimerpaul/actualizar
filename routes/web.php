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
    Route::get('/datoscontrib2/{comun}', [App\Http\Controllers\ContribController::class, 'buscarcont2']);
    Route::get('/dpadron/{comun}', [App\Http\Controllers\IndcomController::class, 'dpadron']);
    Route::get('/datosindustria/{comun}', [App\Http\Controllers\IndcomController::class, 'index']);
    Route::get('/datosindustriaj/{comun}', [App\Http\Controllers\IndcomController::class, 'indexj']);
    Route::get('/datosrec/{comun}', [App\Http\Controllers\ContribController::class, 'datosrec']);
    Route::get('/gestiones/{comun}/{cantidad}', [App\Http\Controllers\ContribController::class, 'gestiones']);
    Route::get('/barchi/{cantidad}', [App\Http\Controllers\ContribController::class, 'barchi']);
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
    Route::post('/actualizararchic', [App\Http\Controllers\ContribController::class, 'actualizararchic']);
    Route::post('/creararchi', [App\Http\Controllers\ContribController::class, 'creararchi']);
    Route::apiResource('/ufv', App\Http\Controllers\UfvController::class);
    Route::apiResource('/patente', App\Http\Controllers\PatenteController::class);
    Route::apiResource('/vnatural', App\Http\Controllers\VnaturalController::class,['except'=>'show']);
    Route::apiResource('/vjuridica', App\Http\Controllers\VjuridicaController::class,['except'=>'show']);
    Route::post('/bvnatural',[\App\Http\Controllers\VnaturalController::class,'show']);
    Route::post('/bvjuridica',[\App\Http\Controllers\VjuridicaController::class,'show']);
    Route::put('/modvnatur',[\App\Http\Controllers\VnaturalController::class,'modvnatur']);
    Route::put('/modvjurd',[\App\Http\Controllers\VjuridicaController::class,'modvjuridica']);
    Route::apiResource('/cjuridica', App\Http\Controllers\VjuridicaController::class);

    Route::get('/datos20xx',[\App\Http\Controllers\ContribController::class,'datos20xx']);

    Route::get('/vutrat',[\App\Http\Controllers\VutratController::class,'index']);
    Route::get('/cobro',[\App\Http\Controllers\TransferenciaController::class,'cobro']);
    Route::get('/buscar/{id}',[\App\Http\Controllers\TransferenciaController::class,'buscar']);
    Route::get('/cobraracaja/{id}',[\App\Http\Controllers\TransferenciaController::class,'cobraracaja']);
    Route::post('/vutrat',[\App\Http\Controllers\VutratController::class,'store']);
    Route::get('/tramiteic',[\App\Http\Controllers\TramitesController::class,'tramiteic']);
    Route::get('/tramiteic',[\App\Http\Controllers\TramitesController::class,'tramiteic']);
    Route::post('/tramites',[\App\Http\Controllers\TramitesController::class,'store']);
    Route::apiResource('/ctramite', App\Http\Controllers\VtramiteController::class);
    Route::post('/bustramite',[\App\Http\Controllers\VtramiteController::class,'show']);
    Route::post('/btram/{id}',[\App\Http\Controllers\VtramiteController::class,'bustram']);
    Route::put('/modtram/{id}',[\App\Http\Controllers\VtramiteController::class,'update']);
    Route::get('/vertram/{ntram}/{aa}',[\App\Http\Controllers\VtramiteController::class,'verseguim']);
    Route::apiResource('/vuincom', App\Http\Controllers\VuincomController::class);
    Route::apiResource('/utasas', App\Http\Controllers\UtasasController::class);
    Route::apiResource('/transferencia', App\Http\Controllers\TransferenciaController::class);
    Route::apiResource('/rectificacion', App\Http\Controllers\RectificacionController::class);
    Route::get('/reporte', [App\Http\Controllers\RectificacionController::class,'reporte']);
    Route::POST('/consulta', [App\Http\Controllers\RectificacionController::class,'consulta']);
    Route::get('/inmueble/{cantidad}', [App\Http\Controllers\TransferenciaController::class,'inmueble']);
    Route::get('/contribuyente/{ci}', [App\Http\Controllers\TransferenciaController::class,'contribuyente']);
});


