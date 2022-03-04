<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inmuebleController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pm01inmu')
            ->where('cantidad',$request->cantidad)
            ->where('var1',$request->var1)
            ->update([
                    "flag_inmu"=>$request->flag_inmu,
                    "gestion"=>$request->gestion,
                    "cod_barrio"=>$request->cod_barrio,
                    "tipocalle"=>$request->tipocalle,
                    "nombrecall"=>$request->nombrecall,
                    "numcasa"=>$request->numcasa,
                    "bloque"=>$request->bloque,
                    "piso"=>$request->piso,
                    "numdpto"=>$request->numdpto,
                    "zona"=>$request->zona,
                    "distrito"=>$request->distrito,
                    "manzano"=>$request->manzano,
                    "lote"=>$request->lote,
                    "sublote"=>$request->sublote,
                    "descrip"=>$request->descrip,
                    "mat_vias"=>$request->mat_vias,
                    "luz"=>$request->luz,
                    "agua"=>$request->agua,
                    "alcantari"=>$request->alcantari,
                    "telefono"=>$request->telefono,
                    "superficie"=>$request->superficie,
                    "inclinac"=>$request->inclinac,
                    "viv_unifa"=>$request->viv_unifa,
                    "prop_horiz"=>$request->prop_horiz,
                    "sup_const"=>$request->sup_const,
                    "var2"=>$request->var2,
                    "deuda"=>$request->deuda,
                    "var3"=>$request->var3,
                    "exento"=>$request->exento,
                    "revalor"=>$request->revalor,
                    "cs_manz"=>$request->cs_manz,
                    "cs_lote"=>$request->cs_lote,
                    "cod_caja"=>$request->cod_caja,
                    "bandera"=>$request->bandera,
                    "valor_ha"=>$request->valor_ha,
                    "fecha_reg"=>$request->fecha_reg,
                    "hora_reg"=>$request->hora_reg,
                    "control"=>$request->control,
                    "n_informe"=>$request->n_informe,
                    "controlex"=>$request->controlex,
                    "docex"=>$request->docex,
                    "l07"=>$request->l07,
                    "l07terreno"=>$request->l07terreno,
                    "l07constru"=>$request->l07constru,
                    "l080"=>$request->l080,
                    "l080terren"=>$request->l080terren,
                    "l080constr"=>$request->l080constr,
                    "complemento"=>$request->complemento,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cantidad)
    {
        return DB::table('pm01inmu')->where('cantidad',$cantidad)->get();
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
