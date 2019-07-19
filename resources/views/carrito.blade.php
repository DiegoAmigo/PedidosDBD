
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

        function calcularTotal()
        { 
            
            var total = <?= $total ?>;

            var totalEnvio = <?= $envioTotal ?>;

            var todoIncluido = total + totalEnvio;
            
            var check1 = document.getElementById("entrega1");
            var check2 = document.getElementById("entrega0");
            var visual = document.getElementById("total_mostrado");
            document.getElementById("total_mostrado").innerHTML = "";
            document.getElementById("envio_mostrado").innerHTML = "";
            var entregar = document.getElementById("total_precio");
            if (check1.checked)
            {
                document.getElementById("valorEnPost").value = 1;
                document.getElementById("envio_mostrado").innerHTML = document.getElementById("envio_mostrado").innerHTML + totalEnvio;
                document.getElementById("total_mostrado").innerHTML = document.getElementById("total_mostrado").innerHTML + "Total<span>" + todoIncluido + "</span>";
                document.getElementById("total_precio").value = todoIncluido;
            }
            if (check2.checked)
            {
                document.getElementById("valorEnPost").value = 0;
                document.getElementById("envio_mostrado").innerHTML = document.getElementById("envio_mostrado").innerHTML + "0";
                document.getElementById("total_mostrado").innerHTML = document.getElementById("total_mostrado").innerHTML + "Total<span>" + total + "</span>";
                document.getElementById("total_precio").value = total;
            }


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
                                            <ul >
                                                <li>Subtotal<span>{{$total}}</span></li>
                                                <li>envío<span id="envio_mostrado">0</span></li>
                                                <li id="total_mostrado">Total<span>{{$total}}</span></li>
                                            </ul>
                                            
                                            
                                                @guest
                            
                                                
                                                @else
                                                <form method="POST"  action="{{ route('pedido/pedir') }}" >
                                                <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">

                                                <input id="fecha" name="fecha" value="<?php echo date('Y-n-j', time());?>" style="display:none">

                                                <input id="total_precio" name="total_precio" value="{{$total}}" style="display:none">
                                                
                                                <input id="notas_adicionales" name="notas_adicionales" value="notas_adicionales" style="display:none">
                                                <div >
                                                
                                                 <label><input type=radio id="entrega0" name="despacho" value ="0" onchange="calcularTotal()" checked>Retiro en local</label>
                                                 </div>
                                                <div >
                                                <label><input type=radio id="entrega1" name="despacho" value ="1" onchange="calcularTotal()">Despacho</label>

                                                </div>
                                                

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
            


            <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pago presencial</a>

                <a class="nav-link p-3" id="v-pills-nombre-tab" data-toggle="pill" href="#v-pills-nombre" role="tab" aria-controls="v-pills-nombre" aria-selected="false">Pago con tarjeta</a>

                
              </div>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('pedido/pedir') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf                  
                    <div class="fields d-block d-lg-flex">   
                                      
                    <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">                                         
                      
                    <input id="fecha" name="fecha" value="<?php echo date('Y-n-j', time());?>" style="display:none">

                    <input id="total_precio" name="total_precio" value="{{$total}}" style="display:none">
                                                
                    <input id="notas_adicionales" name="notas_adicionales" value="notas_adicionales" style="display:none">
                    <input  id="valorEnPost" name="despacho" value ="0" style="display:none">

                      <input id="pago_entrega" name="pago_entrega" value="1" style="display:none">
                      <input id="pago_tarjeta" name="pago_tarjeta" value="0" style="display:none">
                      <input id="numero_tarjeta" name="numero_tarjeta" value="{{NULL}}" style="display:none">
                      <input id="fecha_vencimiento" name="fecha_vencimiento" value="{{NULL}}" style="display:none">
                      <input id="digitos_verificadores" name="digitos_verificadores" value="{{NULL}}" style="display:none">
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary ">Realizar pedido</button>
                  </form>
                </div>
              </div>
              
              <div class="tab-pane fade" id="v-pills-nombre" role="tabpanel" aria-labelledby="v-pills-nombre-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('pedido/pedir') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">
                      <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">

                                                <input id="fecha" name="fecha" value="<?php echo date('Y-n-j', time());?>" style="display:none">

                                                <input id="total_precio" name="total_precio" value="{{$total}}" style="display:none">
                                                
                                                <input id="notas_adicionales" name="notas_adicionales" value="notas_adicionales" style="display:none">
                        <input  id="valorEnPost" name="despacho" value ="0" style="display:none">

                      <input id="pago_entrega" name="pago_entrega" value="0" style="display:none">
                      <input id="pago_tarjeta" name="pago_tarjeta" value="1" style="display:none">
                      <div class="textfield-search one-third">
                        <p style=" color: white ">Número de tarjeta</p>
                        <input type="int" id="numero_tarjeta" name= "numero_tarjeta" class="form-control" placeholder="Número de tarjeta">
                        </div>

                        <div class="check-out one-third one-third-1">
                          <p style=" color: white ">fecha vencimiento</p>
                        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" class="form-control" placeholder="fecha vencimiento">
                        

                        </div>
                        <div class="textfield-search one-third">
                          <p style=" color: white ">dígito verificador</p>
                        <input type="text" id="digitos_verificadores" name= "digitos_verificadores" class="form-control" placeholder="dígito verificador">
                        </div>
                        
                    </div>
                    

                    <div class=" one-third">
                      <p style=" color: white "></p>
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " >Realizar pedido</button>
                    </div>
                  </form>
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
