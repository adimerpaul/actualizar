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
    public function creararchi(Request $request){
        $b=substr($request->gest,2,2);
        DB::connection('tasas')->table('archi'.$b)
            ->insert([
                "compro"=>$request->compro,
                "flag_tasas"=>$request->flag_tasas,
                "comun"=>$request->comun,
                "cantidad"=>$request->cantidad,
                "distrito"=>$request->distrito,
                "manzano"=>$request->manzano,
                "lote"=>$request->lote,
                "sublote"=>$request->sublote,
                "codigo"=>$request->codigo,
                "tipo"=>$request->tipo,
                "Habdep"=>$request->Habdep,
                "nf"=>$request->nf,
                "Frente"=>$request->Frente,
                "gest"=>$request->gest,
                "Item1"=>$request->Item1,
                "Item2"=>$request->Item2,
                "Item3"=>$request->Item3,
                "Item4"=>$request->Item4,
                "Item5"=>$request->Item5,
                "Item6"=>$request->Item6,
                "Item7"=>$request->Item7,
                "Item8"=>$request->Item8,
                "Item9"=>$request->Item9,
                "Item10"=>$request->Item10,
                "Pagado"=>$request->Pagado,
                "Inter"=>$request->Inter,
                "mMora"=>$request->mMora,
                "Minclu"=>$request->Minclu,
                "Formu"=>$request->Formu,
                "nomb"=>$request->nomb,
                "descuento"=>$request->descuento,
                "fecha"=>$request->fecha,
                "oper"=>$request->oper,
                "pagado_en"=>$request->pagado_en,
                "hora"=>$request->hora,
                "descriphab"=>$request->descriphab,
            ]);
        return 1;
    }
    public function actualizararchic(Request $request){
        $b=substr($request->gest,2,2);
        DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->where('CodAut',$request->CodAut)
            ->update([
                "compro"=>$request->compro,
                "flag_tasas"=>$request->flag_tasas,
                "comun"=>$request->comun,
                "cantidad"=>$request->cantidad,
                "distrito"=>$request->distrito,
                "manzano"=>$request->manzano,
                "lote"=>$request->lote,
                "sublote"=>$request->sublote,
                "codigo"=>$request->codigo,
                "tipo"=>$request->tipo,
                "Habdep"=>$request->Habdep,
                "nf"=>$request->nf,
                "Frente"=>$request->Frente,
                "gest"=>$request->gest,
                "Item1"=>$request->Item1,
                "Item2"=>$request->Item2,
                "Item3"=>$request->Item3,
                "Item4"=>$request->Item4,
                "Item5"=>$request->Item5,
                "Item6"=>$request->Item6,
                "Item7"=>$request->Item7,
                "Item8"=>$request->Item8,
                "Item9"=>$request->Item9,
                "Item10"=>$request->Item10,
                "Pagado"=>$request->Pagado,
                "Inter"=>$request->Inter,
                "mMora"=>$request->mMora,
                "Minclu"=>$request->Minclu,
                "Formu"=>$request->Formu,
                "nomb"=>$request->nomb,
                "descuento"=>$request->descuento,
                "fecha"=>$request->fecha,
                "oper"=>$request->oper,
                "pagado_en"=>$request->pagado_en,
                "hora"=>$request->hora,
                "descriphab"=>$request->descriphab,
            ]);
        return 1;
    }
    public function barchi($cantidad){
        $month = strtotime("1992-01-01");
        $end = strtotime(date('Y-m-d', strtotime("-1 year")));
        $gestiones=array();
        while($month <= $end)
        {
//            echo date('y', $month)."----- <br>";
            $query=DB::connection('tasas')->table('archi'.date('y', $month))->where('cantidad','like','%'.$cantidad.'%');
            if ($query->count()>0){
//                echo date('y',$month)."---<br>";
//                array_push($gestiones,['gestion'=>date('Y',$month)]);
                array_push($gestiones,$query->get());
            }
            $month = strtotime("+1 year", $month);
        }
        return $gestiones;
    }
    public function index()
    {
        //
    }
    public function actualizararchi(Request $request){
        $b=substr($request->gest,2,2);
        $dat=[
            'oper'=>$request->oper,
            'pagado_en'=>$request->pagado_en,
            'hora'=>$request->hora,
        ];
//        return $dat;
        DB::connection('tasas')
            ->table('archi'.$b)
            ->where('cantidad',$request->cantidad)
            ->where('comun',$request->comun)
            ->update($dat);
//        return 2;
        $log=new Log();
        $log->actividad='Archi modificado en'.$b.'  en comun'.$request->comun;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }
    public function bandera(Request $request)
    {
        DB::table('pm01inmu')
            ->where('CodAut',$request->cantidad)
//            ->where('comun',$request->comun)
            ->update(['bandera'=>$request->bandera,'control'=>$request->control,'var1'=>$request->var1]);
        echo 1;
    }
    public function cambiorec(Request $request){

        DB::table('pm01inmu')
            ->where('CodAut',$request->cantidad)
//            ->where('comun',$request->comun)
            ->update(['superficie'=>$request->superficie,'gestion'=>$request->gestion,'docex'=>$request->docex,'sup_const'=>$request->sup_const]);
                $log=new Log();
                $log->actividad='Contribuyente rectificado  '.$request->comun;
                $log->iduser=Auth::user()->id;
                $log->nombre=Auth::user()->username;
                $log->save();
        return 1;
    }
    public function cambioges(Request $request){

        DB::table('pm01inmu')
            ->where('CodAut',$request->cantidad)
            ->update(['gestion'=>$request->gestion]);
        $log=new Log();
        $log->actividad='Inmueble actualizado '.$request->cantidad.' en la gestion '.$request->gestion;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }
    public function datosrec($comun){
        $query=DB::table('pm01inmu')->where('comun',$comun)->get();
//        return $query[0]->flag_inmu;
//        exit;
        if ($query[0]->flag_inmu=='J'){
            $q=DB::table('pmjucont')->where('comun',$comun)->first();
            return $q->razon_soc.' <span class="badge badge-warning">J</span>';
        }else{
            $q = DB::table('pm01cont')->where('comun',$comun)->first();
            return $q->paterno.' '.$q->materno.' '.$q->nombre.' <span class="badge badge-success">N</span>';
        }
    }

    public function actualizarrec(Request $request)
    {
        $b=substr($request->gest,2,2);

        //$b=substr($request->comun, 0, -1);
        $r=DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->get();
//        return $r[0]->comun;
//        exit;
        if (strpos($r[0]->comun, 'R') !== false) {
            $comun=substr($request->comun, 0, -1);
            $cantidad=substr($request->cantidad, 0, -1);
            $cont=array(
                'comun'=>$comun,
                'cantidad'=>$cantidad
            );
        }else{
            $cont=array(
                'comun'=>$request->comun.'R',
                'cantidad'=>$request->cantidad.'R'
            );
        }



        DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->update($cont);
        return 1;
    }
    public function limpiar(Request $request)
    {
//        return $request;
        $b=substr($request->gest,2,2);
        $cont=array(
            'oper'=>'',
            'pagado_en'=>null,
            'hora'=>''
        );
        DB::connection('tasas')->table('archi'.$b)
            ->where('comun',$request->comun)
            ->where('cantidad',$request->cantidad)
            ->where('CodAut',$request->CodAut)
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
        if (Contrib::where('comun',$comun)->get()->count()>0){
            $contribuyente= Contrib::where('comun',$comun)->get();
            return $contribuyente[0]->paterno.' '.$contribuyente[0]->materno.' '.$contribuyente[0]->nombre.'<div class="badge badge-success">N</div>';
        }else{
            $contribuyente=DB::table('pmjucont')->where('comun',$comun)->get();
//            $dat[]=$contribuyente['comun'];
            return $contribuyente[0]->razon_soc.'<div class="badge badge-warning">J</div>';
        }

    }
    public function buscarcont2($comun){
//        if (Contrib::where('comun',$comun)->get()->count()>0){
//            $contribuyente= Contrib::where('comun',$comun)->get();
//            return $contribuyente[0]->paterno.' '.$contribuyente[0]->materno.' '.$contribuyente[0]->nombre.'<div class="badge badge-success">N</div>';
//        }else{
//            $contribuyente=DB::table('pmjucont')->where('comun',$comun)->get();
////            $dat[]=$contribuyente['comun'];
//            return $contribuyente[0]->razon_soc.'<div class="badge badge-warning">J</div>';
//        }
        return Contrib::where('comun',$comun)->get();
    }

    public function ultimages($comun){
        return DB::table('pm01inmu')->where('CodAut',$comun)->get();
    }

    public function gestiones($comun,$CodAut){
        $month = strtotime("1992-01-01");
        $end = strtotime(date('Y-m-d', strtotime("-1 year")));
        $gestiones=array();
        $dat=DB::table('pm01inmu')->where('CodAut',$CodAut)->first();
        while($month <= $end)
        {
//            echo date('y', $month)."----- <br>";
            $query=DB::connection('tasas')
//                ->table('archi'.date('y', $month))
//                ->where('cantidad','like','%'.trim($dat->cantidad).'%')
//                ->where('comun','like','%'.trim($dat->comun).'%');
                ->select("SELECT * FROM archi".date('y', $month)." WHERE cantidad like '".trim($dat->cantidad)."%' AND comun like '".trim($dat->comun)."%' ");
//            echo $query->get();
            if (count($query)>0){
//                echo date('y',$month)."---<br>";
//                array_push($gestiones,['gestion'=>date('Y',$month)]);
                array_push($gestiones,$query);
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
    public function datos20xx(){
        $fechven= DB::connection('datos20xx')->table('fechven')->get();
        foreach ($fechven as $f){
            echo $f->gest.'----';
//            var_dump($f);
        }
    }
}
