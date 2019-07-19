@extends('barraSuperior')

@section('seccion')


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Usuarios Registrados</h3>
                    @foreach ($usuarios as $usuario)
                        <li><a href="{{route('usuarios.historial', $usuario)}}">{{$usuario->name}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
