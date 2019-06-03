<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;


class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Local::all();
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
        $local = new Local;
        $local->valor_entrega = $request->valor_entrega;
        $local->direccion_local = $request->direccion_local;
        $local->tiempo_despacho = $request->tiempo_despacho;
        $local->tiempo_retiro = $request->tiempo_retiro;
        $local->aprobado = false;
        $local->cadena = $request->cadena;
        $local->nombre_local = $request->nombre_local;
        $local->save();
        return $local;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $local = Local::find($id);
        if($local != NULL){
            return $local;
        }
        else{
            return "El local con el id ingresado no existe en nuestro sistema";
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
        $local = Local::find($id);
        $local->valor_entrega = $request->valor_entrega;
        $local->direccion_local = $request->direccion_local;
        $local->tiempo_despacho = $request->tiempo_despacho;
        $local->tiempo_retiro = $request->tiempo_retiro;
        $local->aprobado = $request->aprobado;
        $local->nombre_local = $request->nombre_local;
        $local->save();
        return $local;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::find($id);
        if($local != NULL){
            $local->delete();
            Local::destroy($id);
            return "Local eliminado del sistema";
        }
        else{
            return "El local con la id ingresada no existe en nuestro sistema";
        }
    }

    //deberia ser funcion solo si es el admin, hay que ver ese temita con la tabla permisos
    public function aprobar($id_Local){
        $local = Local::find($id_Local);
        $local->aprobado = true;
        $local->save();
        return "local aprobado";
    }
}
