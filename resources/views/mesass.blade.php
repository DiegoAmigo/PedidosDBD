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
                  <div class="text">
                  	<span>id Local: {{$mesa->id_local}}</span><br/>
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