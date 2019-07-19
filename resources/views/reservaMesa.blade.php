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
                        <h2>Ingrese la fecha y hora que desea reservar</h2>


                    </div>
                </div>

            <div class="row">

              <!-- Aquí empiezan cada bloque con las mesas--->
              <form method="POST" action="{{route('mesasUsu/disponibles')}}">
                @method('POST')
                    @csrf
                <input  name="id_local" value= "{{$id_local}}" style="display:none">
                <!-- Campo de entrada de fecha -->
                Selecciona la fecha de la reserva:<input type="date" name="dia" min="2019-07-17"max="2019-08-01" step="2" class="form-control">
                <!-- Campo de entrada de hora -->
                Selecciona la hora de la reserva:
                <input type="time" name="hora" min="12:00" max="23:00:00" step="1" class="form-control">
                

                <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " >Ver mesas disponibles</button>
                  </form>
</form>
            
              
              
              
            </div>
            
          </div>
        </div>
      </div>
      
    </section>

@endsection




