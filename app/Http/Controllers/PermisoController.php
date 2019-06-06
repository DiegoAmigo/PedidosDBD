<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Permiso::all();
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
        $permiso = new Permiso;
        $permiso->gestionar_local = $request->gestionar_local;
        $permiso->gestionar_locales = $request->gestionar_locales;
        $permiso->gestionar_plataforma = $request->gestionar_plataforma;
        $permiso->gestionar_menus = $request->gestionar_menus;
        $permiso->save();
        return $permiso;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Permiso::find($id);
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
        $permiso = Permiso::find($id);
        $permiso->gestionar_local = $request->gestionar_local;
        $permiso->gestionar_locales = $request->gestionar_locales;
        $permiso->gestionar_plataforma = $request->gestionar_plataforma;
        $permiso->gestionar_menus = $request->gestionar_menus;
        $permiso->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permiso::find($id);
        if($permiso != null){
            $permiso->delete();
            Permiso::destroy($id);
            return "Permiso eliminado";
        }
        else{
            return "No se puede eliminar el permiso, porque no existe";
        }
    }
}
