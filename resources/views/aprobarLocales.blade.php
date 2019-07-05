@extends('plantilla')

@section('seccion')


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Hoteles disponibles</h3>
                    @foreach ($locales as $local)
                        <li><a href="{{route('locales.show', $local)}}">{{$local->nombre_local}} <span>aprobado: {{$local->aprobado}}</span></a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
