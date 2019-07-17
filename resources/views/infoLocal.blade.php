@extends('barraSuperior')
<?php
    use App\Menu;
    $menus = Menu::all();
?>

@section('seccion')

<section class="ftco-section-2">
    <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            </div>
            <div class="text col-lg-12 ftco-animate flex">
                <div class="text-inner align-self-start">
                    <h3>{{$local->nombre_local}}</h3>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Valor Entrega:</span> {{$local->valor_entrega}}</p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Tiempo Despacho:</span> {{$local->tiempo_despacho}}</p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Tiempo Retiro:</span> {{$local->tiempo_retiro}}</p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Cadena:</span> {{$local->cadena}}</p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Dirección:</span> {{$local->direccion_local}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
                <a href="{{route('menus.show', $menu)}}" class="block-5" style="background-image: url('images/tour-1.jpg');">
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
