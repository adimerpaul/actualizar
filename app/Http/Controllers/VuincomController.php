<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class VuincomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vuincom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        DB::connection('vutrat')->table('v_naturales')->where('CodAut',$request->CodAut)
            ->update([
                'n_tramite'=>$request->n_tramite,
                'f_19'=>$request->f_19,
                'cod_acti'=>$request->cod_acti,
                'cod_sector'=>$request->cod_sector,
                'nom_acti'=>$request->nom_acti,
                'descrip'=>$request->descrip,
                'superficie'=>$request->superficie,
                'horario'=>$request->horario,
                'a_paterno'=>$request->a_paterno,
                'a_materno'=>$request->a_materno,
                'a_esposo'=>$request->a_esposo,
                'nombres'=>$request->nombres,
                'c_i'=>$request->c_i,
                'nit'=>$request->nit,
                'pmc'=>$request->pmc,
                'zona_dom'=>$request->zona_dom,
                'n_dom'=>$request->n_dom,
                'fono_dom'=>$request->fono_dom,
                'fono_of'=>$request->fono_of,
                'casilla'=>$request->casilla,
                'fax'=>$request->fax,
                'extrangero'=>$request->extrangero,
                'cert_ext'=>$request->cert_ext,
                'n_dni'=>$request->n_dni,
                'act_zona'=>$request->act_zona,
                'act_barrio'=>$request->act_barrio,
                'act_c_av'=>$request->act_c_av,
                'act_e_ca'=>$request->act_e_ca,
                'act_piso'=>$request->act_piso,
                'act_fono'=>$request->act_fono,
                'n_medidor_a'=>$request->n_medidor_a,
                'n_medidor_e'=>$request->n_medidor_e,
                'fachada'=>$request->fachada,
                'acera'=>$request->acera,
                'luz'=>$request->luz,
                'letreros'=>$request->letreros,
                'obs'=>$request->obs,
                'establec'=>$request->establec,
                't_requi'=>$request->t_requi,
                'req_1'=>$request->req_1,
                'req_2'=>$request->req_2,
                'req_3'=>$request->req_3,
                'req_4'=>$request->req_4,
                'req_5'=>$request->req_5,
                'req_6'=>$request->req_6,
                'req_7'=>$request->req_7,
                'req_8'=>$request->req_8,
                'req_9'=>$request->req_9,
                'f_22'=>$request->f_22,
                'comp'=>$request->comp,
                'zona_trib'=>$request->zona_trib,
                'fecha_iniac'=>$request->fecha_iniac,
                'in_ge_trib'=>$request->in_ge_trib,
                'n_pmc_for'=>$request->n_pmc_for,
                'n_res_tec'=>$request->n_res_tec,
            ]);
        return 1;
//        return DB::connection('vutrat')->table('v_naturales')->where('pmc','like','%'.$request->pmc.'%')->firstOrFail();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data= array();
        array_push($data,DB::connection('vutrat')->table('v_naturales')->where('pmc',$request->pmc)->first());
        array_push($data,DB::connection('indcom')->table('natur')->where('npadron',$request->pmc)->first());
//        $data['incom']=DB::connection('vutrat')->table('v_naturales')->where('pmc','like','%'.$request->pmc.'%')->first();
        return $data;
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
        $count=DB::connection('indcom')->table('natur')->where('npadron',$request->npadron)->count();
        if ($count>0){
            return 2;
        }
        if ($request->fed==''){
            $request->fed='F';
        }
        if ($request->asociado==''){
            $request->asociado='F';
        }
        if ($request->bloqueo==''){
            $request->bloqueo='F';
        }
        if ($request->l07==''){
            $request->l07='F';
        }
        if ($request->l259==''){
            $request->l259='F';
        }
        if ($request->l080==''){
            $request->l080='F';
        }
        if ($request->hab==''){
            $request->hab=0;
        }
//        return $request->asociado;
        DB::connection('indcom')->table('natur')->insert([
            'npadron'=>$request->npadron,
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
        ]);
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        DB::connection('indcom')->table('natur')->where('CodAut',$request->CodAut)->update([
            'npadron'=>$request->npadron,
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
        ]);
        return 1;
    }
}
