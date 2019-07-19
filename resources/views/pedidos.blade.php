
@extends('barraSuperior')

@section('seccion')
    <link rel="stylesheet" href="{{ asset('assets/css/otros/style.css')}}">

    <script>
        
         

    </script>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Pedidos</h2>
                    </div>
                </div>
            
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Pedidos</h1>
                            
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-detalle">detalle</th>
                                                <th class="product-name">fecha</th>
                                                <th class="product-modo">modalidad</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($pedidos as $pedido)
                                            <tr>
                                                <td class="product-detalle">
                                                    <form method="POST" action="{{ route('pedidos/menu') }}">
                                                        <input id="id_pedido" name="id_pedido" value="{{$pedido->id}}" style="display:none">
                                                        <button type="submit" style="border: 0 ; background-color: #ffff">Más detalle</button>
                                                    </form>
                                                </td>
                                                <td class="product-name"><a>{{$pedido->fecha}}</a></td>
                                                @if($pedido->despacho == 1)
                                                    <td class="product-modo"><a>Despacho</a></td>
                                                @endif
                                                @if($pedido->despacho == 0)
                                                    <td class="product-modo"><a>Retiro local</a></td>
                                                @endif
                                                <td class="product-subtotal">{{$pedido->total_precio}}</td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                
                            
                        </div>
                    </div>
                </div>
            </div>
            
          

          </div>
        </div>
      </div>
    </section>

    
@endsection
