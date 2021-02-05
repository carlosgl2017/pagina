<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Reclamo Diferimientos y periodo de gracia via Web</title>
</head>

<body>

  <table class="table" border="1">
    <thead>
      <tr>
        <th style="text-align:center;background-color:#C5D86D" colspan="2">FORMULARIO DE RECLAMO DIFERIMIENTO PERIODO DE GRACIA</br> Cooperativa de Ahorro y Crédito Societaria "San Martín" R.L.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th style="text-align:center;background-color:#C5D86D">Nombre</th>
        <td>{{$msg['nombre']}} {{$msg['apellido']}}</td>
      </tr>
      <tr>
        <th style="text-align:center;background-color:#C5D86D">Tipo de Identificación</th>
        <td>@if($msg['ctidn']=='01')
          CEDULA DE IDENTIDAD
          @elseif ($msg['ctidn']=='09')
          NUMERO DE IDENTIFICACION TRIBUTARIA
          @endif
        </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Número de identificacion</th>
        <td>{{$msg['identificacion']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Teléfono</th>
        <td>{{$msg['num_telf']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Correo Electrónico</th>
        <td>{{$msg['email']}} </td>
      </tr>
    
      <tr>
        <th style="text-align:center;background-color:#C5D86D">Ciudad</th>
        <td>{{$msg['ciudad']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Dirección del Consumidor</th>
        <td>{{$msg['direccion_consumidor']}} </td>
      </tr>


      <tr>
        <th style="text-align:center;background-color:#C5D86D">Nombre Oficial</th>
        <td>{{$msg['nombre_oficial']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Descripción</th>
        <td>{{$msg['descripcion']}} </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Código</th>
        <td>{{str_pad($coding, 5, "0", STR_PAD_LEFT) }}</td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Temática Reclamo</th>
        <td>@if($msg['id_tematica']==255)
          COBRO DE INTERESES DIFERIDOS
          @elseif ($msg['id_tematica']==258)
          OTROS
          @elseif ($msg['id_tematica']==259)
          REFINANCIAMIENTO
          @elseif ($msg['id_tematica']==260)
          REPROGRAMACION
          @elseif ($msg['id_tematica']==261)
          PERIODO DE GRACIA
          @elseif ($msg['id_tematica']==262)
          COBROS DE SEGUROS
          @elseif ($msg['id_tematica']==263)
          COBROS ADICIONALES POR TARJETA DE CRÉDITO
          @elseif ($msg['id_tematica']==264)
          DESCONOCIMIENTO DE LA NORMATIVA VIGENTE
          @elseif ($msg['id_tematica']==265)
          ATENCION DEL PERSONAL DE LA ENTIDAD
          @endif
        </td>
      </tr>

      <tr>
        <th style="text-align:center;background-color:#C5D86D">Tipo de Crédito</th>
        <td>@if($msg['ctcre']=='H0')
          CREDITO HIPOTECARIO DE VIVIENDA
          @elseif ($msg['ctcre']=='H1')
          CREDITO DE VIVIENDA SIN GARANTIA HIPOTECARIA
          @elseif ($msg['ctcre']=='M1')
          MICROCREDITO INDIVIDUAL DEBIDAMENTE GARANTIZADO
          @elseif ($msg['ctcre']=='M2')
          MICROCREDITO IND.DEBIDAMENTE GARANTIZADO GARANTIA REAL
          @elseif ($msg['ctcre']=='N0')
          CREDITO DE CONSUMO
          @elseif ($msg['ctcre']=='N1')
          CREDITO DE CONSUMO DEBIDAMENTE GARANTIZADO
          @elseif ($msg['ctcre']=='N2')
          CREDITO CONSUMO DEB.GARANTIZADO CON GARANTIA REAL
          @endif
        </td>
      </tr>

    </tbody>
  </table>
  <div class="row">
    <p>"En un plazo de dos (2) días hábiles administrativos a partir del día de mañana, usted puede apersonarse por la Entidad Financiera a recoger su carta de respuesta".</p>
  </div>
</body>

</html>