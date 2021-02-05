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
                        <!-- <h3>En este Día tan especial su Cooperativa, les desea a todas las Mamás <strong>¡Felíz Día de Madre!</strong></h3>-->
                        <div class="pricing-features">

                            <img class="img-fluid" src="{{asset('web/img/nuevoproducto.png')}}"></a>
                            <!--<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xAOy4b2BBME" allowfullscreen></iframe>
						</div>-->
                        </div>

                        <div>

                            <div class="os-animation" data-animation="fadeInUp">
                                <h3 class="heading">Solicitar crédito</h3>
                                <div class="heading-underline"></div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <a class="dropdown-item" href="http://181.188.171.131:8005"><button type="button" class="btn btn-success">Solicitar Crédito</button></a>
                                <a class="dropdown-item" href="{{route('ayuda')}}"><button type="button" class="btn btn-success">Ver Tutorial</button></a>
                            </div>

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