
@extends('barraSuperior')

@section('seccion')

        
        
        

        <link rel="stylesheet" href="{{ asset('assets/css/otros/style.css')}}">

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      

        $(document).ready(function(){
        $("#agrgarBtn").click(function(){
          var id_producto = document.getElementById("id").value;
            var nom = document.getElementById("nombre").value;
            var cant = document.getElementById("cantidad").value;
            var val = document.getElementById("valor").value;
            $.post("{{ asset('carrito/agregar')}}", {id: "1" , nombre: "nom" , cantidad: "1", valor: "1.0"}, function(status){
             alert("Status: " + status);
                  });
            });
        });


        

         function agregarAlCarrito(){
            var id_producto = document.getElementById("id").value;
            var nom = document.getElementById("nombre").value;
            var cant = document.getElementById("cantidad").value;
            var val = document.getElementById("valor").value;
            $.ajax({
            url: "carrito/agregar",
            type: "post",
            data: {id: id_producto , nombre: nom , cantidad: cant, valor: val}
            });
          }



    </script>


    

      <input id="id" name="id" value="1" style="display:none">
      <input id="nombre" name="nombre" value="producto_super" style="display:none">
      <input id="cantidad" name="cantidad" value="10" style="display:none">
      <input id="valor" name="valor" value="10000" style="display:none">
      <button id="agrgarBtn"  style="background-color: white ; color: black " class="btn btn-primary " >agregar</button>
    
      


      <button id="obtenerDatos" style="background-color: white ; color: black " class="btn btn-primary " >obtener datos</button>
      <div id="escribir">
        </div>
      <a></a>
    
    

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Carro de compras</h2>
                    </div>
                </div>
            
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">remove</th>
                                                <th class="product-price">Imagen</th>
                                                <th class="product-name">Producto</th>
                                                <th class="product-price">Precio</th>
                                                <th class="product-quantity">Cantidad</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($menus as $menu)
                                            <tr>
                                                <td class="product-remove"><form method="POST"  action="{{ route('carrito/quitar') }}">
                                                  <input id="id" name="id" value="{{$menu->rowId}}" style="display:none">
                                                <button style="border: 0 ; background-color: #ffff"><i class="icon-remove_shopping_cart"></button></i></form></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                                </td>
                                                <td class="product-name"><a >{{$menu->model->nombre}}</a></td>
                                                <td class="product-price"><span class="amount">{{$menu->model->precio}}</span></td>
                                                <td class="product-quantity">
                                                    <input value="{{$menu->qty}}" type="number">
                                                </td>
                                                <td class="product-subtotal">{{$menu->total}}</td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Total del carro</h2>
                                            <ul>
                                                <li>Subtotal<span>{{$total}}</span></li>
                                                <li>Total<span>100.00</span></li>
                                            </ul>
                                            <a href="#">Realizar pago</a>
                                            
                                                @guest
                            
                                                
                                                @else
                                                <form method="POST"  action="{{ route('pedido/pedir') }}" >
                                                <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">

                                                <input id="fecha" name="fecha" value="<?php echo date('Y-n-j', time());?>" style="display:none">

                                                <input id="total_precio" name="total_precio" value="{{$total}}" style="display:none">

                                                <input id="notas_adicionales" name="notas_adicionales" value="notas_adicionales" style="display:none">

                                            <button type="submit"  class="btn btn-primary " >Realizar reserva</button>
                                            </form>
                                                @endguest
                                                
                                        </div>
                                    </div>
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
