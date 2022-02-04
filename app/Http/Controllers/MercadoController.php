<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MercadoController extends Controller{
    public function controlm(Request $request){
        $b=substr($request->gest,2,2);
        DB::connection('bases')->table('lidgme'.$b)
            ->where('padron',$request->padron)
//            ->where('cantidad',$request->cantidad)
            ->where('gestion',$request->gest)
            ->update([
                'control'=>$request->control,
                'cod_caja'=>$request->cod_caja,
                'fech_pago'=>$request->fech_pago,
                'fech_emis'=>$request->fech_emis,
                'hora'=>$request->hora,
            ]);
        $log=new Log();
        $log->actividad='Mercado control actualizado gestion '.$request->gest.' del  '.$request->padron;
        $log->iduser=Auth::user()->id;
        $log->nombre=Auth::user()->username;
        $log->save();
        return 1;
    }
    public function buscarmercado($padron){
        $padron=str_replace('-','',$padron);
//        return $padron;
        $eventual= DB::connection("merc20xx")->table("eventual")->where('padron',$padron)->get();
        if (count($eventual)>0){
            return trim($eventual[0]->paterno).' '.trim($eventual[0]->materno).' '.trim($eventual[0]->nombres).'<div class="badge badge-success">Eventual</div>';
        }else{
            $formal= DB::connection("merc20xx")->table("formales")->where('padron',$padron)->get();

            if (count($formal)>0){
                return trim($formal[0]->paterno).' '.trim($formal[0]->materno).' '.trim($formal[0]->nombres).'<div class="badge badge-warning">Formal</div>';
            }
        }
    }
    public function limpiarmercado(Request $request){
//        return $request;
        $b=substr($request->gest,2,2);
        $cont=array(
            'cod_caja'=>'',
            'fech_pago'=>null,
            'hora'=>''
        );
        DB::connection('bases')->table('lidgme'.$b)
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
    public function pagosmercados($padron){
        $month = strtotime("1991-01-01");
        $end = strtotime(date('Y-m-d', strtotime("-1 year")));
        $gestiones=array();
        while($month <= $end) {
//            echo date('y', $month)."----- <br>";
            $query=DB::connection('bases')->table('lidgme'.date('y', $month))->where('padron',$padron);
            if ($query->count()>0){
//                echo date('y',$month)."---<br>";
//                array_push($gestiones,['gestion'=>date('Y',$month)]);
                array_push($gestiones,$query->get());
            }
            $month = strtotime("+1 year", $month);
        }
        return $gestiones;
    }
    public function padrone($padron){
        return DB::connection("merc20xx")->table("eventual")->where('padron',$padron)->get();
    }
    public function padronf($padron){
        return DB::connection("merc20xx")->table("formales")->where('padron',$padron)->get();
    }
    public function updatepadrone(Request $request){
        return DB::connection("merc20xx")
            ->table("eventual")->where('padron',$request->padron)
            ->update([
                        'pad1'=>$request->pad1==null?'':$request->pad1,
                        'pad2'=>$request->pad2==null?'':$request->pad2,
                        'pad3'=>$request->pad3==null?'':$request->pad3,
                        'paterno'=>$request->paterno==null?'':$request->paterno,
                        'materno'=>$request->materno==null?'':$request->materno,
                        'ap_esposo'=>$request->ap_esposo==null?'':$request->ap_esposo,
                        'nombres'=>$request->nombres==null?'':$request->nombres,
                        'carnet'=>$request->carnet==null?'':$request->carnet,
                        'fono'=>$request->fono==null?'':$request->fono,
                        'domicilio'=>$request->domicilio==null?'':$request->domicilio,
                        'ruc'=>$request->ruc==null?'':$request->ruc,
                        'oper'=>$request->oper==null?'':$request->oper,
                        'fecha'=>$request->fecha=='0000-00-00 00:00:00'?NULL:$request->fecha,
                        'hora'=>$request->hora=='0000-00-00 00:00:00'?null:$request->hora,
                        'fecha_inic'=>$request->fecha_inic==null?null:$request->fecha_inic,
                        'gest'=>$request->gest==null?'':$request->gest,
                        'codigo'=>$request->codigo==null?'':$request->codigo,
                        'tipo_pues'=>$request->tipo_pues==null?'':$request->tipo_pues,
                        'ubicacion'=>$request->ubicacion==null?'':$request->ubicacion,
                        'ancho'=>$request->ancho==null?'':$request->ancho,
                        'largo'=>$request->largo==null?'':$request->largo,
                        'observ'=>$request->observ==null?'':$request->observ,
                        'padant'=>$request->padant==null?'':$request->padant,
                        'dias'=>$request->dias==null?'':$request->dias,
                        'compr'=>$request->compr==null?'':$request->compr,
                        'bandera'=>$request->bandera==null?'':$request->bandera,
                        'asociado'=>$request->asociado==null?'':$request->asociado,
                        'nro_asoc'=>$request->nro_asoc==null?'':$request->nro_asoc,
                        'n_tug'=>$request->n_tug==null?'':$request->n_tug,
                        'n_preim'=>$request->n_preim==null?'':$request->n_preim,
                        'f_regi'=>$request->f_regi=='0000-00-00 00:00:00'?null:$request->f_regi,
                        'l07'=>$request->l07==null?'':$request->l07,
                        'tuc'=>$request->tuc==null?'':$request->tuc,
                        'n_tuc'=>$request->n_tuc==null?'':$request->n_tuc,
                        'n_pretuc'=>$request->n_pretuc==null?'':$request->n_pretuc,
                        'f_regtuc'=>$request->f_regtuc=='0000-00-00 00:00:00'?null:$request->f_regtuc,
                        'ob_tuc'=>$request->ob_tuc==null?'':$request->ob_tuc,
                        'l080'=>$request->l080==null?'':$request->l080,
                        'hab'=>$request->hab==''?null:$request->hab,
            ]);
    }
    public function updatepadronf(Request $request){
        return DB::connection("merc20xx")
            ->table("formales")->where('padron',$request->padron)
            ->update([
                "form23"=>$request->form23==null?'':$request->form23,
                "pad1"=>$request->pad1==null?'':$request->pad1,
                "pad2"=>$request->pad2==null?'':$request->pad2,
                "pad3"=>$request->pad3==null?'':$request->pad3,
                "paterno"=>$request->paterno==null?'':$request->paterno,
                "materno"=>$request->materno==null?'':$request->materno,
                "ap_esposo"=>$request->ap_esposo==null?'':$request->ap_esposo,
                "nombres"=>$request->nombres==null?'':$request->nombres,
                "carnet"=>$request->carnet==null?'':$request->carnet,
                "fono"=>$request->fono==null?'':$request->fono,
                "domicilio"=>$request->domicilio==null?'':$request->domicilio,
                "ruc"=>$request->ruc==null?'':$request->ruc,
                "oper"=>$request->oper==null?'':$request->oper,
                "fecha"=>$request->fecha=='0000-00-00 00:00:00'?null:$request->fecha,
                "hora"=>$request->hora=='0000-00-00 00:00:00'?null:$request->hora,
                "fecha_inic"=>$request->fecha_inic==null?'':$request->fecha_inic,
                "gest"=>$request->gest==null?'':$request->gest,
                "codigo"=>$request->codigo==null?'':$request->codigo,
                "tipo_pues"=>$request->tipo_pues==null?'':$request->tipo_pues,
                "ancho"=>$request->ancho==null?'':$request->ancho,
                "largo"=>$request->largo==null?'':$request->largo,
                "observ"=>$request->observ==null?'':$request->observ,
                "padant"=>$request->padant==null?'':$request->padant,
                "compr"=>$request->compr==null?'':$request->compr,
                "bandera"=>$request->bandera==null?'':$request->bandera,
                "asociado"=>$request->asociado==null?'':$request->asociado,
                "nro_asoc"=>$request->nro_asoc==null?'':$request->nro_asoc,
                "n_tug"=>$request->n_tu==null?'':$request->n_tu,
                "n_preim"=>$request->n_preim==null?'':$request->n_preim,
                "f_regi"=>$request->f_regi=='0000-00-00 00:00:00'?null:$request->f_regi,
                "l07"=>$request->l07==null?'':$request->l07,
                "tuc"=>$request->tuc==null?'':$request->tuc,
                "n_tuc"=>$request->n_tuc==null?'':$request->n_tuc,
                "n_pretuc"=>$request->n_pretu==null?'':$request->n_pretu,
                "f_regtuc"=>$request->f_regtuc=='0000-00-00 00:00:00'?null:$request->f_regtuc,
                "ob_tuc"=>$request->ob_tuc==null?'':$request->ob_tuc,
                "l080"=>$request->l080==null?'':$request->l080,
                "hab"=>$request->hab==''?null:$request->hab,
//                'pad1'=>$request->pad1==null?'':$request->pad1,
//                'pad2'=>$request->pad2==null?'':$request->pad2,
//                'pad3'=>$request->pad3==null?'':$request->pad3,
//                'paterno'=>$request->paterno==null?'':$request->paterno,
//                'materno'=>$request->materno==null?'':$request->materno,
//                'ap_esposo'=>$request->ap_esposo==null?'':$request->ap_esposo,
//                'nombres'=>$request->nombres==null?'':$request->nombres,
//                'carnet'=>$request->carnet==null?'':$request->carnet,
//                'fono'=>$request->fono==null?'':$request->fono,
//                'domicilio'=>$request->domicilio==null?'':$request->domicilio,
//                'ruc'=>$request->ruc==null?'':$request->ruc,
//                'oper'=>$request->oper==null?'':$request->oper,
//                'fecha'=>$request->fecha=='0000-00-00 00:00:00'?NULL:$request->fecha,
//                'hora'=>$request->hora=='0000-00-00 00:00:00'?null:$request->hora,
//                'fecha_inic'=>$request->fecha_inic==null?null:$request->fecha_inic,
//                'gest'=>$request->gest==null?'':$request->gest,
//                'codigo'=>$request->codigo==null?'':$request->codigo,
//                'tipo_pues'=>$request->tipo_pues==null?'':$request->tipo_pues,
//                'ubicacion'=>$request->ubicacion==null?'':$request->ubicacion,
//                'ancho'=>$request->ancho==null?'':$request->ancho,
//                'largo'=>$request->largo==null?'':$request->largo,
//                'observ'=>$request->observ==null?'':$request->observ,
//                'padant'=>$request->padant==null?'':$request->padant,
//                'dias'=>$request->dias==null?'':$request->dias,
//                'compr'=>$request->compr==null?'':$request->compr,
//                'bandera'=>$request->bandera==null?'':$request->bandera,
//                'asociado'=>$request->asociado==null?'':$request->asociado,
//                'nro_asoc'=>$request->nro_asoc==null?'':$request->nro_asoc,
//                'n_tug'=>$request->n_tug==null?'':$request->n_tug,
//                'n_preim'=>$request->n_preim==null?'':$request->n_preim,
//                'f_regi'=>$request->f_regi=='0000-00-00 00:00:00'?null:$request->f_regi,
//                'l07'=>$request->l07==null?'':$request->l07,
//                'tuc'=>$request->tuc==null?'':$request->tuc,
//                'n_tuc'=>$request->n_tuc==null?'':$request->n_tuc,
//                'n_pretuc'=>$request->n_pretuc==null?'':$request->n_pretuc,
//                'f_regtuc'=>$request->f_regtuc=='0000-00-00 00:00:00'?null:$request->f_regtuc,
//                'ob_tuc'=>$request->ob_tuc==null?'':$request->ob_tuc,
//                'l080'=>$request->l080==null?'':$request->l080,
//                'hab'=>$request->hab==''?null:$request->hab,
            ]);
    }
}
