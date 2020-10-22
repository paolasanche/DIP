<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\salones;
use App\Request\salones as salonRequests;


class salonescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salones= salones::all();
        return response()->json(['salones' => $salones]); 
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


    
public function _construct(salones $salon){
    $this->salon = $salon;
    
    }


    public function store(Request $request)
    {
        $salon = $this->create($Request->all());
        return $salon;
        return response()->json (new salonRequests ($salon),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $salones = salones::find($id);
        return $salones;

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
    public function destroy(salones $salon)
    {
        $salon -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }
}