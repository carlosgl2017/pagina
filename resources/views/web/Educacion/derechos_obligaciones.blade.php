@extends ('web.modulo')
@section ('contenido')
<!--- Start Jumbotron -->
<div class="jumbotron">
    <div class="narrow">

        <div class="os-animation" data-animation="fadeInUp">
            <h3 class="heading">Derechos y Obligaciones</h3>
            <div class="heading-underline"></div>
        </div>

        <!--- Start Pricing Columns -->
        <div class="row justify-content-md-center">

            <div class="col-md-6 col-lg-12">
                <div class="os-animation" data-animation="fadeInLeft">
                    <div class="pricing-column text-center">                
                        <iframe width="100%" height="900" src="{{asset('recursos/educacion_financiera/derechosObligaciones.pdf')}}" frameborder="0"></iframe>
                    </div>
                </div>
            </div>           

        </div>
        <!--- End Pricing Columns -->

    </div>
    <!--- End Narrow -->
</div>
<!--- End Jumbotron -->
@endsection