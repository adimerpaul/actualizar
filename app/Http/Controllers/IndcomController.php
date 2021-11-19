<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndcomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function limpiarp(Request $request){
        $b=substr($request->gest,2,2);
        $cont=array(
            'cod_caja'=>'',
            'fech_pago'=>null,
            'hora'=>''
        );
        DB::connection('bases')->table('lidgic'.$b)
            ->where('padron',$request->padron)
//            ->where('cantidad',$request->cantidad)
            ->where('gestion',$request->gest)
            ->update($cont);
        $log=new Log();
        $log->actividad='Padron Dado de baja la gestion '.$request->gest.' del  '.$request->padron;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }

    public function controlp(Request $request){
        $b=substr($request->gest,2,2);
        DB::connection('bases')->table('lidgic'.$b)
            ->where('padron',$request->padron)
//            ->where('cantidad',$request->cantidad)
            ->where('gestion',$request->gest)
            ->update([
                'control'=>$request->control,
            ]);
        $log=new Log();
        $log->actividad='Padron control actualizado gestion '.$request->gest.' del  '.$request->padron;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }
    public function cambiogesind(Request $request)
    {
        if ($request->tipo=='natur'){
            DB::connection('indcom')
                ->table('natur')
                ->where('npadron',$request->padron)
                ->update(['gest'=>$request->gest]);
        }else{
            DB::connection('indcom')
                ->table('jurid')
                ->where('jpadron',$request->padron)
                ->update(['gest'=>$request->gest]);
        }
        echo 1;
    }
    public function index($npadron)
    {
        $query=DB::connection('indcom')->table('natur')->where('npadron',$npadron)->get();
        if ($query->count()>0){
            return $query;
            exit;
        }
//        $query=DB::connection('indcom')->table('jurid')->where('jpadron',$npadron)->get();
//        if ($query->count()>0){
//            return $query;
//            exit;
//        }
    }
    public function pagosinmu($padron){
        $year = strtotime("1995-01-01");
        $end = strtotime(date('Y-m-d', strtotime("-1 year")));
        $lidgme=array();
        while($year <= $end)
        {
//            $query=DB::connection('bases')->table('lidgic'.date('y', $year))->where('padron','like','%'.$padron.'%');
            $query=DB::connection('bases')->table('lidgic'.date('y', $year))->where('padron',$padron);
            if ($query->count()>0){
                array_push($lidgme,$query->get());
            }
            $year = strtotime("+1 year", $year);
        }
        return $lidgme;
    }
    public function indexj($npadron)
    {
//        $query=DB::connection('indcom')->table('natur')->where('npadron',$npadron)->get();
//        if ($query->count()>0){
//            return $query;
//            exit;
//        }
        $query=DB::connection('indcom')->table('jurid')->where('jpadron',$npadron)->get();
        if ($query->count()>0){
            return $query;
            exit;
        }
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
    public function update(Request $request, $npadron)
    {

        $dat=array(
//            'paterno'=>$request->paterno,
//            'materno'=>$request->materno,
//            'nombre'=>$request->nombre,
//            'cedula'=>$request->cedula,
//            'ntelefono'=>$request->ntelefono,
//            'ndireccion'=>$request->ndireccion,
//            'nruc'=>$request->nruc,
//            'nsector'=>$request->nsector,
//            'apeesposo'=>$request->apeesposo,
//            'nmts2'=>$request->nmts2,
//            'ndiract'=>$request->ndiract,
//            'gest'=>$request->gest,
//            'nactdescri'=>$request->nactdescri,
//            'l080'=>$request->l080,
//            'nfechainic'=>$request->nfechainic
                            'paterno'=>$request->paterno,
                            'materno'=>$request->materno,
                            'nombre'=>$request->nombre,
                            'cedula'=>$request->cedula,
                            'ntelefono'=>$request->ntelefono,
                            'ndireccion'=>$request->ndireccion,
                            'nacionalid'=>$request->nacionalid,
                            'nruc'=>$request->nruc,
                            'nactdescri'=>$request->nactdescri,
                            'nsector'=>$request->nsector,
                            'nfechainic'=>$request->nfechainic,
                            'apeesposo'=>$request->apeesposo,
                            'nzona'=>$request->nzona,
                            'nmts2'=>$request->nmts2,
                            'ndiract'=>$request->ndiract,
                            'formcaja'=>$request->formcaja,
                            'gest'=>$request->gest,
                            'form22'=>$request->form22,
                            'oper'=>$request->oper,
                            'fed'=>$request->fed,
                            'nufed'=>$request->nufed,
                            'adeuda'=>$request->adeuda,
                            'bandera'=>$request->bandera,
                            'asociado'=>$request->asociado,
                            'nro_asoc'=>$request->nro_asoc,
                            'n_tug'=>$request->n_tug,
                            'n_preim'=>$request->n_preim,
                            'f_regi'=>$request->f_regi,
                            'bloqueo'=>$request->bloqueo,
                            'l07'=>$request->l07,
                            'l07nmts2'=>$request->l07nmts2,
                            'l259'=>$request->l259,
                            'categtoria'=>$request->categtoria,
                            'horario'=>$request->horario,
                            'lfini'=>$request->lfini,
                            'l080'=>$request->l080,
                            'hab'=>$request->hab,
        );
        DB::connection('indcom')
            ->table('natur')
            ->where('npadron',$npadron)
            ->update($dat);
        $log=new Log();
        $log->actividad='Contribuyente en natural industria y comercio  modificado natural'.$npadron;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return redirect('/indcom');
    }
    public function updatej(Request $request, $npadron)
    {
        $dat=array(
            'razon'=>$request->razon,
            'jdireccion'=>$request->jdireccion,
            'jtelefono'=>$request->jtelefono,
            'jruc'=>$request->jruc,
            'jactdescri'=>$request->jactdescri,
            'jdiractiv'=>$request->jdiractiv,
            'jsector'=>$request->jsector,
            'jfechainic'=>$request->jfechainic,
            'sucursales'=>$request->sucursales,
            'nomreplega'=>$request->nomreplega,
            'numdociden'=>$request->numdociden,
            'cargo'=>$request->cargo,
            'jzona'=>$request->jzona,
            'jmts2'=>$request->jmts2,
            'numform'=>$request->numform,
            'gest'=>$request->gest,
            'oper'=>$request->oper,
            'fed'=>$request->fed,
            'nufed'=>$request->nufed,
            'adeuda'=>$request->adeuda,
            'l07'=>$request->l07,
            'l259'=>$request->l259,
            'categoria'=>$request->categoria,
            'horario'=>$request->horario,
            'lf_ini'=>$request->lf_ini,
            'lf_fin'=>$request->lf_fin,
            'l07jmts2'=>$request->l07jmts2,
            'l080'=>$request->l080,
            'hab'=>$request->hab,
//            'apeesposo'=>$request->apeesposo,
//            'nmts2'=>$request->nmts2,
//            'ndiract'=>$request->ndiract,
//            'gest'=>$request->gest
        );
//        return $dat;
        DB::connection('indcom')
            ->table('jurid')
            ->where('jpadron',$npadron)
            ->update($dat);
        $log=new Log();
        $log->actividad='Contribuyente en natural industria y comercio  modificado juridico'.$npadron;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return redirect('/indcomj');
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
    public function dpadron($padron){
//        echo "a";
//        exit;
        $query=DB::connection('indcom')->table('natur')->where('npadron',$padron)->get();
    //        return $query[0];
    //        exit;
        if ($query->count()>0){
//            return $query->first();
            $q=$query->first();
            $nombre=$q->paterno.' '.$q->materno.' '.$q->nombre.' <b>Direc:</b>'.$q->ndireccion.'<span class=" badge badge-success">Natural</span>';
            $re['nombre']=$nombre;
            $re['tipo']='natur';
            $re['gest']=$q->gest;
            return $re;
//            $q=DB::table('pmjucont')->where('comun',$comun)->first();
//            return $q->paterno.' '.$q->materno.' '.$q->nombre.' <span class="badge badge-warning">J</span>';
        }else{
            $q=DB::connection('indcom')->table('jurid')->where('jpadron',$padron)->get()->first();
            $nombre=$q->razon.' <b>Direc:</b>'.$q->jdireccion.' <b>Repre:</b>'.$q->nomreplega.'<span class=" badge badge-warning">Juridico</span>';
//            $nombre=$q->paterno.' '.$q->materno.' '.$q->nombre.' '.$q->ndireccion.'<span class=" badge badge-success">Natural</span>';
            $re['nombre']=$nombre;
            $re['tipo']='jurid';
            $re['gest']=$q->gest;
            return $re;
//            $q = DB::table('pm01cont')->where('comun',$comun)->first();
//            return $q->paterno.' '.$q->materno.' '.$q->nombre.' <span class="badge badge-success">N</span>';
        }
    }
}
