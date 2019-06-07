<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Mesa_UsuarioController;

use App\Mesa_Usuario;
use App\Mesa;
class Mesas_UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mesa_usuario::all();
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
        $mesa_usuario = new Mesa_Usuario;
        $mesa_usuario->id_mesa = $request->id_mesa;
        $mesa_usuario->id_usuario = $request->id_usuario;
        $mesa_usuario->dia = $request->dia;
        $mesa_usuario->hora = $request->hora;
        $mesa_usuario->save();
        return $mesa_usuario;
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

    public function mostrarMesasDisponibles(Request $request, $id_local){
        $mesas3 = Mesa::all()->where('id_local', "=", $id_local);
        $mesas = Mesa_Usuario::all();
        $mesasDisponibles = array();
        foreach ($mesas3 as $mesa){
            $flagz = 0;
            foreach ($mesas as $mesa2){
                if($mesa->id == $mesa2->id_mesa){
                    if($mesa2->dia == $request->dia){
                        $horamas = strtotime("+1 hour", strtotime($mesa2->hora));
                        $horamenos = strtotime("-1 hour", strtotime($mesa2->hora));
                        if($request->hora >= $horamas){
                            $mesaDisp = Mesa::find($mesa2->id_mesa);
                            array_push($mesasDisponibles, $mesaDisp);
                        }
                        else if($request->hora <= $horamenos){
                            $mesaDisp = Mesa::find($mesa2->id_mesa);
                            array_push($mesasDisponibles, $mesaDisp);
                        }
                    }
                    else if($mesa2->dia != $request->dia){
                        $mesaDisp = Mesa::find($mesa2->id_mesa);
                        array_push($mesasDisponibles, $mesaDisp);
                    }
                }
                else if( $flagz == 0){
                    $flagz = 1;
                    array_push($mesasDisponibles, $mesa);
                }
            }

        }
        return $mesasDisponibles;
    }
}
