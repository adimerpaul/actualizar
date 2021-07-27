<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Luecano\NumeroALetras\NumeroALetras;

class RectificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rectificacion');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->manzano==null?$manzano=0:$manzano=$request->manzano;
//        $request->distrito==null?$distrito=0:$distrito=$request->distrito;
//        $request->lote==null?$lote=0:$lote=$request->lote;
//        return $request;
        $request->l080=="false"?$l080=false:$l080=true;

        $formatter = new NumeroALetras();
        $texto= $formatter->toWords((int)$request->montodeterminado+2+(int)$request->mantenimientovalor+(int)$request->interes);

        $tranferencias=DB::connection('basesin')->table('rectificaciones')->insertGetId([
            'form1800'=>$request->form1800,
            'l080'=>$l080,
            'cantidad'=>$request->cantidad,
            'calle'=>$request->calle,
            'alcaldia'=>$request->alcaldia,
            'codigocatastral'=>$request->codigocatastral,
            'superficie'=>$request->superficie,
            'supcontruida'=>$request->supcontruida,
            'tipo'=>$request->tipo,
            'civendedor'=>$request->civendedor,
            'nombrevendedor'=>$request->nombrevendedor,
            'domiciliovendedor'=>$request->domiciliovendedor,
            'cicomprador'=>$request->cicomprador,
            'nombrecomprador'=>$request->nombrecomprador,
            'domiciliocomprador'=>$request->domiciliocomprador,
            'baseimponible'=>$request->baseimponible,
            'venta'=>$request->venta,
            'cotizacion'=>0,
            'liquido'=>$request->liquitacion,
            'totalpagar'=>$request->montodeterminado+2+$request->mantenimientovalor+$request->interes,
            'texto'=>$texto,
            'fechaminuta'=>$request->fechaminuta,
            'mantenimientovalor'=>$request->mantenimientovalor,
            'interes'=>$request->interes,
            'multamora'=>0,
            'multaincum'=>0,
            'multaadmin'=>0,
            'fechamulta'=>$request->fechamulta,
            'usuario'=>Auth::user()->name,
            'fecha'=>date('Y-m-d'),
            'hora'=>date('H:i:s'),
            "montodeterminado"=>$request->montodeterminado,
            "pagoanterior"=>$request->pagoanterior,
            "tranferencia_id"=>$request->tranferencia_id,
            "tipocambio"=>0,
            "formapago"=>"CONTADOR RECTIFICADO"
        ]);
        return DB::connection('basesin')->table('rectificaciones')->where('id',$tranferencias)->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trasferencias=DB::connection('basesin')->table('tranferencias')->where('cantidad',$id)->get();
        return $trasferencias;
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

    public function reporte()
    {
        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
        return view('reporte');
    }
    public function consulta(Request $request){
        $cajero=Auth::user()->name;
        $fecha=$request->fecha;

        return DB::connection('basesin')->table('rectificaciones')->where('cajero',$cajero)
        ->whereDate('fechacobro',$fecha)->get();

    }
}
