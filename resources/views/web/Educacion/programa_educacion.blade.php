@extends ('web.modulo')
@section ('contenido')
<!--- Start Education Section -->
<div id="skills" class="offset">

    <!--- Start Jumbotron -->
    <div class="jumbotron">
        <div class="narrow">

            <div class="col-12 os-animation" data-animation="fadeInUp">
                <h3 class="heading">Educación y Capacitacion Financiera a Nuestros Socios(as)</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="os-animation" data-animation="fadeInUp">
                <div class="row text-center">

                 <div class="card text-justify">
                    <img class="card-img-top" src="{{asset('web/img/educacion/programa.jpg')}}" alt="">
                 
                </div>

            </div>
            <!--- End of Row -->
        </div>
        <!--- End of Animation -->

        <div class="col-12 os-animation" data-animation="fadeInUp">
            <h3 class="heading">Programa de educación Financiera - gestión 2019</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="os-animation" data-animation="fadeInUp">
            <div class="row text-center">

               <iframe width="100%" height="900" src="{{asset('recursos/educacion_financiera/progef12019.pdf')}}" frameborder="0"></iframe>

           </div>
           <!--- End of Row -->
       </div>
       <!--- End of Animation -->


        <div class="col-12 os-animation" data-animation="fadeInUp">
            <h3 class="heading">Programa de educación Financiera(Subprograma de educación) - gestión 2019</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="os-animation" data-animation="fadeInUp">
            <div class="row text-center">

               <iframe width="100%" height="900" src="{{asset('recursos/educacion_financiera/progef12018.pdf')}}" frameborder="0"></iframe>

           </div>
           <!--- End of Row -->
       </div>
       <!--- End of Animation -->

   </div>
   <!--- End Narrow -->
</div>
<!--- End Jumbotron -->

</div>
<!--- End of Skills Section -->
@endsection