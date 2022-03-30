<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class natur_baja extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        DB::connection('indcom')->table('natur')->where('npadron',$request->npadron)->update([
            "hab"=>1
        ]);

        $num=DB::connection('indcom')->table('natur_baja')->where('npadron',$request->npadron)->get()->count();

        if($num>0){
            return "existe";
        }

        DB::connection('indcom')->table('natur_baja')->insert([
            "npadron"=>$request->npadron,
            "paterno"=>$request->paterno,
            "materno"=>$request->materno,
            "nombre"=>$request->nombre,
            "cedula"=>$request->cedula,
            "ntelefono"=>$request->ntelefono,
            "ndireccion"=>$request->ndireccion,
            "nacionalid"=>$request->nacionalid,
            "nruc"=>$request->nruc,
            "nactdescri"=>$request->nactdescri,
            "nsector"=>$request->nsector,
            "nfechainic"=>$request->nfechainic,
            "apeesposo"=>$request->apeesposo,
            "nzona"=>$request->nzona,
            "nmts2"=>$request->nmts2,
            "ndiract"=>$request->ndiract,
            "formcaja"=>$request->formcaja,
            "gest"=>$request->gest,
            "form22"=>$request->form22,
            "oper"=>$request->user()->name,
            "fed"=>$request->fed,
            "nufed"=>$request->nufed,
            "adeuda"=>$request->adeuda,
            "bandera"=>$request->bandera,
            "asociado"=>$request->asociado,
            "nro_asoc"=>$request->nro_asoc,
            "n_tug"=>$request->n_tug,
            "n_preim"=>$request->n_preim,
            "f_regi"=>$request->f_regi,
            "bloqueo"=>$request->bloqueo,
            "l07"=>$request->l07,
            "l07nmts2"=>$request->l07nmts2,
            "l259"=>$request->l259,
            "categtoria"=>$request->categtoria,
            "horario"=>$request->horario,
            "lfini"=>$request->lfini,
            "form_23"=>$request->form_23,
            "comp_baja"=>$request->comp_baja,
            "fe_baja"=>date("Y-m-d"),
            "cau_baja"=>$request->cau_baja,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return DB::connection('indcom')->table('natur')->where('npadron',$id)->get();
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
