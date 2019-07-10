<!DOCTYPE html>
<!-- Esta es una plantilla para poder aplicar bootstrap dentro de todas las vistas
    y no repetir el mismo codigo todo el rato para que no sea tan latero
    dense la lata de leer comentarios
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="/inicio">Pedidos Ya</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="/inicio" class="nav-link">Inicio</a></li>
                            <li class="nav-item"><a href="/locales" class="nav-link">Locales</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Alo</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Pruebas</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Sobre nosotros</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <<section class="home-slider owl-carousel">
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
                      <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> Locales</a>
                      <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> Reserva</a>
                      <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"> Categorias</a>
                      <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Paquetes</a>
                    </div>
                  </div>

                  <div class="tab-content py-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <div class="block-17">
                        <div class="checkbox-inline">
                         <label style="color: white"><input type="checkbox" name="Vuelta" id="vuelta" onchange="vuelta()"> Ida y Vuelta</label>
                       </div>
                        <form action="" method="post" class="d-block d-lg-flex">
                          <div class="fields d-block d-lg-flex">

                            <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                            <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                            <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                            <div class="select-wrap one-third">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Guest</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4+</option>
                              </select>
                            </div>
                          </div>
                          <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <div class="block-17">
                        <form action="" method="post" class="d-block d-lg-flex">
                          <div class="fields d-block d-lg-flex">
                            <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Hotel"></div>

                            <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                            <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                            <div class="select-wrap one-third">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Guest</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4+</option>
                              </select>
                            </div>
                          </div>
                          <input type="submit" class="search-submit btn btn-primary" value="Find Hotels">
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <div class="block-17">
                        <form action="" method="post" class="d-block d-lg-flex">
                          <div class="fields d-block d-lg-flex">
                            <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                            <div class="check-in one-third"><input type="text" id="start_date" class="form-control" placeholder="Start date"></div>

                            <div class="check-out one-third"><input type="text" id="return_date" class="form-control" placeholder="Return date"></div>
                            <div class="select-wrap one-third">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Guest</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4+</option>
                              </select>
                            </div>
                          </div>
                          <input type="submit" class="search-submit btn btn-primary" value="Find Car">
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                      <div class="block-17">
                        <form action="" method="post" class="d-block d-lg-flex">
                          <div class="fields d-block d-lg-flex">
                            <div class="textfield-search one-third one-third-1"><input type="text" class="form-control" placeholder="Search Location"></div>


                            <div class="check-out one-third one-third-1"><input type="text" id="start_date" class="form-control" placeholder="Check-out date"></div>

                            <div class="select-wrap one-third one-third-1">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control">
                                <option value="">Categories</option>
                                <option value="">Suite</option>
                                <option value="">Super Deluxe</option>
                                <option value="">Balcony</option>
                                <option value="">Economy</option>
                                <option value="">Luxury</option>
                              </select>
                            </div>
                          </div>
                          <input type="submit" class="search-submit btn btn-primary" value="Find Cruise">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @yield('seccion')
    <div class="container">


        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
