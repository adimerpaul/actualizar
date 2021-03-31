<?php

namespace App\Http\Controllers;

use App\Models\contrib;
use Illuminate\Http\Request;

class ContribController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contrib  $contrib
     * @return \Illuminate\Http\Response
     */
    public function show(contrib $contrib)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contrib  $contrib
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contrib $contrib)
    {
        //
        $comun=$request->ci;
        //$cont=Cont::where('comun',$comun)->where('tipodocum',$tipodocum)->get();  

        $cont=array(
       
        'expedido'=>$request->expedido,
        'paterno'=>$request->paterno,
        'materno'=>$request->materno,
        'nombre'=>$request->nombre,
        'cod_ham'=>$request->cod_ham,
        'cod_barrio'=>$request->cod_barrio,
        'tipocalle'=>$request->tipocalle,
        'nombrecall'=>$request->nombrecall,
        'numcasa'=>$request->numcasa,
        'telefono'=>$request->telefono,
        'descrip'=>$request->descrip,
        'nacimient'=>$request->nacimient);
        DB::table('pm01cont')
        ->where('comun',$comun)
        ->update($cont);
        echo'Registro modificado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contrib  $contrib
     * @return \Illuminate\Http\Response
     */
    public function destroy(contrib $contrib)
    {
        //
    }
    
    public function buscarcont($comun){
        return Contrib::where('comun',$comun)->get(); 

    }

    public function codbarrio(){
        return DB::table('pmbarrio')->select('barrio','codigo')->get();
    }
    
    public function codham(){
        return DB::table('pmcodham')->select('codigo','alcaldia')->orderByDesc('alcaldia')->get();
        
    }
    
    public function codzona(){
        return DB::table('pmzona')->select('zona','descrip')->get();
        
    }
}
