<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Valoracion;

use App\Local;

class ValoracionController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Valoracion::all();
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
      public function store(Request $request)
    {
        $valoracion = new Valoracion;
        $valoracion->estrellas = $request->estrellas;
        $valoracion->comentario = $request->comentario;
        $local = Local::find($request->get('id_local'));
        if($local!=null){
            $valoracion->id_local = $request->id_local;
            $valoracion->save();
        return $valoracion;
        }
        else{
            //respuesta temporal
            return "El local con el id ingresado no existe en nuestro sistema";
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

    	$valoracion = Valoracion::find($id);
        if($valoracion != null){
            return $valoracion;
        }
        else{
            return "Valoracion no encontrada";
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
        $valoracion = Valoracion::find($id);
        $valoracion->estrellas = $request->estrellas;
        $valoracion->comentario = $request->comentario;

        $valoracion->save();
        return $valoracion;
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
        $valoracion = Valoracion::find($id);
        if($valoracion != NULL){
            $valoracion->delete();
            Valoracion::destroy($id);
            return "valoracion eliminada del sistema";
        }
        else{
            return "La valoracion con la id ingresada no existe en nuestro sistema";
        }
        //
    }

    public function valoracionDeLocal($id){
    	$local = Local::find($id);
        if($local!= null){
            $valoracion = Valoracion::all()->where('id_local', '=', $local->id);
            return $valoracion;
        }
        else{
            return "local no existente";
        }

    }

}
