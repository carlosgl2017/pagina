<!DOCTYPE html>
<html lang="es">
<?php
function getMonth($meses)
{
    switch ($meses) {
        case 1:
            return "enero";
            break;
        case 2:
            return "febrero";
            break;
        case 3:
            return "marzo";
            break;
        case 4:
            return "abril";
            break;
        case 5:
            return "mayo";
            break;
        case 6:
            return "junio";
            break;
        case 7:
            return "julio";
            break;
        case 8:
            return "agosto";
            break;
        case 9:
            return "septiembre";
            break;
        case 10:
            return "octubre";
            break;
        case 11:
            return "novimbre";
            break;
        case 12:
            return "diciembre";
            break;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        body{
            margin-left:50px;
            margin-right: 50px;
            margin-top:70px;
        }

        .centrado {
            text-align: center;
            line-height: 1px;
            font-size: 11;
        }


        .fecha {
            font-size: 16px;
            line-height: 1.6px; 
        }

        #primero {
            color: black;           
            /*  background-color: #ccc; */
        }

        #segundo {
            color: #44a359;
        }

        #tercero {
            text-decoration: line-through;
        }

        .parrafo {
            text-align: justify;            
            font-size: 16px;
        }

        .referencia {
            text-decoration: underline;
            font-weight: bold;
            text-align: right;

        }

     

    </style>
</head>

<body>
   
    <div class="fecha">
        <p>Potosí, {{$fecha->day}} de {{getMonth($fecha->month)}} de {{$fecha->year}}</p>
        <br>
        <p>Señores:</p>
        <p>COOPERATIVA DE AHORRO Y CRÉDITO SOCIETARIA "SAN MARTÍN" R. L.</p>
        <br>
        <p style="font-weight: bold;">Presente.-</p>
    </div>

    <div id="referencia">
        <p class="referencia">REF.- SOLICITUD {{$tipo_eleccion->nombre}} DE OPERACIÓN (ES) CREDITICIA (S)</p>
    </div>

    <!-- <div>    
        <p>SOLICITUD CSM/S-{{$codigo}}/{{$fecha->year}}</p>
    </div> -->
    <div id="contenido">
        <p class="parrafo">De mi consideración:</p>
        <p class="parrafo">Mediante la presente y en cumplimiento a normativa vigente, me dirijo muy respetuosamente para solicitar <strong>{{strtolower($tipo_eleccion->nombre)}}</strong> de la (s) operación (s) que mi (nuestras) persona (s) mantienen (n) con la cooperativa; de tal manera que me (nos) brinde condiciones favorables para el cumplimiento de las obligaciones asumidas y que me (nos) permitan regularizar los pagos adeudados; además, considerando la coyuntura actual que vive el país y la evaluación económica de mis ingresos. En tal sentido, agradeceré evaluar la situación y el estado de la (s) operación (es).</p>        
        <p class="parrafo">A efectos de que se pueda instrumentar la presente solicitud, manifiesto mí (nuestro) compromiso vinculante e irrevocable de apersonarme (apersonarnos) a la COOPERATIVA DEAHORRO Y CRÉDITO SOCIETARIA “SAN MARTÍN” R.L., para suscribir la adenda correspondiente y el nuevo Plan de Pagos aplicable según sus Políticas y Normas. </p>
        <p class="parrafo">Sin otro particular saludo a usted muy atentamente,</p>
        <br>
        <br>
        <br>
        <table style="text-align: center; margin:auto;">
            <tr>
                <td>
                    <p>_______________________________</p>
                    <p>{{$prestatario->nombre}}</p>
                    <p>C.I.: {{$prestatario->ci}}</p>
                </td>              
            </tr>
        </table>
    </div>
    <!-- <footer>
        <img src="web/img/pie.png" width="100%" height="100%">
    </footer> -->

</body>


</html>