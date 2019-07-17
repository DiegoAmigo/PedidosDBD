
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
             alert("Status: " + status);
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
            
          <!--- Formulario lateral--->
          <div class="col-lg-4 sidebar">
            <div class="sidebar-box ftco-animate">
              <div class="search-tours bg-light p-4">
                <h3>Encuentra tu Paquete ideal</h3>
                <form action="" method="post">
                  <div class="fields">
                    <div class="row flex-column">

                      <div class="textfield-search col-sm-12 group mb-3"><input type="text" class="form-control" placeholder="Busca la ubicación"></div>

                      <div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection