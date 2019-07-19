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

                        @if( $tipo_resultado == 1)
                        <h2>La solicitud se realizo con éxito</h2>

                        @if( $tipo_resultado == 0)
                        <h2>La solicitud no se pudo realizar</h2>

                        @endif


                    </div>
                </div>

            
          </div>
        </div>
      </div>
      
    </section>

@endsection