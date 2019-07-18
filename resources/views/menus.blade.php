
@extends('barraSuperior')

@section('seccion')
    
    <style>

    </style>


    <script>


      function agregarAlCarrito(idActual){
            var id_producto = document.getElementById("id"+idActual).value;
            var nom = document.getElementById("nombre"+idActual).value;
            var cant = document.getElementById("cantidad"+idActual).value;
            var val = document.getElementById("valor"+idActual).value;
            $.post("{{ asset('carrito/agregar')}}", {id: id_producto , nombre: nom , cantidad: cant, valor: val}, function(status){
             alert("Se ha agregado su menú al carro de compras");
                  });
          }



    </script>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <!-- Aquí empiezan cada bloque con las ventas--->
              @foreach ($menus as $menu)
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" onclick="agregarAlCarrito('{{$menu->id}}')" style="background-image: url('{{ asset('imagenes/sandwich-3.jpg')}}');">
                  <input id="id{{$menu->id}}" name="id_local" value="{{$menu->id}}" style="display:none">
                  <input id="nombre{{$menu->id}}" name="nombre" value="{{$menu->nombre}}" style="display:none">
                  <input id="cantidad{{$menu->id}}" name="cantidad" value="1" style="display:none">
                  <input id="valor{{$menu->id}}" name="valor" value="{{$menu->precio}}" style="display:none">
                  <div class="text">
                    <span class="price">Valor menú: {{$menu->precio}}</span>
                    <h3 class="heading">{{$menu->nombre}}</h3>
                    <div class="post-meta">
                      <span>{{$menu->descripcion}}</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              @endforeach
              <!--bloque ventas--->
              
              
              
            </div>
            
          
        </div>
      </div>
    </section>

@endsection