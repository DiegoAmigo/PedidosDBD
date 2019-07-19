@extends('barraSuperior')

@section('seccion')

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9 mb-4">
        <div class="col-md-6 pr-md-5 flex-column">
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
        <div class="col-md-6">
            <h2 class="h4 mb-4"> Modificar Información
            <form method="POST" action="{{route('usuarios.update', $usuario)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                        <input type="text" name="name" class="form-control"  placeholder="Nombre">
                        <div class="valid-feedback">
                            Correcto
                        </div>
                    </div>

                    <div class="form-group">
                      <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" placeholder="Apellido">
                      <div class="valid-feedback">
                            Correcto
                        </div>
                    </div>
                    <div class="form-group">
                            <input type="text" name="calle" class="form-control @error('calle') is-invalid @enderror" placeholder="Calle">
                            <div class="valid-feedback">
                                  Correcto
                              </div>
                          </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                      <div class="valid-feedback">
                            Correcto
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña">
                        <div class="valid-feedback">
                                Correcto
                            </div>
                      </div>
                    <div class="form-group">
                            <input type="submit" value="Actualizar Información" class="btn btn-primary py-3 px-5">
                    </div>
          </form>
        </div>
      </div>
  </section>
@endsection
