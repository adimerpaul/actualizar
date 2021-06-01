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
        array_push($data,DB::connection('vutrat')->table('v_naturales')->where('pmc','like','%'.$request->pmc.'%')->first());
        array_push($data,DB::connection('indcom')->table('natur')->where('npadron','like','%'.$request->pmc.'%')->first());
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
        //
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
