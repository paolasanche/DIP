<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\Request\usuarios as usuarioRequests;

class usuarioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuarios::all();
        return response()->json(['usuarios' => $usuarios ]); 
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




    public function _construct(usuarios $usuario){
        $this->usuario = $usuario;
        
        }







    public function store(Request $request)
    {
        $usuario = $this->create($Request->all());
        return $usuario;
        return response()->json (new usuarioRequests ($usuario),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = usuarios::find($id);
        return $usuarios; 
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
    public function update(usuarioRequest $request, usuario $usuario)
    {
        return $request;
       $usuario->update($request->all());
       return response()->json($usuario);
    } 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        $usuarios -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }


    public function usuarios()
    {
        return view('layouts.usuarios');
    }


    public function indexusuarios()
    {


        $consulta = \DB::select("SELECT usuarios.id,usuarios.nombre,usuarios.apellido,usuarios.correo,usuarios.telefono,usuarios.user,usuarios.password 
        FROM usuarios AS usuarios ");
       
        return view ('layouts.indexusuarios')->with('consulta',$consulta);
    }







}
