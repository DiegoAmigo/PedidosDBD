<!doctype html>
<html lang="es">
    <?php
    use App\Local;
    use App\Mesa;
    $mesaReal = Mesa::find($requestData->id_mesa);
    $local = Local::all()->where('id_mesa', '=', $mesaReal->id_local);
    ?>
<body>    
<p> Sr/a {{Auth::user()->name}}</p>
    <p> A continuación se muestran los detalles de su reserva: </p>
    <p>
        <strong> Aquí está el detalle de su reserva </strong> 
    </p>

    <strong> #Orden de reserva: </strong>     
    <p> Nombre del restaurante: </p>
    <p> Dirección: </p>   
    <p> Mesa: {{$mesaReal->numero_mesa}} </p>    
    <p> Dia :  {{ $requestData->dia}} </p>
    <p> Hora : {{$requestData->hora}} </p>   
</body>
</html>

