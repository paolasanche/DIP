<?php

namespace App\Http\Controllers;
use App\servicios;
use Illuminate\Http\Request;
use App\Request\servicios as servicioRequests;

class servicioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = servicios::all();
        return response()->json(['servicios' => $servicios ]); 
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



    public function _construct(servicios $servicio){
        $this->servicio = $servicio;
        
        }




        public function store(Request $request)
    {
        $servicio = $this->create($Request->all());
        return $servicio;
        return response()->json (new servicioRequests ($servicio),201);
   }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $servicios = servicios::find($id);
        return $servicios; 

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
    public function destroy(servicios $servicio)
    {
        $servicio -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    
}
}
