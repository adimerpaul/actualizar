<?php

namespace App\Http\Controllers;

use App\Models\contrib;
use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

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
    public function bandera(Request $request)
    {
        DB::table('pm01inmu')
            ->where('cantidad',$request->cantidad)
            ->where('comun',$request->comun)
            ->update(['bandera'=>$request->bandera,'control'=>$request->control]);
        echo 1;
    }
    public function cambiorec(Request $request){

        DB::table('pm01inmu')
            ->where('cantidad',$request->cantidad)
            ->where('comun',$request->comun)
            ->update(['superficie'=>$request->superficie,'gestion'=>$request->gestion,'docex'=>$request->docex,'sup_const'=>$request->sup_const]);
                $log=new Log();
                $log->actividad='Contribuyente rectificado  '.$request->comun;
                $log->iduser=Auth::user()->id;
                $log->nombre=Auth::user()->username;
                $log->save();
        return 1;
    }
    public function cambioges($cantidad,$gestion){

        DB::table('pm01inmu')
            ->where('cantidad',$cantidad)
            ->update(['gestion'=>$gestion]);
        $log=new Log();
        $log->actividad='Inmueble actualizado gestion  '.$cantidad;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }
    public function actualizarrec(Request $request)
    {
        $b=substr($request->gest,2,2);
        $cont=array(
            'comun'=>$request->comun.'R',
            'cantidad'=>$request->cantidad.'R'
        );
        DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->update($cont);
        return 1;
    }
    public function limpiar(Request $request)
    {
        $b=substr($request->gest,2,2);
        $cont=array(
            'oper'=>'',
            'pagado_en'=>null,
            'hora'=>''
        );
        DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->where('gest',$request->gest)
            ->update($cont);
        $log=new Log();
        $log->actividad='Contribuyente Dado de baja la gestion '.$request->gest.' del  '.$request->comun;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
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
        //$request()->validate(['ci'=>'required']);
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

        $log=new Log();
        $log->actividad='Contribuyente modificado '.$comun;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();

        return redirect('/actualiza');
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
    public function ultimages($comun){
        return DB::table('pm01inmu')->where('cantidad',$comun)->get();
    }

    public function gestiones($comun,$cantidad){
        $month = strtotime("1992-01-01");
        $end = strtotime(date('Y-m-d', strtotime("-1 year")));
        $gestiones=array();
        while($month <= $end)
        {
//            echo date('y', $month)."----- <br>";
            $query=DB::connection('tasas')->table('archi'.date('y', $month))->where('comun','like','%'.$comun.'%')->where('cantidad','like','%'.$cantidad.'%');
            if ($query->count()>0){
//                echo date('y',$month)."---<br>";
//                array_push($gestiones,['gestion'=>date('Y',$month)]);
                array_push($gestiones,$query->get());
            }
            $month = strtotime("+1 year", $month);
        }
        return $gestiones;
//        return DB::connection('tasas')->table('archi92')->where('comun',$comun)->get();
    }
    public function inmuebles($comun){
        return DB::table('pm01inmu')->where('comun',$comun)->get();
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
