@extends('plantilla')

@section('seccion')
    <div class="card">
        <div class="card-header">
            Header Yas
        </div>
        <div class="card-body">
            <h4 class="card-title">Prueba</h4>
            <p class="card-text">Aqui simplemente se utiliza bootstrap para mostrar esto</p>
            <p class="card-text"> Es mágico, viendo el codigo extends se utiliza la plantilla que llama a bootstrap</p>
        </div>
        <div class="card-footer text-muted">
            Footer Tests
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item 1</li>
                <li class="list-group-item">Item 2</li>
                <li class="list-group-item">Item 3</li>
            </ul>
        </div>
    </div>
    <h1 >Hola no sé que más escribir acá</h1>
@endsection
