<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Local;
use App\Producto;
use App\Menu_Producto;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Menu::all();
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
        $menu = new Menu;
        $menu->nombre = $request->nombre;
        $menu->precio = $request->precio;
        $menu->descuento = $request->descuento;
        $menu->descripcion = $request->descripcion;
        $local = Local::find($request->get('id_local'));
        if($local!=null){
            $menu->id_local = $request->id_local;
            $menu->save();
            return $menu;
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
        $menu = Menu::find($id);
        if($menu != NULL){
            return $menu;
        }
        else{
            return "El menú con el id ingresado no existe en nuestro sistema";
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
        $menu = Menu::find($id);
        $menu->nombre = $request->nombre;
        $menu->precio = $request->precio;
        $menu->descuento = $request->descuento;
        $menu->descripcion = $request->descripcion;
        $menu->id_local = $request->id_local;
        $menu->save();
        return $menu;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if($menu != NULL){
            $menu->delete();
            Menu::destroy($id);
            return "menu eliminado del sistema";
        }
        else{
            return "El menu con la id ingresada no existe en nuestro sistema";
        }
    }


    public function productos($id)
    {
        $menu_productos = Menu_Producto::where('id_menu', $id)->get();
        $productos = [];
        foreach ($menu_productos as $producto) {
            $producto_actual = Producto::where('id', $Producto->id_producto)->get();
            array_push($productos, $producto_actual);

        }
        return $productos;
    }


    public function menuEnLocal(Request $request)
    {
        $menu = Menu::where('id_local', $request->id_local)->get();
        
        return view('menus',['menus' => $menu]);
    }


}
