@extends('barraSuperior')

@section('seccion')
    
    <style>



    </style>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

                    <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2>Mesas</h2>
                    </div>
                </div>

            <div class="row">

              <!-- Aquí empiezan cada bloque con las mesas--->
              @foreach ($mesass as $mesa)


              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('{{ asset('imagenes/mesas-restaurante.jpg')}}');">
                  
                  <form method="POST" action="{{route('usuarios/reservarMesa')}}">
                    <input id="id_pedido" name="id_mesa" value="{{$mesa->id}}" style="display:none">
                    <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">
                    <input id="dia{{$mesa->id}}" name="dia" value="{{$mesa->dia}}" style="display:none">
                    <input id="hora{{$mesa->id}}" name="hora" value="{{$mesa->hora}}" style="display:none">
                  
                  <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " >Reservar</button><br/>
                  </form>
                  <div class="text">

                  	
                    <span>Cantidad de puestos: {{$mesa->cantidad_puestos}}</span><br/>
                    <span>Numero de la mesa: {{$mesa->numero_mesa}}</span>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                    
                  </div>
                </a>
              </div>
              @endforeach
              <!--bloque ventas--->
              
              
              
            </div>
            
          </div>
        </div>
      </div>
      
    </section>

@endsection