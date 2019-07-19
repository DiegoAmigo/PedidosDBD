<!-- Boquejo comprobante de compra
<!DOCTYPE html>
<html>
    <head>
        <title> Comprobante de pedido </title>
        <title> Detalles del pedido </title>
    </head>
    <body>  
        <tbody>
                            @foreach ($requestCarrito as $menu)
                            <tr>
                                <td class="align-middle">{{ $menu->nombre}}</td>
                                <td class="align-middle">{{ $menu->precio}}</td>
                                <td class="align-middle">{{ $menu->descuento}}</td>
                                <td class="align-middle">{{ $menu->descripcion}}</td>
                            </tr> 
                            @endforeach
                        </tbody>    
          
        
    </body>
</html>

-->


