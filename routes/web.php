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

Route::get('/vutratcontrol', function () {
    return view('vutratcontrol');
})->middleware('auth');

Route::get('/vutratcontrol2', function () {
    return view('vutratcontrol2');
})->middleware('auth');
Route::get('/vutratcontrol3', function () {
    return view('vutratcontrol3');
})->middleware('auth');
Route::get('/bajana', function () {
    return view('bajana');
})->middleware('auth');
Route::get('/bajaju', function () {
    return view('bajaju');
})->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mercado', [App\Http\Controllers\HomeController::class, 'mercado'])->name('home');

Route::post('/logeo', [App\Http\Controllers\user::class, 'consulta']);
Route::get('/codham', [App\Http\Controllers\ContribController::class, 'codham'])->name('home');
Route::group(['middleware'=>'auth'],function (){
    Route::get('/datoscontrib/{comun}', [App\Http\Controllers\ContribController::class, 'buscarcont']);
    Route::get('/padrone/{padron}', [App\Http\Controllers\MercadoController::class, 'padrone']);
    Route::get('/padronf/{padron}', [App\Http\Controllers\MercadoController::class, 'padronf']);
    Route::get('/buscarmercado/{padron}',[\App\Http\Controllers\MercadoController::class,'buscarmercado']);
    Route::get('/pagosmercados/{padron}', [App\Http\Controllers\MercadoController::class, 'pagosmercados']);
    Route::post('/updatepadrone', [App\Http\Controllers\MercadoController::class, 'updatepadrone']);
    Route::post('/updatepadronf', [App\Http\Controllers\MercadoController::class, 'updatepadronf']);
    Route::post('/controlm', [App\Http\Controllers\MercadoController::class, 'controlm']);
    Route::resource('/inmu', App\Http\Controllers\inmuebleController::class);


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
    Route::post('/limpiarmercado', [App\Http\Controllers\MercadoController::class, 'limpiarmercado']);

    Route::post('/controlp', [App\Http\Controllers\IndcomController::class, 'controlp']);
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
    Route::post('/bvtramite',[\App\Http\Controllers\VnaturalController::class,'bvtramite']);
    Route::post('/bvjuridica',[\App\Http\Controllers\VjuridicaController::class,'show']);
    Route::put('/modvnatur',[\App\Http\Controllers\VnaturalController::class,'modvnatur']);
    Route::post('/modvtramite',[\App\Http\Controllers\VnaturalController::class,'modvtramite']);

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
    Route::resource('/vj', App\Http\Controllers\VutratjuridicaController::class);
    Route::resource('/vn', App\Http\Controllers\VutratnaturalController::class);
    Route::resource('/vs', App\Http\Controllers\VutratnseguimController::class);
    Route::resource('/vseguim', App\Http\Controllers\Vseguimcontroller::class);

    Route::post('/crearvseguim', [App\Http\Controllers\Vseguimcontroller::class,'crearvseguim']);
    Route::resource('/v_tram_ic', App\Http\Controllers\Vtramiccontroller::class);
    Route::resource('/v_mod_ic', App\Http\Controllers\V_mod_icController::class);
    Route::resource('/v_requis', App\Http\Controllers\V_requisController::class);
    Route::resource('/v_tramites', App\Http\Controllers\V_tramitesController::class);
    Route::resource('/natur_baja', App\Http\Controllers\natur_baja::class);
    Route::resource('/jurid_baja', App\Http\Controllers\jurid_baja::class);
    Route::get('/reporte', [App\Http\Controllers\RectificacionController::class,'reporte']);
    Route::POST('/consulta', [App\Http\Controllers\RectificacionController::class,'consulta']);
    Route::get('/inmueble/{cantidad}', [App\Http\Controllers\TransferenciaController::class,'inmueble']);
    Route::get('/contribuyente/{ci}', [App\Http\Controllers\TransferenciaController::class,'contribuyente']);
});


