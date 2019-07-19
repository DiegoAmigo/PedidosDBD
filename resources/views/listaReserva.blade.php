@extends('barraSuperior')

@section('seccion')
    <link rel="stylesheet" href="{{ asset('assets/css/otros/style.css')}}">

    <script>
        
         

    </script>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="container">
                    <div class="breadcrumb-content">
                        <h2>Reservas</h2>
                    </div>
                </div>
            
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Reservas</h1>
                            
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-usuario">Id usuario</th>
                                                <th class="product-mesa">Id mesa</th>
                                                <th class="product-fecha">Fecha</th>
                                                <th class="product-hora">Hora</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($mesasusuarios as $mesasusuario)
                                            <tr>
                                                
                                                <td class="product-usuario"><a>{{$mesasusuario->id_usuario}}</a></td>
                                                <td class="product-mesa"><a>{{$mesasusuario->id_mesa}}</a></td>
                                                <td class="product-fecha"><a>{{$mesasusuario->dia}}</a></td>
                                                <td class="product-hora"><a>{{$mesasusuario->hora}}</a></td>

                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                
                            
                        </div>
                    </div>
                </div>
            </div>
            
          

          </div>
        </div>
      </div>
    </section>

    
@endsection
