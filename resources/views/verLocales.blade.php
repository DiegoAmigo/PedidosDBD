@extends('barraSuperior')
<?php
    use App\Menu_Producto;
    use App\Producto;
?>
@section('seccion')
<!---VER como hacer que se muestra solo para el que adminsitre el local--->
<form method="POST" action="{{route ('locales.store')}}">
        @method('POST')
        @csrf
<section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-6 ml-4">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="id_ubicacion" class="form-control" placeholder="Id ubicacion">
                </div>

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
                  <input type="submit" value="Crear Local" class="btn btn-primary py-3 px-5">
                </div>

            </div>
          </div>
        </div>
      </section>
    </form>

<section class="ftco-section">
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
              <h2> Locales </h2>
            </div>
          </div>
          <div class="row no-gutters">
          @foreach ($localess as $local)
          <div class="col-md-6 col-lg-3 ftco-animate">
          <a href="{{route('locales.ver', $local)}}" class="block-5" style="background-image: url('images/tour-1.jpg');">
                  <div class="text">
                  <span class="price">valor entrega: ${{$local->valor_entrega}}</span>
                    <h3 class="heading">{{$local->nombre_local}}</h3>
                    <div class="post-meta">
                    <span>Dirección : {{$local->direccion_local}}</span>
                    <span>Tiempo despacho: {{$local->tiempo_despacho}}</span>
                    <span>Tiempo retiro: {{$local->tiempo_retiro}}</span>
                    <span>id ubicacion: {{$local->id_ubicacion}}</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
          @endforeach
          </div>
        </div>
</section>

@endsection
