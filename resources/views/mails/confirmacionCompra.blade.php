<!doctype html>
<html lang="es">
  <?php
  use App\Usuario;
  $usuario = Usuario::find(Auth::user()->id);
  ?>
<body>
    <p>
      Sr/a {{Auth::user()->name}}
    </p>    
    <p>
      <strong> A continuación se muestran los detalles de su pedido: </strong>
    </p>
    <p>
      <strong> #Orden de pedido:</strong>
    </p>
    
    <table>
  <tr>
    <th>Menu</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Total</th>
  </tr>
  @foreach ($requestCarritoCompra as $item)
    <tr>
    <td>{{$item->model->nombre}}</td>
    <td>{{$item->model->precio}}</td>
    <td>{{$item->model->cantidad}}}</td>
    <td>{{$item->total}}</td>
  </tr> 
  @endforeach
  
</table> 
<p> 
  Monto total: {{Cart::total()}}
</p>
<p>
  Método de pago: 
</p>
</body>
</html>


