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
            'paterno'=>$request->paterno,
            'materno'=>$request->materno,
            'nombre'=>$request->nombre,
            'cedula'=>$request->cedula,
            'ntelefono'=>$request->ntelefono,
            'ndireccion'=>$request->ndireccion,
            'nruc'=>$request->nruc,
            'nsector'=>$request->nsector,
            'apeesposo'=>$request->apeesposo,
            'nmts2'=>$request->nmts2,
            'ndiract'=>$request->ndiract,
            'gest'=>$request->gest);
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
            'jmts2'=>$request->jmts2,
            'gest'=>$request->gest,
//            'apeesposo'=>$request->apeesposo,
//            'nmts2'=>$request->nmts2,
//            'ndiract'=>$request->ndiract,
//            'gest'=>$request->gest
        );
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
}
