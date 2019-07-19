<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pedido;
use App\Menu_Pedido;
use App\Menu;
use Auth;
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedido::all();
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
        $pedido = new Pedido;
        $pedido->id_usuario = $request->id_usuario;
        $pedido->fecha = $request->fecha;
        $pedido->total_precio = $request->total_precio;
        $pedido->notas_adicionales = $request->notas_adicionales;
        $pedido->despacho = $request->despacho;
        $pedido->save();        
        return $pedido;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pedido::find($id);
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

    

    public function pedidosMenu(){
        $pedidos = Menu_Pedido::all();
        return $pedidos;
    }

    public function pedidosUsuario($id_usuario){
        $pedidos = Pedido::all()->where('id_usuario', '=', Auth::user()->id);
        return view('pedidos',['pedidos' => $pedidos]);
    }

    public function pedidosUsuario2(Request $request){
        $pedidos = Pedido::all()->where('id_usuario', '=', Auth::user()->id);
        return view('pedidos',['pedidos' => $pedidos]);
    }


    public function menuDelPedido(Request $request){
        $pedidos = Menu_Pedido::where('id_pedido', $request->id_pedido)->get();
        $menu = [];
        foreach ($pedidos as $pedido) {
            $menu[] = Menu::find($pedido->id_menu);
        }
        return view('pedido',['menus' => $menu]);
    }

}
