
@extends('barraSuperior')
<?php
    use App\Local;
    use App\Menu;
    use App\Categoria;
    $locales = Local::all();
    $menus = Menu::all();
    $categorias = Categoria::all();
?>
@section('seccion')
    
    
    @inject('UbicacionController', 'App\Http\Controllers\UbicacionController')
    <?php 
      $datos =  $UbicacionController->obtenerUbicaciones();
    ?>

    
    


    <section class="home-slider owl-carousel" >
      <div class="slider-item" style="background-image: url('imagenes/sandwich-3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Comida a domicilio online</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('imagenes/kfc.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Reserva tu mesa en tu local favorito</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('imagenes/tommy-beans.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Pide online y retira en un local</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Ubicación</a>

                <a class="nav-link p-3" id="v-pills-nombre-tab" data-toggle="pill" href="#v-pills-nombre" role="tab" aria-controls="v-pills-nombre" aria-selected="false">Nombre</a>

                <a class="nav-link p-3" id="v-pills-categoria-tab" data-toggle="pill" href="#v-pills-categoria" role="tab" aria-controls="v-pills-categoria" aria-selected="false">Categoría</a>

                <a class="nav-link p-3" id="v-pills-valoracion-tab" data-toggle="pill" href="#v-pills-valoracion" role="tab" aria-controls="v-pills-valoracion" aria-selected="false">Valoración</a>
              </div>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('locales/localesEnZona') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">

                      
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="pais" id="pais" class="form-control">
                            @foreach((array)(last($datos)) as $dato)
                                <option style="color: black" id="{{($dato)->id}}" value="{{($dato)->id}}">{{($dato)->pais}}</option>
                            @endforeach
                          
                        </select>
                      </div>
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " onclick="obtenerUbicacion()">Buscar locales</button>
                  </form>
                </div>
              </div>
              
              <div class="tab-pane fade" id="v-pills-nombre" role="tabpanel" aria-labelledby="v-pills-nombre-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('locales/localesNombre') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">

                      
                      <div class="check-in one-third"><input type="text" id="nombre" name= "nombre" class="form-control"></div>
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " onclick="obtenerUbicacion()">Buscar locales</button>
                  </form>
                </div>
              </div>


              <div class="tab-pane fade" id="v-pills-categoria" role="tabpanel" aria-labelledby="v-pills-categoria-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('locales/categoria') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">

                      
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="pais" id="pais" class="form-control">
                            @foreach((array)(last($categorias)) as $categoria)
                                <option style="color: black" id="{{($categoria)->id}}" value="{{($categoria)->id}}">{{($categoria)->nombre}}</option>
                            @endforeach
                          
                        </select>
                      </div>
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " onclick="obtenerUbicacion()">Buscar locales</button>
                  </form>
                </div>
              </div>


              <div class="tab-pane fade" id="v-pills-valoracion" role="tabpanel" aria-labelledby="v-pills-valoracion-tab">
                <div class="block-17">
                  <label style="color: white">Cantidad de estrellas</label>
                  <form method="POST"  action="{{ route('locales/valoracion') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">

                      
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="pais" id="pais" class="form-control">
                            <option style="color: black" value="">1</option>
                            <option style="color: black" value="">2</option>
                            <option style="color: black" value="">3</option>
                            <option style="color: black" value="">5</option>
                          
                        </select>
                      </div>
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " onclick="obtenerUbicacion()">Buscar locales</button>
                  </form>
                </div>
              </div>


              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
    <div class="container-fluid d-flex">
      <div class="section-2-blocks-wrapper row no-gutters" >
            <div class="img col-sm-12 col-lg-6" style="background-image: url('imagenes/logoPDBD2.jpg');">
              </div>
        <div class="text col-lg-6 ftco-animate">
          <div class="text-inner align-self-start">

            <h3>Bienvenido a PedidosDBD</h3>
            <p>En donde tus pedidos online llegan a tu casa a tan solo un par de clics. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

            <p>Empieza ya a hacer tu menu para disfrutar tu día.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2>Locales</h2>
                    </div>
                </div>
      <div class="row">
            @foreach ($locales as $local)
                @if ($loop->index <4)
                    @if ($loop->index == 0)
                    <div class="col-lg-3 promo ftco-animate">
                            <a href="{{ route('locales.show', $local) }}" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
                            <div class="text text-center">
                                    <h2>{{$local->nombre_local}}</h2>
                                    <h3 class="price"><span>Precio Entrega</span> {{$local->valor_entrega}}</h3>
                                    <a href="{{ route('locales.show', $local) }}" class="read">Ver Más</a>
                                </div>
                    </div>
                    @endif
                    @if ($loop->index == 1)
                    <div class="col-lg-3 promo ftco-animate">
                            <a href="{{ route('locales.show', $local) }}" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
                            <div class="text text-center">
                                    <h2>{{$local->nombre_local}}</h2>
                                    <h3 class="price"><span>Precio Entrega</span> {{$local->valor_entrega}}</h3>
                                    <a href="{{ route('locales.show', $local) }}" class="read">Ver Más</a>
                                </div>
                    </div>
                    @endif
                    @if ($loop->index == 2)
                    <div class="col-lg-3 promo ftco-animate">
                            <a href="{{ route('locales.show', $local) }}" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
                            <div class="text text-center">
                                    <h2>{{$local->nombre_local}}</h2>
                                    <h3 class="price"><span>Precio Entrega</span> {{$local->valor_entrega}}</h3>
                                    <a href="{{ route('locales.show', $local) }}" class="read">Ver Más</a>
                                </div>
                    </div>
                    @endif
                    @if ($loop->index == 3)
                    <div class="col-lg-3 promo ftco-animate">
                            <a href="{{ route('locales.show', $local) }}" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
                            <div class="text text-center">
                                    <h2>{{$local->nombre_local}}</h2>
                                    <h3 class="price"><span>Precio Entrega</span> {{$local->valor_entrega}}</h3>
                                    <a href="{{ route('locales.show', $local) }}" class="read">Ver Más</a>
                                </div>
                    </div>
                    @endif
                @endif
          @endforeach
      </div>
    </div>
  </section>

  <section class="ftco-section">
        <div class="container-fluid">
          <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
            <div class="col-md-7 text-center heading-section">
              <h2>Menus</h2>
            </div>
          </div>
          <div class="row no-gutters">
              @foreach ($menus as $menu)
              @php
                  $local2= Local::find($menu->id_local);
              @endphp
                  @if ($loop->index <8)
                      @if ($loop->index==0)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==1)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==2)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==3)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==4)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==5)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==6)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                      @if ($loop->index==7)
                      <div class="col-md-6 col-lg-3 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                              <div class="text">
                                <span class="price">Precio: {{$menu->precio}}</span>
                                <h3 class="heading">{{$menu->nombre}}</h3>
                                <div class="post-meta">
                                  <span>Local: {{$local2->nombre_local}}</span>
                                </div>
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                              </div>
                            </a>
                          </div>
                      @endif
                  @endif
              @endforeach
          </div>
        </div>
      </section>

    
@endsection
