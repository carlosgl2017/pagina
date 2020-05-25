<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
contenido del mensaje:
<p>Recibiste un mensaje de: {{$msg['name']}} -{{$msg['apellidos']}}-{{$msg['email']}}</p>
<p><strong>Ci:</strong>{{$msg['ci']}}</p>
<p><strong>Tipo:</strong>{{$msg['tipo']}}</p>
<p><strong>Representante:</strong>{{$msg['representante']}}</p>
<p><strong>numero_testimonio:</strong>{{$msg['numero_testimonio']}}</p>
<p><strong>direccion:</strong>{{$msg['direccion']}}</p>
<p><strong>Telefono:</strong>{{$msg['telefono']}}</p>
<p><strong>Fecha:</strong>{{$msg['fecha']}}</p>
<p><strong>Monto Comprometido:</strong>{{$msg['monto_comprometido']}}</p>
<p><strong>Departamento:</strong>{{$msg['departamento']}}</p>
<p><strong>Descripción Reclamo:</strong>{{$msg['descripcion']}}</p>    
</body>
</html>