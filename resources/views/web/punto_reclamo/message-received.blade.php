<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>

<table class="table table-responsive" border="1">
  <thead>
    <tr>
      <th style="text-align:center;background-color:#C5D86D" colspan="2">FORMULARIO DE RECLAMO </br> Cooperativa de Ahorro y Crédito Societaria "San Martín" R.L.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="text-align:center;background-color:#C5D86D">Nombre</th>
      <td>{{$msg['name']}}  {{$msg['apellidos']}}</td>
    </tr>  
    
    <tr>
      <th style="text-align:center;background-color:#C5D86D">Ci</th>
      <td>{{$msg['ci']}} {{$msg['exp']}}</td>
    </tr>  

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Tipo de Reclamante</th>
      <td>{{$msg['tipo']}}</td>
    </tr>  

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Representante</th>
      <td>{{$msg['representante']}}</td>
    </tr> 

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Número de Testimonio</th>
      <td>{{$msg['numero_testimonio']}}</td>
    </tr> 

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Dirección</th>
      <td>{{$msg['direccion']}}</td>
    </tr> 

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Teléfono</th>
      <td>{{$msg['telefono']}}</td>
    </tr>

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Fecha</th>
      <td>{{$msg['fecha']}}</td>
    </tr>

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Monto </th>
      <td>{{$msg['monto_comprometido']}}</td>
    </tr>

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Departamento </th>
      <td >{{$msg['departamento']}}</td>
    </tr>

    <tr>
      <th style="text-align:center;background-color:#C5D86D">Descripción de reclamo</th>
      <td>{{$msg['descripcion']}}</td>
    </tr>    

  </tbody>
</table>

</body>
</html>