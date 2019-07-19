<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Reserva</title>
</head>
<body>
<p> Aquí está el detalle de su reserva {{  }}</p>
    <p>Mesa</p>
    <ul>
    <li> Dia :  {{ $reserva->dia}} </li>
    <li> Hora : {{$reserva->hora}} </li>    
</body>
</html>