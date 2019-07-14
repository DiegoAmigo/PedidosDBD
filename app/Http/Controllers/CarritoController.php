<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Local;
use Cart;
class CarritoController extends Controller
{
    /**
     * 
     *
     * e
     */
    public function agregarCarrito(Request $request)
    {
        Cart::add($request->id, $request->nombre,$request->cantidad, $request->valor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actualizarCarrito(Request $request)
    {
        Cart::update($request->id, $request->cantidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function quitarCarrito(Request $request)
    {
        Cart::remove($request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function obtenerCarrito(Request $request)
    {
        Cart::get($request->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destruirCarrito(Request $request)
    {
        Cart::destroy();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function totalCarrito(Request $request)
    {
        Cart::total();
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function obtenerTodoCarrito()
    {
        return Cart::content();
    }



}
