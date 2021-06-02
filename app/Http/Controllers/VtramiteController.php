<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VtramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vtramite');

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

        return DB::connection('vutrat')->table('v_tramites')->where('n_tramite','like',$request->tramite.'%')->get();
    }

    public function bustram($id){
        return DB::connection('vutrat')->table('v_tramites')->where('CodAut',$id)->get();
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

        $tram =array('na_ju'=>$request->na_ju,
                    'tipo_tram'=>$request->tipo_tram,
                    'estado'=>$request->estado,
                    'unid_dest'=>$request->unid_dest,
                    'tramitador'=>$request->tramitador
            );
        return DB::connection('vutrat')->table('v_tramites')->where('CodAut',$id)->update($tram);
         
 
    }

    public function verseguim($ntramite,$aa){
        $tram=$ntramite.'/'.$aa;
        return DB::connection('vutrat')->table('v_seguim')->where('n_tramite',$tram)->orderBy('c_proce','asc')->get();
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
