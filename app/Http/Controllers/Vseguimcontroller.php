<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vseguimcontroller extends Controller
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
        return DB::connection('vutrat')->table('v_seguim')->where('n_tramite',$request->n_tramite)->get();
    }
    public function crearvseguim(Request $request)
    {
        return DB::connection('vutrat')->table('v_seguim')->insert([
            "n_tramite"=>$request->n_tramite,
            "c_tramite"=>$request->c_tramite,
            "c_proce"=>$request->c_proce,
            "c_uni"=>$request->c_uni,
            "fecha_ini"=>$request->fecha_ini,
            "fecha_fin"=>$request->fecha_fin,
            "operador"=>$request->operador,
            "estado"=>$request->estado,
        ]);
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
        DB::connection('vutrat')->table('v_seguim')->where('CodAut',$id)->update([
            "n_tramite"=>$request->n_tramite,
            "c_tramite"=>$request->c_tramite,
            "c_proce"=>$request->c_proce,
            "c_uni"=>$request->c_uni,
            "fecha_ini"=>$request->fecha_ini,
            "fecha_fin"=>$request->fecha_fin,
            "operador"=>$request->operador,
            "estado"=>$request->estado,
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
        DB::connection('vutrat')->table('v_seguim')->where('CodAut',$id)->delete();
    }
}
