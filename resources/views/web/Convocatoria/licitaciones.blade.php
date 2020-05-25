@extends ('web.modulo')
@section ('contenido')
<!--- Start Education Section -->
<div id="skills" class="offset">

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="narrow">

			<div class="col-12 os-animation" data-animation="fadeInUp">
				<h3 class="heading">
					Invitación Pública Provisión De Productos Para Canastón Navideño
				</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="os-animation" data-animation="fadeInUp">
				<div class="row text-center">

					<iframe width="100%" height="900" src="{{asset('recursos/convocatoria/canaston2019.pdf')}}" frameborder="0"></iframe>

				</div>
				<!--- End of Row -->
			</div>
			<!--- End of Animation -->


			<div class="col-12 os-animation" data-animation="fadeInUp">
			<h3 class="heading">LICITACIÓN PÚBLICA REMODELACIÓN DEL EDIFICIO DE LA COOPERATIVA DE CALLE TOPATER Nº 5</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="os-animation" data-animation="fadeInUp">
				<div class="row text-center">

					<iframe width="100%" height="900" src="{{asset('recursos/convocatoria/remodelacion.pdf')}}" frameborder="0"></iframe>

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