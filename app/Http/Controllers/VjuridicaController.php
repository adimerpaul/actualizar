<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VjuridicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vjuridica');

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
    public function show(Request $request)
    {
        //        
        $query=DB::connection('vutrat')->table('v_juridicas')->where('n_tramite',$request->tramite)
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
    public function update(Request $request, $id)
    {
        //
    }

    public function modvjuridica(Request $request)
    {
        //
        $vjurd=array(
            'a_esposo_rl'=>$request->a_esposo_rl,
            'a_paterno_rl'=>$request->a_paterno_rl,
            'a_materno_rl'=>$request->a_materno_rl,
            'nombres_rl'=>$request->nombres_rl,
            'razon_social'=>$request->razon_social,
            'c_i_rl'=>$request->c_i_rl,
            'nit_rl'=>$request->nit_rl,
            'nit'=>$request->nit,
            'zona_dom'=>$request->zona_dom,
            'calle_dom'=>$request->calle_dom,
            'n_dom'=>$request->n_dom,
            'nit'=>$request->nit,
            'cod_acti'=>$request->cod_acti,
            'descrip'=>$request->descrip,
            'superfice'=>$request->superfice,
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
            'n_medidor_a'=>$request->n_medidor_a,
            'n_medidor_e'=>$request->n_medidor_e,
            'zona_trib'=>$request->zona_trib,
            'fecha_iniac'=>$request->fecha_iniac,
            'in_ge_trib'=>$request->in_ge_trib,
            'n_pmc_for'=>$request->n_pmc_for,
            'n_res_tec'=>$request->n_res_tec);    

        DB::connection('vutrat')->table('v_juridicas')->where('CodAut',$request->codaut)->update($vjurd);
        return redirect('/vjuridica');

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
