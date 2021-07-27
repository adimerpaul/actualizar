<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Luecano\NumeroALetras\NumeroALetras;

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

        $request->manzano==null?$manzano=0:$manzano=$request->manzano;
        $request->distrito==null?$distrito=0:$distrito=$request->distrito;
        $request->lote==null?$lote=0:$lote=$request->lote;
        $request->l080=="false"?$l080=false:$l080=true;
//        $totalpagar=
        $formatter = new NumeroALetras();
        $texto= $formatter->toWords($request->liquitacion+2+$request->mantenimiento+$request->interes);
        $tranferencias=DB::connection('basesin')->table('tranferencias')->insertGetId([
            'form1800'=>$request->form1800,
            'l080'=>$l080,
            'cantidad'=>$request->cantidad,
            'calle'=>$request->nombrecall.' '.$request->numcasa,
            'alcaldia'=>$request->cod_ham,
            'codigocatastral'=>$manzano.'-'.$distrito.'-'.$lote,
            'superficie'=>$request->superficie,
            'supcontruida'=>$request->sup_const,
            'tipo'=>$request->var1,
            'civendedor'=>$request->comun1,
            'nombrevendedor'=>$request->paterno1.' '.$request->materno1.' '.$request->nombre1,
            'domiciliovendedor'=>$request->domicilio1,
            'cicomprador'=>$request->comun2,
            'nombrecomprador'=>$request->paterno2.' '.$request->materno2.' '.$request->nombre2,
            'domiciliocomprador'=>$request->domicilio2,
            'baseimponible'=>$request->baseimponible,
            'venta'=>$request->importeventa,
            'cotizacion'=>0,
            'liquido'=>$request->liquitacion,
            'totalpagar'=>$request->liquitacion+2+$request->mantenimiento+$request->interes,
            'texto'=>$texto,
            'fechaminuta'=>$request->fechminuta,
            'mantenimientovalor'=>$request->mantenimiento,
            'interes'=>$request->interes,
            'multamora'=>0,
            'multaincum'=>0,
            'multaadmin'=>0,
            'fechamulta'=>$request->fechalimite,
            'usuario'=>Auth::user()->name,
            'fecha'=>date('Y-m-d'),
            'hora'=>date('H:i:s'),
            "montodeterminado"=>$request->liquitacion,
            "pagoanterior"=>0,
            "tipocambio"=>0,
            "formapago"=>"CONTADOR ORIGINAL"
        ]);
        return DB::connection('basesin')->table('tranferencias')->where('id',$tranferencias)->get();
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
    public function cobro(){
        return view('cobro');
    }
    public function buscar($id){
//        return view('cobro');
//        echo $id;
        return DB::connection('basesin')->table('rectificaciones')->where('cantidad',$id)->where('cajero','')->get();
    }
    public function cobraracaja($id){
//        return $id;
        DB::connection('basesin')->table('rectificaciones')->where('id',(int)$id)->update([
            "cajero"=>Auth::user()->name,
            "fechacobro"=>date("Y-m-d"),
            "horacobro"=>date("H:i:s"),
        ]);
        return DB::connection('basesin')->table('rectificaciones')->where('id',$id)->get();
    }
}
