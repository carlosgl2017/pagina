@extends ('web.modulo')
@section ('contenido')
<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">
	<div class="row light">
		<div class="narrow">
			<div class="jumbotron">
				<div class="col-12 os-animation" data-animation="fadeInUp">
					<h3 class="heading">
						Requerimiento de personal
					</h3>
					<div class="heading-underline"></div>

				</div>


				<div class="row justify-content-md-center">
					<div class="col-md-6 col-lg-12">
							<div class="pricing-column text-center">
								<div class="pricing-features">
									<iframe width="100%" height="900" src="{{asset('recursos/convocatoria/convocatoriarecuperador.pdf')}}" frameborder="0"></iframe>
								</div>
							</div>
						
					</div>
				</div>

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