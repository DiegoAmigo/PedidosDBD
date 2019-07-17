@extends('barraSuperior')
<?php
    use App\Menu_Producto;
    use App\Producto;
?>
@section('seccion')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="section-2-blocks-wrapper row no-gutters">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            </div>
            <div class="text col-lg-12 ftco-animate flex">
                <div class="text-inner align-self-start">
                    <h3>{{$menu->nombre}}</h3>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Precio:</span> {{$menu->precio}}</p>
                        </div>
                    </div>
                    <div class="col mb-3 d-flex" style="background: white;">
                        <div class="align-self-center">
                            <p class="mb-0"><span>Descripcion:</span> {{$menu->descripcion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container-fluid">
      <div class="row mb-5 pb-5 no-gutters">
        <div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
          <div>
            <h2 class="mb-5 pb-3">Productos del Menu</h2>
          </div>
        </div>
        <div class="col-lg-8 p-2 pl-md-5 heading-section">
          <div class="row no-gutters d-flex">
              @php
                  $menu_productos= Menu_Producto::where('id_menu', $menu->id)->get();
                  $productos= [];
                  foreach ($menu_productos as $producto2) {
                    $producto_actual = Producto::where('id', $producto2->id_producto)->get();
                    array_push($productos, $producto_actual);
                  }
              @endphp
              @if ($productos != null)

              @foreach ($productos as $producto)
                @foreach ($producto as $item)
                <div class="col-md-4 ftco-animate">
                <a href="{{route('productos.show', $item)}}" class="block-5" style="background-image: url('images/hotel-1.jpg');">
                          <div class="text">
                          <h3 class="heading">{{$item->nombre}}</h3>
                            <div class="post-meta">
                            <span>cantidad: {{$item->cantidad}}</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                          </div>
                        </a>
                      </div>
                @endforeach
              @endforeach

              @endif
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
