<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Local;
use App\Menu;
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
        Cart::add($request->id, $request->nombre,$request->cantidad, $request->valor)->associate('App\Menu');
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
        
        
        return header('Location: obtenerTodo');
    }



    public function quitarCarritoG($id)
    {
        Cart::remove($id);
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

    public function obtenerCarritoG($id)
    {
        return Cart::search(function($cartItem, $rowId) use($id) {
            return $cartItem->rowId === $id;
            });
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

    public function destruirCarritoG()
    {
        return Cart::destroy();
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
        $carritoActual = Cart::content();
        $total = Cart::total();
        $locales = [];
        $localess = [];
        $envioTotal = 0;
        foreach ($carritoActual as $menuActual) {
            if(in_array($menuActual->model->id_local,$locales))
            {

            }
            else
            {
                $locales[] = $menuActual->model->id_local;
            }
        }

        foreach ($locales as $local) {
            $localess[] = Local::find($local);
        }

        foreach ($localess as $local) {
            $envioTotal = $envioTotal + $local->valor_entrega;
        }

        return view('carrito',['menus' => $carritoActual , 'total' => $total, 'envioTotal' => $envioTotal ]);
    }



}
