<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VutratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades=DB::connection('vutrat')->table('actividad')->get();
        $sectores=DB::connection('vutrat')->table('sectores')->get();
        $procesos=DB::connection('vutrat')->table('v_proces')->get();
        $requisitos=DB::connection('vutrat')->table('v_requis')->get();
        $funcionarios=DB::connection('vutrat')->table('v_opers')->get();
        return view('vutrat',[
            'actividades'=>$actividades,
            'sectores'=>$sectores,
            'procesos'=>$procesos,
            'requisitos'=>$requisitos,
            'funcionarios'=>$funcionarios,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::connection('vutrat')->table('v_opers')
            ->where('cod_per',$request->cod_per)
            ->update([
                'fech_caduca'=>$request->fech_caduca
            ]);
        echo 1;
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
