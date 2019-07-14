<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;
use App\Usuario;
use App\Local;
class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ubicacion::all();
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
        $ubicacion = new Ubicacion;
        $ubicacion->pais = $request->pais;
        $ubicacion->region = $request->region;
        $ubicacion->ciudad = $request->ciudad;
        $ubicacion->comuna = $request->comuna;
        $ubicacion->save();
        return $ubicacion;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacion = Ubicacion::find($id);
        if($ubicacion != NULL){
            return $ubicacion;
        }
        else{
            return "La ubicacion con el id ingresado no existe en nuestro sistema";
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
        $ubicacion = Ubicacion::find($id);
        $ubicacion->pais = $request->pais;
        $ubicacion->region = $request->region;
        $ubicacion->ciudad = $request->ciudad;
        $ubicacion->comuna = $request->comuna;
        $ubicacion->save();
        return $ubicacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ubicacion = Ubicacion::find($id);
        if($ubicacion != NULL){
            $ubicacion->delete();
            Ubicacion::destroy($id);
            return "ubicacion eliminada del sistema";
        }
        else{
            return "La ubicacion con la id ingresada no existe en nuestro sistema";
        }
    }


    public function usuarios_en_ubicacion($id)
    {
        $usuarios = Usuario::where('id_ubicacion', $id)->get();
        return $usuarios;
    }

    public function locales_en_ubicacion($id)
    {
        $locales = Local::where('id_ubicacion', $id)->get();
        return $locales;
    }


    public static function obtenerUbicaciones()
    {
        return Ubicacion::all();
    }


}
