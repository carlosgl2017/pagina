<!DOCTYPE html>
<html lang="es">
<?php
function getMonth($meses)
{
    switch ($meses) {
        case 1:
            return "Enero";
            break;
        case 2:
            return "Febrero";
            break;
        case 3:
            return "Marzo";
            break;
        case 4:
            return "Abril";
            break;
        case 5:
            return "Mayo";
            break;
        case 6:
            return "Junio";
            break;
        case 7:
            return "Julio";
            break;
        case 8:
            return "Agosto";
            break;
        case 9:
            return "Septiembre";
            break;
        case 10:
            return "Octubre";
            break;
        case 11:
            return "Novimbre";
            break;
        case 12:
            return "Diciembre";
            break;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        .superior {
            display: inline-flex;
            font-size: 16;
        }

        .centrado {
            text-align: center;
            line-height: 1px;
            font-size: 11;
        }

        h2 {
            position: relative;
            top: -160px;
            text-align: center;
            text-transform: uppercase;
        }

        h3 {
            position: relative;
            top: -140px;
            text-align: center;
            text-transform: uppercase;
        }

        .parrafos {
            position: relative;
            top: -190px;
            font-size: 12px;
            line-height: 0.01px;
            text-align: center;
        }

        .linea {
            position: relative;
            top: -130px;

        }

        .fecha {
            position: relative;
            top: -170px;
            font-size: 16px;
            line-height: 1.6px; 
        }

        #primero {
            color: black;
            position: relative;
            top: -200px;
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

        #referencia {
            position: relative;
            top: -200px;
        }

        #contenido {
            position: relative;
            top: -210px;
        }
    </style>
</head>

<body>
    <header>
        <img class="superior" src="web/img/sanmartin.png" width="100" height="100">
        <h3>COOPERATIVA DE AHORRO Y CRÉDITO SOCIETARIA</h3>
        <h2>"SAN MARTÍN" R.L.</h2>
        <hr class="linea">
    </header>

    <div class="parrafos">
        <p>PERSONERIA JURÍDICA N° 510 R.M. 00535 * R.N.C. N° 5</p>
        <p>R.A. AFCOOP H-2 FASE-N° 188/2017</p>
        <p>LICENCIA DE FUNCIONAMIENTO ASFI/019/2019</p>
    </div>

    <div class="fecha">
        <p>Potosí, {{$fecha->day}} de {{getMonth($fecha->month)}} de {{$fecha->year}}</p>
        <p>Señores:</p>
        <p>COOPERATIVA DE AHORRO Y CRÉDITO SOCIETARIA "SAN MARTÍN" R. L.</p>
        <p style="font-weight: bold;">Presente.-</p>
    </div>

    <div id="referencia">
        <p class="referencia">REF.- SOLICITA REPROGRAMACIÓN DE OPERACIÓN (ES) CREDITICIA (S)</p>
    </div>

    <!-- <div>    
        <p>SOLICITUD CSM/S-{{$codigo}}/{{$fecha->year}}</p>
    </div> -->
    <div id="contenido">
        <p class="parrafo"> De mi consideración:</p>
        <p class="parrafo">Mediante la presente, me dirijo a su entidad a efecto de solicitar la reprogramación de la (s) operación (s) que mi (nuestras) persona (s) mantienen (n) en su entidad a efecto de que me (nos) brinde condiciones más favorables para el cumplimiento de las obligaciones asumidas con la COOPERATIVA DE AHORRO Y CRÉDITO SOCIETARIA “SAN MARTÍN” R.L. que permitan regularizar los pagos adeudados, en consideración a la coyuntura actual que vive el país, dentro del marco de sus Políticas y Normas de Crédito.</p>
        <p class="parrafo">En tal sentido, agradeceré a ustedes evaluar la situación y el estado de la (s) operación (es) a efecto de que se conceda este beneficio si corresponde; y de ser favorable su análisis, agradeceré que se aplique la reprogramación.</p>
        <p class="parrafo"> A efectos de que se pueda instrumentar la presente solicitud manifiesto (manifiesto) mí (nuestro) compromiso vinculante e irrevocable de apersonarse (apersonarnos) a la COOPERATIVA DE AHORRO Y CRÉDITO SOCIETARIA “SAN MARTÍN” R.L. Para suscribir la Adenda correspondiente y el nuevo Plan de Pagos aplicable según sus Políticas y Normas.</p>
        <p class="parrafo">Sin otro particular saludo a usted muy atentamente,</p>

        <table style="text-align: center; margin:auto;">
            <tr>
                <td>
                    <p>_______________________________</p>
                    <p>Nombre:{{$prestatario->nombre}}</p>
                    <p>C.I.:{{$prestatario->ci}}</p>
                </td>              
            </tr>
        </table>
    </div>
    <!-- <footer>
        <img src="web/img/pie.png" width="100%" height="100%">
    </footer> -->

</body>


</html>