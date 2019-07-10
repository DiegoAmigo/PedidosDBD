@extends('plantilla')

@section('seccion')


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Hoteles disponibles</h3>
                    @foreach ($locales as $local)
                        <li><a href="{{route('locales.show', $local)}}">{{$local->nombre_local}}
                        @if ($local->aprobado == 1)
                            <span>aprobado: Sí</span></a></li>

                        @else
                            <span>aprobado: No</span></a></li>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
