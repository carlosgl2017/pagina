@extends ('web.modulo')
@section ('contenido')
<!--- Start Jumbotron -->
<div class="jumbotron">
    <div class="narrow">
        <div class="os-animation" data-animation="fadeInUp">
            <h3 class="heading">Comunicados y Convocatorias Pasadas</h3>
            <div class="heading-underline"></div>
        </div>
        <!--- Start Pricing Asambleas -->
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-lg-12">
                <div class="os-animation" data-animation="fadeInUp">
                    <div class="pricing-column text-center">
                        <h3>Asamblea General Ordinaria</h3>
                        <p>Sábado 31 de marzo de 2018, hrs. 13:30</p>
                        <div class="pricing-features">
                           <iframe width="100%" height="900" src="{{asset('recursos/convocatoria/convocatoriaOrdinaria.pdf')}}" frameborder="0"></iframe>
                       </div>                      
                   </div>
               </div>
           </div>  
       </div>
       <!--- End Convocatoria Columns -->
       <div class="row justify-content-md-center">
         <div class="col-md-6 col-lg-12">
            <div class="os-animation" data-animation="fadeInUp">
                <div class="pricing-column text-center">
                    <h3>Tercera convocatoria a elecciones para la renovación total de los miembros del consejo de Administración, Consejo De Vigilancia, Comité De Créditos, Comité De Educación y Tribunal De Honor de la Cooperativa De Ahorro Y Crédito Societaria “san martín” R.L.</h3>
                    <p>Potosí de marzo de 2018</p>
                    <div class="pricing-features">
                       <iframe width="100%" height="900" src="{{asset('recursos/convocatoria/3raConvocatoria.pdf')}}" frameborder="0"></iframe>
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