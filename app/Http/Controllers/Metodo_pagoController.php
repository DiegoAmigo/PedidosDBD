<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Metodo_pago;

class Metodo_pagoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Metodo_pago::all();
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
    //
    public function store(Request $request)
    {
        $metodo_pago = new Metodo_pago;
        $metodo_pago->id_usuario = $request->id_usuario;
        $metodo_pago->pago_entrega = $request->pago_entrega;
        $metodo_pago->pago_tarjeta = $request->pago_tarjeta;
        $metodo_pago->numero_tarjeta = $request->numero_tarjeta;
        $metodo_pago->fecha_vencimiento = $request->fecha_vencimiento;
        $metodo_pago->digitos_verificadores = $request->digitos_verificadores;
        $metodo_pago->save();
        return $metodo_pago;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Metodo_pago::find($id);
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
