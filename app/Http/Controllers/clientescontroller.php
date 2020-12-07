<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\Request\clientes as clienteRequests;

class clientescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::all();
        return response()->json(['clientes' => $clientes ]); 
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


    public function _construct(clientes $cliente){
        $this->cliente = $cliente;
        
        }



    public function store(Request $request)
    {
        $cliente = $this->create($Request->all());
        return $cliente;
        return response()->json (new clienteRequests ($cliente),201);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = clientes::find($id);
        return $clientes; 
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



    public function update(clienteRequest $request, cliente $cliente)
    {
        return $request;
       $cliente->update($request->all());
       return response()->json($cliente);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $cliente)
    {
        $cliente -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }

    public function clientes()
    {
        return view('layouts.clientes');
    }
    


    
public function indexclientes()
{   
    $consulta = \DB::select("SELECT clientes.id,clientes.nombre,clientes.apellido,clientes.correo,clientes.telefono,clientes.user,clientes.password, 
    clientes.nombre  FROM clientes AS clientes");
    
    return view ('layouts.indexclientes')->with('consulta',$consulta);
}




}