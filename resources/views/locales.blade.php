
@extends('barraSuperior')
<?php
    use App\Local;
    use App\Menu;
    $locales = Local::all();
    $menus = Menu::all();
?>
@section('seccion')
    
    <script>
        function obtenerMenus(){
          document.formulario.submit();
         }
         

    </script>

    <section class="ftco-section">
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
              <h2>Locales cerca de su ubicación</h2>
            </div>
          </div>
          <div class="row no-gutters">
          @foreach ($localess as $local)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <form method="POST"  action="{{ route('menus/en-local') }}" class="block-5" name="formulario" >
                    @method('POST')
                    @csrf
                    <input id="id_local" name="id_local" value="{{$local->id}}" style="display:none">
                    
                <a href="#" onclick="obtenerMenus()" class="block-5" style="background-image: url('{{ asset('imagenes/sandwich-4.jpg')}}');">
                  <div class="text">
                  <span class="price">valor entrega: ${{$local->valor_entrega}}</span>
                    <h3 class="heading">{{$local->nombre_local}}</h3>
                    <div class="post-meta">
                    <span>Dirección : {{$local->direccion_local}}</span>
                    <span>Tiempo despacho: {{$local->tiempo_despacho}}</span>
                    <span>Tiempo retiro: {{$local->tiempo_retiro}}</span>
                    <span>id ubicacion: {{$local->id_ubicacion}}</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
                
                </form>
              </div>
          @endforeach
          </div>
        </div>
</section>

    
@endsection
