@extends ('web.modulo')
@section ('contenido')
<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">

	<div class="row light">

		<div class="col-12 os-animation" data-animation="fadeInUp">
			<h3 class="heading">Multimedia</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="col-md-12">
			<div class="os-animation" data-animation="fadeInUp">
				<div id="team-slider" class="owl-carousel owl-theme">

					<div class="card text-justify">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sREgMa7rjlg?v=sREgMa7rjlg&feature=youtu.be" allowfullscreen></iframe>
						</div>
						<div class="card-body" >
							<h4>Lavado de Dinero</h4>
						</div>
					</div>  

					<div class="card text-justify">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kA9fXcUaBdY?v=kA9fXcUaBdY&feature=youtu.be" allowfullscreen></iframe>
						</div>
						<div class="card-body" >
							<h4>Política Conozca a su Cliente</h4>
						</div>
					</div>  

					<div class="card text-justify">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-X_6Cf-yTFM?v=-X_6Cf-yTFM&feature=youtu.be" allowfullscreen></iframe>
						</div>
						<div class="card-body" >
							<h4>Gestion de Riesgos</h4>
						</div>
					</div>  

					<div class="card text-justify">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yKvPX9aHhx8" allowfullscreen></iframe>
						</div>
						<div class="card-body" >
							<h4>Persona expuesta Politicamente</h4>
						</div>
					</div>                         

				</div>
				<!--- End Team Slider -->
			</div>
			<!--- End Animation -->
		</div>
		<!--- End col-md-12 -->

	</div>
	<!--- End of Row Light -->

	<div class="fixed-wrap">
		<div id="fixed-2">
		</div>
	</div>

</div>
<!--- End Fixed Background IMG Light -->

@endsection