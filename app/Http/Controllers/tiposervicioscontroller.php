<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiposervicios;
use App\Request\tiposervicios as tiposervicioRequests;
class tiposervicioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposervicios = tiposervicios::all();
        return response()->json(['tiposervicios' => $tiposervicios ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */






    public function _construct(tiposervicios $tiposervicio){
        $this->tiposervicio = $tiposervicio;
        
        }





     
    public function store(Request $request)
    {
        $tiposervicio = $this->create($Request->all());
        return $tiposervicio;
        return response()->json (new tiposervicioRequests ($tiposervicio),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposervicios = tiposervicios::find($id);
        return $tiposervicios; 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(tiposervicioRequest $request, tiposervicio $tiposervicio)
    {
        return $request;
       $tiposervicio->update($request->all());
       return response()->json($tiposervicio);
    } 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiposervicios $tiposervicio)
    {
        $tiposervicio -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }
}
