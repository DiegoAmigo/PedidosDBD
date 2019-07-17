
@extends('barraSuperior')

@section('seccion')
<!---VER como hacer que se muestra solo para el que adminsitre el local--->
<form method="POST" action="{{route ('mesas.store')}}">
        @method('POST')
        @csrf
<section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-6 ml-4">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="id_local" class="form-control" placeholder="Id local">
                </div>

                <div class="form-group">
                  <input type="text" name="cantidad_puestos" class="form-control" placeholder="Cantidad de puestos">
                </div>
                <div class="form-group">
                  <input type="text" name="numero_mesa" class="form-control" placeholder="Numero de mesa">
                </div>                         
            </div>
          </div>
        </div>
      </section>
    </form>

<section class="ftco-section">
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
              <h2>Mesas</h2>
            </div>
          </div>
          <div class="row no-gutters">
          @foreach ($mesass as $mesa)
          <div class="col-md-6 col-lg-3 ftco-animate">
                <a href="{{'mesas.ver',$mesa}}" class="block-5" style="background-image: url('images/tour-1.jpg');">
                  <div class="text">
                    <div class="post-meta">
                    <span>Dirección : {{$mesa->numero_mesa}}</span>
                    <span>1idlocal: {{$mesa->id_local}}</span>
                    <span>2cantidad puestos: {{$mesa->cantidad_puestos}}</span>
                    <span>3numero de mesas: {{$mesa->numero_mesa}}</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
          @endforeach
          </div>
        </div>
</section>
@endsection
