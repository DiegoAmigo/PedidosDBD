<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;
use App\Historial_usuario;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localess = Local::all();
        return view('verLocales', compact('localess'));
    }


    //vista para el admin
    public function index3()
    {
        $locales = Local::all();
        return view('aprobarLocales', compact('locales'));
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
        $local->id_ubicacion = $request->id_ubicacion;
        $local->valor_entrega = $request->valor_entrega;
        $local->direccion_local = $request->direccion_local;
        $local->tiempo_despacho = $request->tiempo_despacho;
        $local->tiempo_retiro = $request->tiempo_retiro;
        $local->aprobado = false;
        $local->cadena = $request->cadena;
        $local->nombre_local = $request->nombre_local;
        $local->save();
        return back();
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
            return view('infoLocal', compact('local'));
        }
        else{
            return "El local con el id ingresado no existe en nuestro sistema";
        }
    }

    public function showValidar($id)
    {
        $local = Local::find($id);
        if($local != NULL){
            return view('aprobarElLocal', compact('local'));
        }
        else{
            return "El local con el id ingresado no existe en nuestro sistema";
        }
    }

    public function showAdminLocal($id)
    {
        $local = Local::find($id);
        if($local != NULL){
            return view('adminVerLocal', compact('local'));
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
        if($local->aprobado == false){
            $local->aprobado = false;
        }
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
            $historial = New Historial_usuario;
            $historial->accion = "Se ha eliminado el local con id".$local->id;
            $historial->fecha = date('Y-m-d');
            $historial->hora = date('H:m:s');
            $historial->save();
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
        $historial = New Historial_usuario;
        $historial->accion = "Se ha aprobado el local con id".$local->id;
        $historial->fecha = date('Y-m-d');
        $historial->hora = date('H:m:s');
        $historial->save();
        return "local aprobado";
    }
}
