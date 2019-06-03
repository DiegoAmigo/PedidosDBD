<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;
use App\Mesa;
use App\Mesa_Usuario;

class Mesas_UsuarioController extends Controller
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
        $mesas = Mesa_usuario::all()->where('id_mesa', '=', $request->id_mesa);
        $reservable= true;
        if($mesas != null ){
            foreach ($mesas as $mesa) {
                if($mesa->dia == $request->dia){
                    $horamas = strtotime("+1 hour", strtotime($mesa->hora));
                    $horamenos = strtotime("-1 hour", strtotime($mesa->hora));
                    if(strtotime($mesa->hora) == strtotime($request->hora)){
                        $reservable = false;
                        break;
                    }
                    elseif ((strtotime($request->hora) < $horamas) && (strtotime($request->hora) >= strtotime($mesa->hora))) {
                        $reservable = false;
                        break;
                    }
                    elseif((strtotime($request->hora) > $horamenos) && (strtotime($request->hora) <= strtotime($mesa->hora))){
                        $reservable = false;
                        break;
                    }
                }
            }
            if($reservable == true){
                $mesaReser = new Mesa_Usuario;
                $mesaReser->id_usuario = $request->id_usuario;
                $mesaReser->id_mesa = $request->id_mesa;
                $mesaReser->dia = $request->dia;
                $mesaReser->hora = $request->hora;
                $mesaReser->save();
                return $mesaReser;
            }
            else{
                return "no se puede reservar";
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_usuario)
    {
        $mesa = Mesa_Usuario::all()->where('id_usuario', '=', $id_usuario);
        return $mesa;
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
}
