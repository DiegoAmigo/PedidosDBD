<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Historial_usuario;

use App\Usuario;

class Historial_usuarioController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Historial_usuario::all();
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
    //
      public function store(Request $request)
    {
    	$historial_usuario = new Historial_usuario;
        $historial_usuario->accion = $request->accion;
        $historial_usuario->fecha = $request->fecha;
        $historial_usuario->hora = $request->hora;


        $usuario = Usuario::find($request->get('id_usuario'));
        if($usuario!=null){
            $historial_usuario->id_usuario = $request->id_usuario;
            $historial_usuario->save();
            return $historial_usuario;
        }
        else{
            //respuesta temporal
            return "No se pudo guardar el historial, debido a que no se encontró el usuario";
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    	$historial_usuario = Historial_usuario::find($id);
        if($historial_usuario != null){
            return $historial_usuario;
        }
        else{
            return "Historial de usuario no encontrada";
        }

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
    public function destroy($id)
    {
        //
    }

    public function historial_usuarioDeUsuario($id){
    	$usuario = Usuario::find($id);
        if($usuario!= null){
            $historial_usuario = Valoracion::all()->where('id_usuario', '=', $usuario->id);
            return $historial_usuario;
        }
        else{
            return "usuario no existente";
        }


    }







}
