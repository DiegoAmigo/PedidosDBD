<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mesa;

use App\Local;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //creo la nueva mesa y la linkeo con el id del local que deseo, por lo que primero se busca
        $mesa = new Mesa;
        $mesa->cantidad_puestos = $request->cantidad_puestos;
        $mesa->numero_mesa = $request->numero_mesa;
        $local = Local::find($request->get('id_local'));
        if($local!=null){
            $mesa->id_local = $request->id_local;
            $mesa->save();
            return $mesa;
        }
        else{
            //respuesta temporal
            return "No se ha podido crear una mesa para el local";
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
        $mesa = Mesa::find($id);
        if($mesa != null){
            return $mesa;
        }
        else{
            return "mesa no encontrada";
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

    public function mesaDeLocal($id_local){

        $local = Local::find($id_local);
        if($local!= null){
            $mesa = Mesa::all()->where('id_local', '=', $local->id);
            return $mesa;
        }
        else{
            return "local no existente";
        }
    }
}
