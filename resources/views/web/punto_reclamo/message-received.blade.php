<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Reclamo via Web</title>
</head>

<body>

  <table class="table" border="1">
    <thead>
      <tr>
        <th style="text-align:center;background-color:#C5D86D" colspan="2">FORMULARIO DE RECLAMO </br> Cooperativa de Ahorro y Crédito Societaria "San Martín" R.L.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th style="text-align:center;background-color:#C5D86D">Nombre</th>
        <td>{{$msg['name']}} {{$msg['apellidos']}}</td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Ci</th>
        <td>{{$msg['ci']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Correo Electrónico</th>
        <td>{{$msg['email']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Tipo de Reclamante</th>
        <td>@if($msg['id_tipo_reclamante']==1)
          Persona (Persona Natural)
          @elseif ($msg['id_tipo_reclamante']==2)
          Empresa (Persona Jurídica)
          @elseif ($msg['id_tipo_reclamante']==3)
          Apoderado de una Persona Natural
          @endif
        </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Tipo de Reclamo</th>
        <td>@if($msg['id_tipo_reclamo']==1)
          CANJE DE MATERIAL MONETARIO
          @elseif ($msg['id_tipo_reclamo']==2)
          ATENCION AL CLIENTE
          @elseif ($msg['id_tipo_reclamo']==3)
          CHEQUE DE GERENCIA
          @elseif ($msg['id_tipo_reclamo']==4)
          ENTREGA DE BILLETE FALSO
          @elseif ($msg['id_tipo_reclamo']==5)
          FALLAS DEL SISTEMA
          @elseif ($msg['id_tipo_reclamo']==6)
          FRACCIONAMIENTO DE MATERIAL MONETARIO
          @elseif ($msg['id_tipo_reclamo']==7)
          MALA ATENCION EN VENTANILLA DE CAJAS
          @elseif ($msg['id_tipo_reclamo']==8)
          MALA INFORMACION
          @elseif ($msg['id_tipo_reclamo']==9)
          PAGO DE SERVICIOS Y OTROS
          @elseif ($msg['id_tipo_reclamo']==10)
          PRACTICAS DISCRIMINATORIAS Y ABUSIVAS
          @elseif ($msg['id_tipo_reclamo']==11)
          PUNTO DE RECLAMO
          @elseif ($msg['id_tipo_reclamo']==12)
          RESERVA Y CONFIDENCIALIDAD DE LA INFORMACIÓN
          @elseif ($msg['id_tipo_reclamo']==13)
          RESTITUCIÓN DE DERECHOS
          @elseif ($msg['id_tipo_reclamo']==14)
          TIEMPO DE ESPERA MÁXIMO EN CAJAS
          @elseif ($msg['id_tipo_reclamo']==15)
          TRANSACCIONES EN VENTANILLA/BOVEDAS
          @endif
        </td>
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
        <th style="text-align:center;background-color:#C5D86D">Monto Comprometido</th>
        <td>{{$msg['monto_comprometido']}}</td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Departamento </th>
        <td>{{$msg['departamento']}}</td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Descripción de reclamo</th>
        <td>{{$msg['descripcion']}}</td>
      </tr>


      <tr>
        <th style="text-align:center;background-color:#C5D86D">Código asignado</th>
        <td>{{str_pad($codig, 5, "0", STR_PAD_LEFT) }}</td>
      </tr>


    </tbody>
  </table>
  <div class="row">
    <p>"En un plazo de cinco (5) días hábiles administrativos a partir del día de mañana, usted puede apersonarse por la Entidad Financiera a recoger su carta de respuesta".</p>
  </div>
</body>

</html>