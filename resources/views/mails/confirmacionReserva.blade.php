<!doctype html>
<html lang="es">
<body>    
    <p> Sr/a {{Auth::user()->name}}</p>
    <p> A continuación se muestran los detalles de su reserva: </p>
    <p>
        <strong> Aquí está el detalle de su reserva </strong> 
    </p>

    <strong> #Orden de reserva: </strong>     
    <p> Nombre del restaurante: </p>
    <p> Dirección: </p>   
    <p> Mesa:  </p>    
    <p> Dia :  {{ $requestData->dia}} </p>
    <p> Hora : {{$requestData->hora}} </p>   
</body>
</html>

