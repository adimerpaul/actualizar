<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TramitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tramiteic(){
        $tramites=DB::connection('vutrat')->table('v_tram_ic')->get();
        return  view('tramiteic',['tramites'=>$tramites]);
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::connection('vutrat')->table('v_tram_ic')->where('n_tramite',$request->n_tramite)
        ->update([
//            'n_tramite'=>$request->n_tramite,//n_tramite}}"
            'na_ju'=>$request->na_ju,//na_ju}}"
            'form'=>$request->form,//form}}"
            'padron'=>$request->padron,//padron}}"
            't_cambio'=>$request->t_cambio,//t_cambio}}"
            'cod_nuevo'=>$request->cod_nuevo,//cod_nuevo}}"
            'sec_nuevo'=>$request->sec_nuevo,//sec_nuevo}}"
            'pad_nuevo'=>$request->pad_nuevo,//pad_nuevo}}"
            'raz_nuevo'=>$request->raz_nuevo,//raz_nuevo}}"
            'pat_nuevo'=>$request->pat_nuevo,//pat_nuevo}}"
            'mat_nuevo'=>$request->mat_nuevo,//mat_nuevo}}"
            'nom_nuevo'=>$request->nom_nuevo,//nom_nuevo}}"
            'ape_nuevo'=>$request->ape_nuevo,//ape_nuevo}}"
            'ci_nuevo'=>$request->ci_nuevo,//ci_nuevo}}"
            'dom_nuevo'=>$request->dom_nuevo,//dom_nuevo}}"
            'dir_nuevo'=>$request->dir_nuevo,//dir_nuevo}}"
            'zon_nuevo'=>$request->zon_nuevo,//zon_nuevo}}"
            'form22'=>$request->form22,//form22}}"
            'comprob'=>$request->comprob,//comprob}}"
            't_requi'=>$request->t_requi,//t_requi}}"
            'req_1'=>$request->req_1,//req_1}}"
            'req_2'=>$request->req_2,//req_2}}"
            'req_3'=>$request->req_3,//req_3}}"
            'req_4'=>$request->req_4,//req_4}}"
            'req_5'=>$request->req_5,//req_5}}"
            'req_6'=>$request->req_6,//req_6}}"
            'req_7'=>$request->req_7,//req_7}}"
            'req_8'=>$request->req_8,//req_8}}"
            'c_me_amb'=>$request->c_me_amb,//c_me_amb}}"
            'observacio'=>$request->observacio,//observacio}}"
            'form_pmc'=>$request->form_pmc,//form_pmc}}"
            'n_res_tec'=>$request->n_res_tec,//n_res_tec}}"
        ]);
        return redirect('/tramiteic');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
