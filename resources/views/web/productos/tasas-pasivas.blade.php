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
                <div class="d-flex justify-content-center">
                    <table border="1" style="text-align: center;" >
                        <thead>
                            <tr style="background-image: linear-gradient(to top, #09203f 0%, #537895 100%);">
                                <td colspan="4" class="text-center font-weight-bold" style="color:white;">TASAS PASIVAS</td>
                            </tr>
                            <tr style="#ebf0f1">
                                <th class="text-center" rowspan="2">TIPO DE AHORRO</th>
                                <th class="text-center" rowspan="2">DÍAS</th>
                                <th class="text-center" colspan="2">TASA PASIVA (% ANUAL)</th>
                            </tr>
                            <tr style="#ebf0f1">
                                <th class="text-center">Bs.</th>
                                <th class="text-center">$us.</th>

                            </tr>
                        </thead>
                        <tbody style="background:white;">
                            <tr>
                                <td>Caja de Ahorro</td>
                                <td></td>
                                <td>3.00</td>
                                <td>0.50</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>30</td>
                                <td>3.01</td>
                                <td>0.51</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>60</td>
                                <td>3.02</td>
                                <td>0.52</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>90</td>
                                <td>3.03</td>
                                <td>0.53</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>180</td>
                                <td>3.04</td>
                                <td>0.54</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>360</td>
                                <td>5.00</td>
                                <td>0.70</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>720</td>
                                <td>6.00</td>
                                <td>0.90</td>
                            </tr>
                            <tr>
                                <td>DPF</td>
                                <td>1080</td>
                                <td>7.00</td>
                                <td>1.00</td>
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