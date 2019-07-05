@extends('plantilla')

@section('seccion')

@if (session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9 mb-4">
        <div class="col-md-6">
        <form method="POST" action="{{route (locales.crear)}}">
            @csrf
            <div class="form-group">
              <input type="text" name="valor_entrega" class="form-control" placeholder="Valor de entrega">
            </div>
            <div class="form-group">
              <input type="text" name="direccion_local" class="form-control" placeholder="Direccion Local">
            </div>
            <div class="form-group">
              <input type="text" name="tiempo_despacho" class="form-control" placeholder="Tiempo de despacho">
            </div>
            <div class="form-group">
              <input type="text" name="tiempo_retiro" class="form-control" placeholder="Tiempo de retiro">
            </div>
            <div class="form-group">
                <input type="text" name="cadena" class="form-control" placeholder="Cadena">
            </div>
            <div class="form-group">
                <input type="text" name="nombre_local" class="form-control" placeholder="Nombre del Local">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Crear Local" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
