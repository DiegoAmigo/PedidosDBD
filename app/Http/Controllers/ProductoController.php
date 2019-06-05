<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Producto_Ingrediente;
use App\Ingrediente;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Producto::all();
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
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->precio;
        $producto->save();
        return $producto;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        if($producto != NULL){
            return $producto;
        }
        else{
            return "El producto con el id ingresado no existe en nuestro sistema";
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
        $producto = Menu::find($id);
        $producto->nombre = $request->nombre;
        $producto->cantidad = $request->precio;
        $producto->save();
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if($producto != NULL){
            $producto->delete();
            Producto::destroy($id);
            return "producto eliminado del sistema";
        }
        else{
            return "El producto con la id ingresada no existe en nuestro sistema";
        }
    }


    public function ingredientes($id)
    {
        $producto_ingredientes = Producto_Ingrediente::where('id_producto', $id)->get();
        $ingredientes = [];
        foreach ($producto_ingredientes as $ingrediente) {
            $ingrediente_actual = Ingrediente::where('id', $ingrediente->id_ingrediente)->get();
            array_push($ingredientes, $ingrediente_actual);

        }
        return $ingredientes;
    }


}
