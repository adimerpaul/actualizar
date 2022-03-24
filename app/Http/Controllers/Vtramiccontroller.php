<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vtramiccontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        return DB::connection('vutrat')->table('v_tram_ic')->where('n_tramite',$request->n_tramite)->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        DB::connection('vutrat')->table('v_tram_ic')->where('CodAut',$id)->update([
            "n_tramite"=>$request->n_tramite,
            "na_ju"=>$request->na_ju,
            "form"=>$request->form,
            "padron"=>$request->padron,
            "t_cambio"=>$request->t_cambio,
            "cod_nuevo"=>$request->cod_nuevo,
            "sec_nuevo"=>$request->sec_nuevo,
            "pad_nuevo"=>$request->pad_nuevo,
            "raz_nuevo"=>$request->raz_nuevo,
            "pat_nuevo"=>$request->pat_nuevo,
            "mat_nuevo"=>$request->mat_nuevo,
            "nom_nuevo"=>$request->nom_nuevo,
            "ape_nuevo"=>$request->ape_nuevo,
            "ci_nuevo"=>$request->ci_nuevo,
            "dom_nuevo"=>$request->dom_nuevo,
            "sup_nuevo"=>$request->sup_nuevo,
            "dir_nuevo"=>$request->dir_nuevo,
            "zon_nuevo"=>$request->zon_nuevo,
            "form22"=>$request->form22,
            "comprob"=>$request->comprob,
            "t_requi"=>$request->t_requi,
            "req_1"=>$request->req_1,
            "req_2"=>$request->req_2,
            "req_3"=>$request->req_3,
            "req_4"=>$request->req_4,
            "req_5"=>$request->req_5,
            "req_6"=>$request->req_6,
            "req_7"=>$request->req_7,
            "req_8"=>$request->req_8,
            "c_me_amb"=>$request->c_me_amb,
            "observacio"=>$request->observacio,
            "form_pmc"=>$request->form_pmc,
            "n_res_tec"=>$request->n_res_tec,
            "nit_nuevo"=>$request->nit_nuevo,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::connection('vutrat')->table('v_tram_ic')->where('CodAut',$id)->delete();
    }
}
