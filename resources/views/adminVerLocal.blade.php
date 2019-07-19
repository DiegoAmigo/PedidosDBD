@extends('barraSuperior')
<?php
    use App\Menu;
    $menus = Menu::all();
?>

@section('seccion')

<section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-4">
            <div class="col-md-6 pr-md-5 flex-column">
              <div class="row d-block flex-row">
              <h2 class="h4 mb-4">{{$local->nombre_local}}</h2>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Valor Entrega:</span> {{$local->valor_entrega}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Tiempo Despacho:</span> {{$local->tiempo_despacho}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Tiempo Retiro:</span> {{$local->tiempo_retiro}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Cadena:</span> {{$local->cadena}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Dirección:</span> {{$local->direccion_local}}</p>
                        </div>
                    </div>
              </div>
            </div>
            <div class="col-md-6">
                <h2 class="h4 mb-4"> Modificar Información
                <form method="POST" action="{{route('locales.update', $local)}}">
                    @method('PUT')
                    @csrf
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
                            <input type="submit" value="Actualizar Información" class="btn btn-primary py-3 px-5">
                        </div>
              </form>
            </div>
          </div>
      </section>



<form method="POST" action="{{route ('menus.store')}}">
        @method('POST')
        @csrf
<section class="ftco-section contact-section">
        <div class="container">
            <h2> Crear Menú </h2>
          <div class="row block-9 mb-6 ml-4">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="nombre">
                </div>

                <div class="form-group">
                  <input type="text" name="precio" class="form-control" placeholder="precio">
                </div>
                <div class="form-group">
                  <input type="text" name="descuento" class="form-control" placeholder="descuento">
                </div>
                <div class="form-group">
                  <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
                </div>
                <div class="form-group">
                  <input type="text" name="id_local" class="form-control" placeholder="ingresar id local:{{$local->id}}">
                </div>
                <div class="form-group">
                  <input type="submit" value="Crear Menu" class="btn btn-primary py-3 px-5">
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
          <h2>Menus</h2>
        </div>
      </div>
      <div class="row no-gutters">
          @foreach ($menus as $menu)
                @if ($menu->id_local == $local->id)
                <div class="col-md-6 col-lg-3 ftco-animate">
                <a href="{{route('menus.verMenuAdmin', $menu)}}" class="block-5" style="background-image: url('images/tour-1.jpg');">
                      <div class="text">
                        <span class="price">Precio: {{$menu->precio}}</span>
                        <h3 class="heading">{{$menu->nombre}}</h3>
                        <div class="post-meta">
                        </div>
                        <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                      </div>
                    </a>
                  </div>
                @endif
          @endforeach
      </div>
    </div>
  </section>

@endsection
