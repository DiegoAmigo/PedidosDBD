<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Local;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Horario::all();
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
        $horario = new Horario;
        $horario->dia = $request->dia;
        $horario->apertura = $request->apertura;
        $horario->cierre = $request->cierre;
        $local = Local::find($request->get('id_local'));
        if($local!=null){
            $horario->id_local = $request->id_local;
            $horario->save();
            return $horario;
        }
        else{
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
        $horario = Horario::find($id);
        if($horario != NULL){
            return $horario;
        }
        else{
            return "El horario con el id ingresado no existe en nuestro sistema";
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
        $horario = Horario::find($id);
        $horario->dia = $request->dia;
        $horario->apertura = $request->apertura;
        $horario->cierre = $request->cierre;
        $horario->id_local = $request->id_local;
        $horario->save();
        return $horario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Menu::find($id);
        if($horario != NULL){
            $horario->delete();
            Horario::destroy($id);
            return "horario eliminado del sistema";
        }
        else{
            return "El horario con la id ingresada no existe en nuestro sistema";
        }
    }
}
