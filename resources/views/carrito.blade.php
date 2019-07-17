
@extends('barraSuperior')

@section('seccion')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        
        $("#obtenerDatos").click(function(){
        $.get("{{ route('carrito/obtenerTodo') }}", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
          }    );
            })

    </script>


    <form method="POST"  action="{{ route('carrito/agregar') }}"  name="formulario" >

      <input id="id" name="id" value="1" style="display:none">
      <input id="nombre" name="nombre" value="producto_super" style="display:none">
      <input id="cantidad" name="cantidad" value="10" style="display:none">
      <input id="valor" name="valor" value="10000" style="display:none">
      <button type="submit" style="background-color: white ; color: black " class="btn btn-primary " >Buscar locales</button>
    </form>
      <form method="POST"  action="{{ route('carrito/obtenerTodo') }}"  name="formulario" >
      <button id="obtenerDatos" style="background-color: white ; color: black " class="btn btn-primary " >obtener datos</button>
      </form>
    
    
@endsection
