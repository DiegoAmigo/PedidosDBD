@extends('plantilla')
<?php
    use App\Local;
    use App\Menu;
    $locales = Local::all();
    $menus = Menu::all();
?>
@section('seccion')
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
