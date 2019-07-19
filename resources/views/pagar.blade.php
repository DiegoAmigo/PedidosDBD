
@extends('barraSuperior')

@section('seccion')
    
  <link rel="stylesheet" href="{{ asset('js/bootstrap-datepicker.js')}}">

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
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pago presencial</a>

                <a class="nav-link p-3" id="v-pills-nombre-tab" data-toggle="pill" href="#v-pills-nombre" role="tab" aria-controls="v-pills-nombre" aria-selected="false">Pago con tarjeta</a>

                
              </div>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('locales/localesEnZona') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">

                      <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">
                      <input id="pago_entrega" name="pago_entrega" value="{{True}}" style="display:none">
                      <input id="pago_tarjeta" name="pago_tarjeta" value="{{False}}" style="display:none">
                      <input id="numero_tarjeta" name="numero_tarjeta" value="{{NULL}}" style="display:none">
                      <input id="fecha_vencimiento" name="fecha_vencimiento" value="{{NULL}}" style="display:none">
                      <input id="digitos_verificador" name="digitos_verificador" value="{{NULL}}" style="display:none">
                    </div>
                    

                    
                    <button type="submit" style="background-color: white ; color: black " class="btn btn-primary ">Realizar pedido</button>
                  </form>
                </div>
              </div>
              
              <div class="tab-pane fade" id="v-pills-nombre" role="tabpanel" aria-labelledby="v-pills-nombre-tab">
                <div class="block-17">
                  
                  <form method="POST"  action="{{ route('locales/localesNombre') }}" class="d-block d-lg-flex">
                    @method('POST')
                    @csrf
                    <div class="fields d-block d-lg-flex">
                      <input id="id_usuario" name="id_usuario" value="{{Auth::user()->id}}" style="display:none">
                      <input id="pago_entrega" name="pago_entrega" value="{{False}}" style="display:none">
                      <input id="pago_tarjeta" name="pago_tarjeta" value="{{True}}" style="display:none">
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
                        <input type="text" id="digitos_verificador" name= "digitos_verificador" class="form-control" placeholder="dígito verificador">
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

    

  

  

    
@endsection
