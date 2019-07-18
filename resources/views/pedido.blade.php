
@extends('barraSuperior')
<?php
    use App\Local;
    use App\Menu;
    $locales = Local::all();
?>
@section('seccion')
    <link rel="stylesheet" href="{{ asset('assets/css/otros/style.css')}}">

    <script>
        function obtenerMenus(){
          document.formulario.submit();
         }
         

    </script>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Pedido</h2>
                    </div>
                </div>
            
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Menus</h1>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">nombre</th>
                                                <th class="product-detalle">detalle</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($menus as $menu)
                                            <tr>
                                                
                                                <td class="product-name"><a>{{$menu->nombre}}</a></td>
                                                <td class="product-detalle"><a>{{$menu->descripcion}}</a></td>
                                                <td class="product-subtotal">{{$menu->precio}}</td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
          

          </div>
        </div>
      </div>
    </section>

    
@endsection
