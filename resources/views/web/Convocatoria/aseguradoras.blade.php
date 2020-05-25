@extends ('web.modulo')
@section ('contenido')
<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">
	<div class="row light">		
			<div class="narrow">
			<div class="jumbotron">
				<div class="col-12 os-animation" data-animation="fadeInUp">
					<h3 class="heading">
						Resultado de la Licitación Pública para contratación del seguro colectivo de desgravamen hipotecario n° 002/2018
					</h3>
					<div class="heading-underline"></div>
				</div>

				<div class="os-animation" data-animation="fadeInUp">
					<div class="row text-center">

						<iframe width="100%" height="900" src="{{asset('recursos/convocatoria/resultAnx3.pdf')}}" frameborder="0"></iframe>

					</div>
					<!--- End of Row -->
				</div>
				<!--- End of Animation -->


				<div class="col-12 os-animation" data-animation="fadeInUp">
					<h3 class="heading">
						Aclaración de consultas - Gestión 2018
					</h3>
					<div class="heading-underline"></div>
				</div>

				<div class="os-animation" data-animation="fadeInUp">
					<div class="row text-center">

						<iframe width="100%" height="900" src="{{asset('recursos/convocatoria/aclaracionConsulta2018.pdf')}}" frameborder="0"></iframe>

					</div>
					<!--- End of Row -->
				</div>
				<!--- End of Animation -->
			</div>
		</div>
	</div>
	<!--- End of Row Light -->

	<div class="fixed-wrap">
		<div id="fixed-2">
		</div>
	</div>

</div>
<!--- End Fixed Background IMG Light -->
@endsection