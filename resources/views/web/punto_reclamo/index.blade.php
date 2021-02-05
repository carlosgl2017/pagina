@extends ('web.modulo')
@section ('contenido')
<!--- Start Fixed Background IMG Light -->
<div class="fixed-background">

	<div class="row light">


		<div class="col-md-12">
			<div class="os-animation" data-animation="fadeInUp">

				<div class="card text-justify">
					<img class="card-img-top" width="200" height="300" src="{{asset('web/img/punto.jpg')}}" alt="">
					<div class="card-body">
						<h4 class="heading text-center">SERVICIO DE ATENCIÓN DE PUNTO DE RECLAMO</h4>
						<article>

							<h3>PUNTO DE RECLAMO DE LA COOPERATIVA</h3>

							Disponible en nuestra oficina central, bajo el siguiente procedimiento:

							<ol>
								<li>El consumidor financiero debe apersonarse al PUNTO DE RECLAMO de la Cooperativa y exponer su reclamo en forma verbal o escrita, otorgando la información requerida por el personal de la Cooperativa.</li>
								<li>La Cooperativa debe:</li>
								<li>Recibir todo reclamo formulado por los consumidores financieros.</li>
								<li>Solicitar al reclamante documentación pertinente, cuando corresponda.</li>
								<li>Realizar el análisis de toda la documentación presentada por el reclamante.</li>
								<li>Emitir y registrar la respuesta del reclamo en el plazo establecido.</li>
								<li>Proporcionar la respuesta a los consumidores financieros.</li>
								<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta.</li>
							</ol>







							<h3>PÁGINA WEB DEL PUNTO DE RECLAMO DE LA COOPERATIVA</h3>
							
								Disponible en nuestra página web, bajo el siguiente procedimiento:
								<ol text-indent: 40px;> 
									<li>El consumidor financiero debe ingresar a nuestra página web y completar el formulario de presentación de reclamos <a class="nav-link" href="{{route('reclamo')}}">https://sanmartin.net.bo/web/punto_reclamo/reclamo</a></li>
									<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta; adicionalmente, la Cooperativa le envía la carta de respuesta mediante correo electrónico.</li>

								</ol>							

							<h3>DEFENSORÍA DEL CONSUMIDOR FINANCIERO - ASFI</h3>
							Disponible en todas las oficinas de la Autoridad de Supervisión del Sistema Financiero - ASFI en los nueve (9) departamentos, bajo el siguiente procedimiento:</br>
								<ol>
									<li>El consumidor financiero debe apersonarse a cualquier oficina de ASFI y exponer su reclamo en forma verbal y escrita.</li>
									<li>La Autoridad de Supervisión del Sistema Financiero – ASFI comunica a la Cooperativa el reclamo registrado.
									</li>
									<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta.</li>
								</ol>


							<h3>ASFI MÓVIL</h3>
							Disponible a través de la aplicación ASFI MÓVIL de la Autoridad de Supervisión del Sistema Financiero - ASFI, bajo el siguiente procedimiento:

							<ol>
								<li>El consumidor financiero debe descargar de Playstore la aplicación ASFI MÓVIL, y registrar su reclamo en el formulario disponible.</li>
								<li>La Autoridad de Supervisión del Sistema Financiero – ASFI comunica a la Cooperativa el reclamo registrado.</li>
								<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta.
								</li>
							</ol>
						</article>



					</div>
				</div>

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

<div style="height: 150px; overflow: hidden; background: #f2f2f2"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
		<path d="M0.00,49.98 C149.99,150.00 275.11,1.48 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#4CAC54"></path>
	</svg></div>


@endsection