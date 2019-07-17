@extends('barraSuperior')
<?php
    use App\Menu_Producto;
    use App\Producto;
    use App\Local;
    $productos = Producto::all();
?>
@section('seccion')

<section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-4">
            <div class="col-md-6 pr-md-5 flex-column">
              <div class="row d-block flex-row">
              <h2 class="h4 mb-4">{{$menu->nombre}}</h2>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Nombre:</span> {{$menu->nombre}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Descripcion:</span> {{$menu->descripcion}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                    <div class="align-self-center">
                        <p class="mb-0"><span>Precio:</span> {{$menu->precio}}</p>
                    </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                    <div class="align-self-center">
                        <p class="mb-0"><span>Descuento:</span> {{$menu->descuento}}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <h2 class="h4 mb-4"> Modificar Información </h2>
                <form method="POST" action="{{route('menus.update', $menu)}}">
                    @method('PUT')
                    @csrf
                    @php
                        $local = Local::find($menu->id_local);
                    @endphp
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
                            <input type="submit" value="Actualizar Información" class="btn btn-primary py-3 px-5">
                        </div>
              </form>
            </div>
          </div>
      </section>

<section class="ftco-section">
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
              <h2> Productos a Agregar </h2>
            </div>
          </div>
          <div class="row no-gutters">
          @foreach ($productos as $producto)
          <div class="col-md-6 col-lg-3 ftco-animate">
          <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">

            <div class="text">
                    <h3 class="heading">{{$producto->nombre}}</h3>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
                <form method="POST" action="{{route('menus.agregarProducto', ['id_menu'=>$menu, 'id_producto'=>$producto])}}">
                        <input type="submit" class="search-submit btn btn-primary" value="Agregar Producto">
                    </form>
              </div>

          @endforeach

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
