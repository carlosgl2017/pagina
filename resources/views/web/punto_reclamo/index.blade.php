@extends ('web.modulo')
@section ('contenido')
<!--- Start Fixed Background IMG Light -->
<style>
	section {
		background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
	}

	article {
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
	}

	ol {
		margin-left: 50px;
		margin-right: 50px;
	}
</style>
<div class="fixed-background">
	<div class="container">
		<div class="row animated fadeInLeft">
			<img class="card-img-top" width="100" height="200" src="{{asset('web/img/punto.jpg')}}" alt="">
		</div>
		<div>
		</div>

		<div class="row">
			<section>
				<article>

					<div class="border border-success mb-3 ">
						<div class="alert alert-secondary" role="alert" style="background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten; font-weight:bold;">
							PUNTO DE RECLAMO DE LA COOPERATIVA
						</div>
						<div class="container">
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

							<div class="alert alert-secondary" role="alert" style="background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten; font-weight:bold;">
								PÁGINA WEB DEL PUNTO DE RECLAMO DE LA COOPERATIVA
							</div>
							Disponible en nuestra página web, bajo el siguiente procedimiento:
							<ol text-indent: 40px;>
								<li>El consumidor financiero debe ingresar a nuestra página web y completar el formulario de presentación de reclamos <a class="nav-link" href="{{route('reclamo')}}">https://sanmartin.net.bo/web/punto_reclamo/reclamo</a></li>
								<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta; adicionalmente, la Cooperativa le envía la carta de respuesta mediante correo electrónico.</li>

							</ol>

							<div class="alert alert-secondary" role="alert" style="background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten; font-weight:bold;">
								DEFENSORÍA DEL CONSUMIDOR FINANCIERO - ASFI
							</div>
							Disponible en todas las oficinas de la Autoridad de Supervisión del Sistema Financiero - ASFI en los nueve (9) departamentos, bajo el siguiente procedimiento:</br>
							<ol>
								<li>El consumidor financiero debe apersonarse a cualquier oficina de ASFI y exponer su reclamo en forma verbal y escrita.</li>
								<li>La Autoridad de Supervisión del Sistema Financiero – ASFI comunica a la Cooperativa el reclamo registrado.
								</li>
								<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta.</li>
							</ol>



							<div class="alert alert-secondary" role="alert" style="background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten; font-weight:bold;">
								ASFI MÓVIL
							</div>
							Disponible a través de la aplicación ASFI MÓVIL de la Autoridad de Supervisión del Sistema Financiero - ASFI, bajo el siguiente procedimiento:

							<ol>
								<li>El consumidor financiero debe descargar de Playstore la aplicación ASFI MÓVIL, y registrar su reclamo en el formulario disponible.</li>
								<li>La Autoridad de Supervisión del Sistema Financiero – ASFI comunica a la Cooperativa el reclamo registrado.</li>
								<li>En el plazo de cinco (5) días hábiles administrativos a partir del día siguiente del registro de reclamo, el reclamante puede apersonarse por la Cooperativa a recoger su carta de respuesta.
								</li>
							</ol>


						</div>
					</div>













				</article>
			</section>

		</div>
	</div>

	<div class="fixed-wrap">
		<div id="fixed-2">
		</div>
	</div>

</div>
<!--- End Fixed Background IMG Light -->
@endsection