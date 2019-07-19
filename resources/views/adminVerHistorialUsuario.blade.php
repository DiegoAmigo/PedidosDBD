
@extends('barraSuperior')
<?php
    use App\Historial_Usuario;
?>
@section('seccion')

<section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-4">
            <div class="col-md-12">
              <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Datos del Usuario</h2>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Nombre:</span> {{$usuario->name}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Apellido:</span> {{$usuario->apellido}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Email:</span> {{$usuario->email}}</p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                        <p class="mb-0"><span>Dirección:</span> {{$usuario->calle}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <section class="ftco-section">
            <div class="container">
              <div class="row block-9 mb-4">
                <div class="col-md-6 pr-md-5 flex-column">
                    <h2 class="h4 mb-4">Historial Del Usuario</h2>
                @php
                    $historiales = Historial_Usuario::where('id_usuario', '=', $usuario->id)->get();
                @endphp
                @if ($historiales == null)
                        <h3 class="h4 mb-4"> No hay acciones Registradas</h3>
                @else
                @foreach ($historiales as $historial)
                    <div class="row d-block flex-row">
                        <div class="col mb-3 d-flex py-4 border" style="background: white;">
                            <div class="align-self-center">
                                    <p class="mb-0"><span>Fecha:</span> {{$historial->fecha}}</p>
                            </div>
                        </div>
                        <div class="col mb-3 d-flex py-4 border" style="background: white;">
                            <div class="align-self-center">
                                    <p class="mb-0"><span>Hora:</span> {{$historial->hora}}</p>
                            </div>
                        </div>
                        <div class="col mb-3 d-flex py-4 border" style="background: white;">
                            <div class="align-self-center">
                                    <p class="mb-0"><span>Accion:</span> {{$historial->accion}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
              </div>
            </div>
            </div>
          </section>
@endsection
