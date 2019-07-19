@extends('barraSuperior')
 @section('seccion')


    <section class="ftco-section-2">
            <div class="container-fluid d-flex">
                <div class="section-2-blocks-wrapper row no-gutters">
                    <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
                    </div>
                    <div class="text col-lg-12 ftco-animate flex">
                        <div class="text-inner align-self-start">
                            <h3>{{$local->nombre_local}}</h3>
                            </div>
                            <div class="col mb-3 d-flex" style="background: white;">
                                <div class="align-self-center">
                                    <p class="mb-0"><span>Valor Entrega:</span> {{$local->valor_entrega}}</p>
                                </div>
                            </div>
                            <div class="col mb-3 d-flex" style="background: white;">
                                <div class="align-self-center">
                                    <p class="mb-0"><span>Tiempo Despacho:</span> {{$local->tiempo_despacho}}</p>
                                </div>
                            </div>
                            <div class="col mb-3 d-flex" style="background: white;">
                                <div class="align-self-center">
                                    <p class="mb-0"><span>Tiempo Retiro:</span> {{$local->tiempo_retiro}}</p>
                                </div>
                            </div>
                            <div class="col mb-3 d-flex" style="background: white;">
                                <div class="align-self-center">
                                    <p class="mb-0"><span>Cadena:</span> {{$local->cadena}}</p>
                                </div>
                            </div>
                            <div class="col mb-3 d-flex" style="background: white;">
                                <div class="align-self-center">
                                    <p class="mb-0"><span>Dirección:</span> {{$local->direccion_local}}</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{route ('locales.aprobar', $local)}}">
                            <div class="form-group">
                                <input type="submit" value="Aprobar" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

@endsection
