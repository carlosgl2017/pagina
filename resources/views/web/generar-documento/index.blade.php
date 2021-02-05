@extends ('web.modulo')
@section ('contenido')

<div class="container">
	<div class="row d-flex">
		<div class="col-md-12 d-flex justify-content-center animated zoomIn">
			<h4 style="text-align:center">Generar solicitud de Reprogramación y/o Diferimiento</h4>
		</div>
	</div>

	<div class="margen animated zoomIn">
		<form class="formulario" id="formulario" method="post" action="{{url('web/generar-documento')}}">
			{{csrf_field()}}
			<div class="row border border-primary mb-4">

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 alert alert-success" style="background-image: linear-gradient(to top, #09203f 0%, #537895 100%); color:#FFFFFF;font-weight:bold;" role="alert">
					Verificar datos
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="nprestamo">Introduzca Nro de Prestamo</label>
						<input type="text" name="nprestamo" class="form-control" value="{{old('nprestamo')}}" required>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group" class="form-control">
						<label for="idtipord">Seleccione Opción</label>
						<select name="idtipord" class="form-control selectpicker" data-size="5" id="id_tcred" data-live-search="true" required>
							<option  value="" selected disabled>Seleccione una opción</option>
							@foreach($tipord as $rd)
							<option value="{{$rd->idtipord}}"> {{$rd->nombre}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<!--aqui-->
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					@if (count($errors)>0)
					<div class="alert alert-danger text-center">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" class="d-flex align-content-center flex-wrap">
					<div class="formulario__grupo formulario__grupo-btn-enviar">
						<button type="submit" class="formulario__btn">Generar Solicitud</button>
						<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
					</div>
				</div>

				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<p>"Con la solicitud generada puede apersonarse a nuestras oficinas".</p>
				</div>

			</div>
		</form>

	</div>

</div>


<div style="height: 150px; overflow: hidden; background: #f2f2f2"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
		<path d="M0.00,49.98 C149.99,150.00 275.11,1.48 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#4CAC54"></path>
	</svg></div>
@include('sweetalert::alert')
@endsection

@push('css')
<style>
	.margen {
		font-family: 'Roboto', sans-serif;
		background: #E5E5E5;
	}

	.formulario__label {
		display: block;
		font-weight: 700;
		padding: 10px;
		cursor: pointer;
	}

	.formulario__grupo-input {
		position: relative;
	}

	.formulario__input {
		width: 100%;
		background: #fff;
		border: 1px solid;
		border-radius: 3px;
		height: 45px;
		line-height: 45px;
		padding: 0 40px 0 10px;
		transition: .3s ease all;
	}

	.formulario__input:focus {
		border: 3px solid #85C43F;
		outline: none;
		box-shadow: 3px 0px 30px rgba(163, 163, 163, 0.4);
	}

	.formulario__input-error {
		font-size: 12px;
		margin-bottom: 0;
		display: none;
	}

	.formulario__input-error-activo {
		display: block;
	}

	.formulario__validacion-estado {
		position: absolute;
		right: 10px;
		bottom: 15px;
		z-index: 100;
		font-size: 16px;
		opacity: 0;
	}

	.formulario__checkbox {
		margin-right: 10px;
	}

	.formulario__grupo-terminos,
	.formulario__mensaje,
	.formulario__grupo-btn-enviar {
		grid-column: span 2;
	}

	.formulario__mensaje {
		height: 45px;
		line-height: 45px;
		background: #F66060;
		padding: 0 15px;
		border-radius: 3px;
		display: none;
	}

	.formulario__mensaje-activo {
		display: block;
	}

	.formulario__mensaje p {
		margin: 0;
	}

	.formulario__grupo-btn-enviar {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.formulario__btn {
		height: 45px;
		line-height: 45px;
		width: 30%;
		background: linear-gradient(to top, #09203f 0%, #537895 100%);
		color: #fff;
		font-weight: bold;
		border: none;
		border-radius: 3px;
		cursor: pointer;
		transition: .1s ease all;
	}

	.formulario__btn:hover {
		box-shadow: 3px 0px 30px rgba(163, 163, 163, 1);
	}

	.formulario__mensaje-exito {
		font-size: 14px;
		color: #119200;
		display: none;
	}

	.formulario__mensaje-exito-activo {
		display: block;
	}

	/* ----- -----  Estilos para Validacion ----- ----- */
	.formulario__grupo-correcto .formulario__validacion-estado {
		color: #1ed12d;
		opacity: 1;
	}

	.formulario__grupo-incorrecto .formulario__label {
		color: #bb2929;
	}

	.formulario__grupo-incorrecto .formulario__validacion-estado {
		color: #bb2929;
		opacity: 1;
	}

	.formulario__grupo-incorrecto .formulario__input {
		border: 3px solid #bb2929;
	}


	/* ----- -----  Mediaqueries ----- ----- */
	@media screen and (max-width: 800px) {
		.formulario {
			grid-template-columns: 1fr;
		}

		.formulario__grupo-terminos,
		.formulario__mensaje,
		.formulario__grupo-btn-enviar {
			grid-column: 1;
		}

		.formulario__btn {
			width: 100%;
		}
	}
</style>
@endpush
@push ('scripts')
<script>
	/* HIDEN BEGIN */
	function tipoidentificacionOnChange(sel) {
		if (sel.value == "01") {
			$("#mostrarci").show();
			$("#mostrarotro").hide();
		} else {
			$("#mostrarci").hide();
			$("#mostrarotro").show();
		}
	}
	/* HIDEN END */

	const formulario = document.getElementById('formulario');
	const inputs = document.querySelectorAll('#formulario input');

	const expresiones = {
		usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
		nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
		password: /^.{4,12}$/, // 4 a 12 digitos.
		correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
		ci: /^[a-zA-Z0-9\_\-]{4,16}$/, // 4 a 14 numeros.
		fecha_nac: /^\d{4}\-\d{2}\-\d{2}$/, // 4 a 14 numeros.
		// Letras, numeros, guion y guion_bajo
	}

	const campos = {
		ci: false,
		fecha_nac: false
	}

	const validarFormulario = (e) => {
		switch (e.target.name) {
			case "ci":
				validarCampo(expresiones.ci, e.target, 'ci');
				break;
			case "fecha_nac":
				validarCampo(expresiones.fecha_nac, e.target, 'fecha_nac');
				break;
		}
	}

	const validarCampo = (expresion, input, campo) => {
		if (expresion.test(input.value)) {
			document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
			document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
			document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
			document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
			document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
			campos[campo] = true;
		} else {
			document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
			document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
			document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
			document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
			document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
			campos[campo] = false;
		}
	}

	const validarPassword2 = () => {
		const inputPassword1 = document.getElementById('password');
		const inputPassword2 = document.getElementById('password2');

		if (inputPassword1.value !== inputPassword2.value) {
			document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
			document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
			document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
			document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
			document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
			campos['password'] = false;
		} else {
			document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
			document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
			document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
			document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
			document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
			campos['password'] = true;
		}
	}

	inputs.forEach((input) => {
		input.addEventListener('keyup', validarFormulario);
		input.addEventListener('blur', validarFormulario);
	});

	formulario.addEventListener('submit', (e) => {
		if (campos.ci && campos.fecha_nac) {
			document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
			setTimeout(() => {
				document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
			}, 5000);
		} else {
			document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		}
	});
</script>
@include('sweetalert::alert')
@endpush