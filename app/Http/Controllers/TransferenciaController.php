<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class TransferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reporte()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
    public function index()
    {
        return view('transferencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ufv=DB::table('ufv')->whereDate('fecha',now())->first();
        $tasapare=DB::table('tasapare')->orderByDesc('CodAut')->first();
        $dat=array();
        array_push($dat,$ufv);
        array_push($dat,$tasapare);
        return $dat;
    }
    public function inmueble($cantidad){
        $inmueble=DB::table('pm01inmu')->where('cantidad',$cantidad)->where('bandera',1)->get();
        if ($inmueble->count()>0) {
            $contribuyente=DB::table('pm01cont')->where('comun',$inmueble[0]->comun)->first();
            $array=array();
            $array[]=$inmueble[0];
            $array[]=$contribuyente;
            return $array;
//            return ['contributente'=>$contribuyente,'inmueble'=>$inmueble];
        }
            return [];
    }
    public function contribuyente($ci){
        $contribuyente=DB::table('pm01cont')->where('comun',$ci)->get();
        return $contribuyente;
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
        return DB::table('ufv')->whereDate('fecha',$request->fecha)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comun)
    {
//        return DB::table('pm01cont')->limit(10)->get();
        return DB::table('pm01cont')->where('comun',$comun)->get();
    }
}
