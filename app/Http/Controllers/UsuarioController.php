<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;
use App\Mesa_Usuario;
use App\Historial_usuario;
use App\Pedido;
use App\Menu_Pedido;
use App\Http\Controllers\Mesas_UsuarioController;
use App\Local;
use App\Valoracion;
use Auth;
use Cart;
use App\Mail\ConfirmacionReserva;
use App\Mail\ConfirmacionPedido;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Pedido_Metodo_pagoController;
use App\Http\Controllers\Metodo_pagoController;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('adminVerUsuarios', compact('usuarios'));
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
        $usuario = new Usuario;
        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->calle = $request->calle;
        $usuario->save();
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('modificarUsuario', compact('usuario'));
    }

    public function showAdmin($id)
    {
        $usuario = Usuario::find($id);
        return view('adminVerHistorialUsuario', compact('usuario'));
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
        $usuario = Usuario::find($id);
        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->calle = $request->calle;
        $usuario->save();
        $historial = New Historial_usuario;
        $historial->id_usuario= $usuario->id;
        $historial->accion = "Ha actualizado datos del usuario con id".$usuario->id;
        $historial->fecha = date('Y-m-d');
        $historial->hora = date('H:m:s');
        $historial->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if($usuario != null){
            $historial = New Historial_usuario;
            $historial->accion = "Se ha eliminado el usuario con id".$usuario->id;
            $historial->fecha = date('Y-m-d');
            $historial->hora = date('H:m:s');
            $historial->save();
            $usuario->delete();
            Usuario::destroy($id);
            return "usuario elimina3";
        }
        else{
            return "no se puede eliminar debido a que no existe el usuario";
        }
    }


    public function reservaMesa(Request $request){
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
                $controlador = new Mesas_UsuarioController;
                Mail::to(Auth::user()->email)->send(new ConfirmacionReserva($request));
                
                return $controlador->store($request);
            }
            else{
                return "no se puede reservar";
            }
        }
    }



    public function realizarPedido(Request $request){

        $controladorPedido = new PedidoController;
        $pedido = $controladorPedido->store($request);
        $cantidadMenu = count($request->menus);
        $pos = 0;
        while ( pos < $cantidadMenu ) {

            $requestPedido = new Request(array('id_pedido' =>$pedido->id,'id_menu' =>($request->menus)[pos]->id,'aclaraciones' =>($request->menus)[pos]->aclaraciones));
             $menuPedido = new Menu_Pedido;
        $menuPedido->id_pedido = $pedido->id;
        $menuPedido->id_menu = ($request->menus)[pos]->id;
        $menuPedido->aclaraciones = ($request->menus)[pos]->aclaraciones;
        $menuPedido->save();
        $pos = $pos + 1;
        }
        
        return "pedido realizado";


    }


    public function realizarPedido2(Request $request){
        $controladorPedido = new PedidoController;
        if (Auth::check()) {
            $pedido = $controladorPedido->store($request);

            foreach(Cart::content() as $menu)
            {
                $pos = 0;
                while ( $pos < $menu->qty )
                {
                    $menuPedido = new Menu_Pedido;
                    $menuPedido->id_pedido = $pedido->id;
                    $menuPedido->id_menu = $menu->id;
                    $menuPedido->aclaraciones = "";
                    $menuPedido->save();
                    $pos = $pos + 1;
                }

            }
            if ($request->pago_entrega == 1) {
                $request->pago_entrega = True;
            }
            else
            {
                $request->pago_entrega = False;
            }
            if ($request->pago_tarjeta == 1) {
                $request->pago_tarjeta = True;
            }
            else
            {
                $request->pago_tarjeta = False;
            }
            $controladorMetodo = new Metodo_pagoController;
            $metodo = $controladorMetodo->store($request);
            $req = new Request(array('id_pedido' =>$pedido->id , 'id_metodo_pago' => $metodo->id ));
            $controladorMetodoPedido = new Pedido_Metodo_pagoController;
            $mpP = $controladorMetodoPedido->store($req);
        }
        
        //Necesito obtener el correo del usuario que hizo el carrito, y necesito obtener los elementos de carrito de
        Mail::to(Auth::user()->email)->send(new ConfirmacionPedido());
        return "pedido realizado";


    }


    public function comentarLocal(Request $request, $id_usuario){
        $usuario = Usuario::find($id_usuario);
        $local = Local::find($request->id_local);
        $comentar = false;
        if($usuario!=null){
            $pedidos = Pedido::all()->where('id_usuario', '=', $id_usuario);
            foreach($pedidos as $pedido){
                    $menus = Menu_Pedido::all()->where('id_pedido', '=', $pedido->id);
                    if($menus !=null){
                        foreach($menus as $menu){
                            if ($menu->id_local == $local->id_local){
                                $comentar = true;
                                break;
                            }
                        }
                    }

                if($comentar == true){
                    break;
                }
            }
        }
        if($comentar == true){
            $valoracion = New Valoracion;
            $valoracion->comentario = $request->comentario;
            $valoracion->estrellas = $request->estrellas;
            $valoracion->id_local = $request->id_local;
            $valoracion->save();
            return $valoracion;
        }
        else{
            return "no puede comentar debido a que no ha hecho ningún pedido";
        }
    }
}
