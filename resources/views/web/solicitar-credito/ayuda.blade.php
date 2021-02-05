@extends ('web.modulo')
@section ('contenido')
<!--- Start Jumbotron -->
<div class="jumbotron">
    <div class="narrow">
        <div class="os-animation" data-animation="fadeInUp">
            <h3 class="heading">Solicitar crédito en línea</h3>
            <div class="heading-underline"></div>
        </div>
        <!--- Start Pricing Asambleas -->
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-lg-12">
                <div class="os-animation" data-animation="fadeInUp">
                    <div class="pricing-column text-center">                  
                        <div class="pricing-features">
                           <iframe width="100%" height="900" src="{{asset('recursos/solicitud/solicitud_credito.pdf')}}" frameborder="0"></iframe>
                       </div>                      
                   </div>
               </div>
           </div>  
       </div>

</div>
<!--- End Narrow -->
</div>
<!--- End Jumbotron -->
@endsection