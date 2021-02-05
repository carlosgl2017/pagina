@extends ('web.modulo')
@section ('contenido')

<div class="container">
	<div class="row d-flex">
		<div class="col-md-12 d-flex justify-content-center">
			<h1>Punto de Reclamo</h1>
		</div>
	</div>
	<form method="post" action="{{url('web/punto_reclamo')}}">
		{{csrf_field()}}
		<div class="row border border-success mb-4">


			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group" class="form-control">
					<label for="id_tipo_reclamo">Seleccionar Tipo de Reclamo</label>
					<select name="id_tipo_reclamo" class="form-control selectpicker" data-size="5" id="id_tipo_reclamo" data-live-search="true">
						@foreach($tipo_reclamo as $tipo)
						<option value="{{$tipo->id_tipo_reclamo}}"> {{$tipo->tipo_reclamo}}</option>
						@endforeach
					</select>
				</div>
			</div>



			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="name">Nombres</label>
					<input type="text" name="name" class="form-control" value="{{old('name')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="ci">Cédula de Identidad</label>
					<input type="text" name="ci" class="form-control" value="{{old('ci')}}" required>
				</div>
			</div>

		
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group" class="form-control">
					<label for="id_ext">Expedido en:</label>
					<select name="id_ext" class="form-control selectpicker" data-size="5" id="id_ext" data-live-search="true">
						@foreach($ci_extension as $exp)
						<option value="{{$exp->id_ext}}"> {{$exp->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group" class="form-control">
					<label for="id_tipo_reclamante">Seleccionar tipo de reclamante </label>
					<select name="id_tipo_reclamante" class="form-control selectpicker" data-size="5" id="id_tipo_reclamante" data-live-search="true">
						@foreach($tipo_reclamante as $tipo_re)
						<option value="{{$tipo_re->id_tipo_reclamante}}"> {{$tipo_re->tipo_reclamante}}</option>
						@endforeach
					</select>
				</div>
			</div>


			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="representante">Nombre del representante legal o apoderado</label>
					<input type="text" name="representante" class="form-control" value="{{old('representante')}}">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="numero_testimonio">Número de testimonio poder</label>
					<input type="text" name="numero_testimonio" class="form-control" value="{{old('numero_testimonio')}}">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="direccion">Dirección (Calle y Zona)</label>
					<input type="text" name="direccion" class="form-control" value="{{old('direccion')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" value="{{old('email')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="telefono">Celular</label>
					<input type="number" name="telefono" class="form-control" value="{{old('telefono')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="fecha">Fecha del hecho que motiva el reclamo</label>
					<input type="date" name="fecha" class="form-control" value="{{old('fecha')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="monto_comprometido">Monto comprometido</label>
					<input type="number" name="monto_comprometido" class="form-control" value="{{old('monto_comprometido')}}" required>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="departamento">Origen del reclamo (Departamento Ciudad)</label>
					<input type="text" name="departamento" class="form-control" value="{{old('departamento')}}">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="descripcion">Descripción del reclamo y/o solicitud del reclamante</label>
					<textarea type="text" name="descripcion" class="form-control" value="{{old('descripcion')}}">

					</textarea>
				</div>
			</div>

			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<p>"En un plazo de cinco (5) días hábiles administrativos a partir del día de mañana, usted puede apersonarse por la Entidad Financiera a recoger su carta de respuesta".</p>
			</div>


			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group text-center">
					<label for="descripcion">Captcha</label>
					<div align="center">
						{!! Recaptcha::Render() !!}
					</div>
				</div>
			</div>

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

			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group text-center">
					<button class="btn btn-success" type="submit">Enviar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>

		</div>
	</form>
</div>


@endsection