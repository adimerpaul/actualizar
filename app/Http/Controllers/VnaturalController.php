<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VnaturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vnatural');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $query=DB::connection('vutrat')->table('v_naturales')->where('n_tramite',$request->tramite)
        ->orWhere('pmc',$request->tramite)->get();
        return $query;
    }
    public function bvtramite(Request $request){
        $query=DB::connection('vutrat')->table('v_tramites')->where('n_tramite',$request->tramite)->get();
        return $query;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modvnatur(Request $request)
    {
        $vnat=array(
       "f_19"=>$request->f_19,
       "cod_acti"=>$request->cod_acti,
       "cod_sector"=>$request->cod_sector,
       "nom_acti"=>$request->nom_acti,
       "descrip"=>$request->descrip,
       "superficie"=>$request->superficie,
       "horario"=>$request->horario,
       "a_paterno"=>$request->a_paterno,
       "a_materno"=>$request->a_materno,
       "a_esposo"=>$request->a_esposo,
       "nombres"=>$request->nombres,
       "c_i"=>$request->c_i,
       "nit"=>$request->nit,
       "pmc"=>$request->pmc,
       "zona_dom"=>$request->zona_dom,
       "calle_dom"=>$request->calle_dom,
       "n_dom"=>$request->n_dom,
       "fono_dom"=>$request->fono_dom,
       "fono_of"=>$request->fono_of,
       "casilla"=>$request->casilla,
       "fax"=>$request->fax,
       "extrangero"=>$request->extrangero,
       "cert_ext"=>$request->cert_ext,
       "n_dni"=>$request->n_dni,
       "act_zona"=>$request->act_zona,
       "act_barrio"=>$request->act_barrio,
       "act_c_av"=>$request->act_c_av,
       "act_e_ca"=>$request->act_e_ca,
       "act_piso"=>$request->act_piso,
       "act_fono"=>$request->act_fono,
       "n_medidor_a"=>$request->n_medidor_a,
       "n_medidor_e"=>$request->n_medidor_e,
       "fachada"=>$request->fachada,
       "acera"=>$request->acera,
       "luz"=>$request->luz,
       "letreros"=>$request->letreros,
       "obs"=>$request->obs,
       "establec"=>$request->establec,
       "t_requi"=>$request->t_requi,
       "req_1"=>$request->req_1,
       "req_2"=>$request->req_2,
       "req_3"=>$request->req_3,
       "req_4"=>$request->req_4,
       "req_5"=>$request->req_5,
       "req_6"=>$request->req_6,
       "req_7"=>$request->req_7,
       "req_8"=>$request->req_8,
       "req_9"=>$request->req_9,
       "f_22"=>$request->f_22,
       "comp"=>$request->comp,
       "zona_trib"=>$request->zona_trib,
       "fecha_iniac"=>$request->fecha_iniac,
       "in_ge_trib"=>$request->in_ge_trib,
       "n_pmc_for"=>$request->n_pmc_for,
       "n_res_tec"=>$request->n_res_tec,
        );
//        return $request;
        DB::connection('vutrat')->table('v_naturales')->where('CodAut',$request->CodAut)->update($vnat);
        return redirect('/vnatural');

    }
    public function modvtramite(Request $request){
        $vnat=array(
            "na_ju"=>$request->na_ju,
            "tipo_tram"=>$request->tipo_tram,
            "fecha_ini"=>$request->fecha_ini,
            "operador"=>$request->operador,
            "estado"=>$request->estado,
            "clave"=>$request->clave,
            "fecha_fin"=>$request->fecha_fin,
            "unid_dest"=>$request->unid_dest,
            "tramitador"=>$request->tramitador,
        );
//        return $request;
        DB::connection('vutrat')->table('v_tramites')->where('CodAut',$request->CodAut)->update($vnat);
        return redirect('/vnatural');
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
