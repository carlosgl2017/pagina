@extends ('web.modulo')
@section ('contenido')
<style>
    section {
        background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
    }

    article {
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    ol {
        margin-left: 50px;
        margin-right: 50px;
    }
</style>


<div class="fixed-background">
    <div class="container">


        <section>
            <article>
                <div class="d-flex justify-content-center" >
                <table border="1" style="text-align: center;">
                    <thead>
                        <tr style="background-image: linear-gradient(to top, #09203f 0%, #537895 100%);">
                            <td colspan="9" class="text-center font-weight-bold" style="color:white;">TASAS ACTIVAS</td>
                        </tr>
                        <tr style="background:#ebf0f1">
                            <th class="text-center" rowspan="2">TIPO DE PRÉSTAMO</th>
                            <th class="text-center" colspan="2">MONTO</th>
                            <th class="text-center" colspan="2">PLAZOS</th>
                            <th class="text-center" colspan="2" rowspan="2">TASA ACTIVA (% ANUAL)</th>
                     
                        </tr>  
                        <tr style="background:#ebf0f1">                             
                            <th>Desde Bs.</th>
                            <th>Hasta Bs.</th>
                            <th>Desde</th>
                            <th>Hasta</th> 
                        </tr>                      
                    </thead>
                    <tbody style="background: white;">
                        <tr>
                            <td>CONSUMO CON OTRAS GARANTÍAS</td>
                            <td>1,00</td>
                            <td>82.320,00</td>
                            <td>60 meses</td>
                            <td>72 meses</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>CONSUMO A SOLA FIRMA</td>
                            <td>1,00</td>
                            <td>35.000,00</td>
                            <td>36 meses</td>
                            <td>36 meses</td>
                            <td>24%</td>
                        </tr>
                        <tr>
                            <td>CONSUMO CON 1 GARANTE PERSONAL</td>
                            <td>1,00</td>
                            <td>70.000,00</td>
                            <td>60 meses</td>
                            <td>60 meses</td>
                            <td>18%</td>
                        </tr>
                        <tr>
                            <td>CONSUMO CON 2 GARANTES PERSONALES</td>
                            <td>1,00</td>
                            <td>120.000,00</td>
                            <td>60 meses</td>
                            <td>72 meses</td>
                            <td>17%</td>
                        </tr>
                        <tr>
                            <td>CONSUMO DEBÍDAMENTE GARANTIZADO</td>
                            <td>10.000,00</td>
                            <td>adelante</td>
                            <td>60 meses</td>
                            <td>96 meses</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>MICROCRÉDITO DEBÍDAMENTE GARANTIZADO</td>
                            <td>10.000,00</td>
                            <td>adelante</td>
                            <td>120 meses</td>
                            <td>120 meses</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>MICROCRÉDITO CON OTRAS GARANTÍAS</td>
                            <td>1,00</td>
                            <td>82.320,00</td>
                            <td>72 meses</td>
                            <td>72 meses</td>
                            <td>17%</td>
                        </tr>
                        <tr>
                            <td>MICROCRÉDITO CON 1 GARANTE PERSONAL</td>
                            <td>1,00</td>
                            <td>70.000,00</td>
                            <td>60 meses</td>
                            <td>60 meses</td>
                            <td>19%</td>
                        </tr>
                        <tr>
                            <td>MICROCRÉDITO CON 2 GARANTES PERSONALES</td>
                            <td>1,00</td>
                            <td>100.00,00</td>
                            <td>72 meses</td>
                            <td>72 meses</td>
                            <td>18%</td>                            
                        </tr>
                    </tbody>
                </table>
                </div>              

            </article>
        </section>

    </div>
    <div class="fixed-wrap">
        <div id="fixed-2">
        </div>
    </div>
</div>











@endsection