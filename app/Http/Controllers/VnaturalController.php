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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modvnatur(Request $request)
    {
        //
        $vnat=array(
        'a_esposo'=>$request->a_esposo,
        'a_paterno'=>$request->a_paterno,
        'a_materno'=>$request->a_materno,
        'nombres'=>$request->nombres,
        'cod_acti'=>$request->cod_acti,
        'nom_acti'=>$request->nom_acti,
        'descrip'=>$request->descrip,
        'superficie'=>$request->superficie,
        'horario'=>$request->horario,
        'cod_sector'=>$request->cod_sector, 
        'fono_dom'=>$request->fono_dom,
        'fono_of'=>$request->fono_of,
        'act_zona'=>$request->act_zona,
        'act_barrio'=>$request->act_barrio,
        'act_c_av'=>$request->act_c_av,
        'act_e_ca'=>$request->act_e_ca,
        'act_fono'=>$request->act_fono,
        'comp'=>$request->comp,
        'n_pmc_for'=>$request->n_pmc_for,
        'n_res_tec'=>$request->n_res_tec,
        'c_i'=>$request->c_i,
        'nit'=>$request->nit,
        'zona_dom'=>$request->zona_dom,
        'calle_dom'=>$request->calle_dom,
        'n_dom'=>$request->n_dom,
        'n_medidor_a'=>$request->n_medidor_a,
        'n_medidor_e'=>$request->n_medidor_e,
        'zona_trib'=>$request->zona_trib,
        'fecha_iniac'=>$request->fecha_iniac,
        'in_ge_trib'=>$request->in_ge_trib);

        DB::connection('vutrat')->table('v_naturales')->where('CodAut',$request->codaut)->update($vnat);
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
