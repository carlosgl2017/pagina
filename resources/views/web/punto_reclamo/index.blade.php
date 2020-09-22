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

			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="form-group" class="form-control">
				<label for="tipo_reclamo"> Seleccionar el tipo de reclamo</label>
					<select name="tipo_reclamo"  class="form-control selectpicker" data-size="5" id="tipo_reclamo" data-live-search="true" required>						
						<option value="CANJE DE MATERIAL MONETARIO">CANJE MATERIAL MONETARIO</option>
						<option value="ATENCION AL CLIENTE">ATENCION AL CLIENTE</option>
						<option value="CHEQUE DE GERENCIA">CHEQUE DE GERENCIA</option>
						<option value="DERECHOS DE LOS CONSUMIDORES FINANCIEROS">DERECHOS DE LOS CONSUMIDORES FINANCIEROS</option>
						<option value="ENTREGA DE BILLETE FALSO">ENTREGA DE BILLETE FALSO</option>
						<option value="FALLAS DEL SISTEMA">FALLAS DEL SISTEMA</option>
						<option value="FRACCIONAMIENTO DE MATERIAL MONETARIO">FRACCIONAMIENTO DE MATERIAL MONETARIO</option>
						<option value="MALA ATENCION EN VENTANILLA  DE CAJAS">MALA ATENCION EN VENTANILLA  DE CAJAS</option>
						<option value="MALA INFORMACION">MALA INFORMACION</option>
						<option value="PAGO DE SERVICIOS Y OTROS">PAGO DE SERVICIOS Y OTROS</option>
						<option value="PRACTICAS DISCRIMINATORIAS Y ABUSIVAS">PRACTICAS DISCRIMINATORIAS Y ABUSIVAS</option>
						<option value="PUNTO DE RECLAMO">PUNTO DE RECLAMO</option>
						<option value="RESERVA Y CONFIDENCIALIDAD DE LA INFORMACIÓN">RESERVA Y CONFIDENCIALIDAD DE LA INFORMACIÓN</option>

						<option value="RESTITUCION DE DERECHOS ">RESTITUCIÓN DE DERECHOS</option>
						<option value="TIEMPO DE ESPERA MÁXIMO EN CAJAS">TIEMPO DE ESPERA MÁXIMO EN CAJAS</option>

						<option value="TRANSACCIONES EN VENTANILLA/BOVEDAS">TRANSACCIONES EN VENTANILLA/BOVEDAS</option>
						
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
				<label for="tipo"> Expedido en </label>
					<select name="exp"  class="form-control selectpicker" data-size="5" id="tipo_reclamo" data-live-search="true" required>						
						<option value="PT"> PT </option>				
						<option value="LP"> LP </option>
						<option value="CB"> CB</option>
						<option value="SC"> SC</option>
						<option value="BN"> BN</option>
						<option value="PA"> PA</option>
						<option value="TJ"> TJ</option>
						<option value="CH"> CH</option>
						<option value="OR"> OR</option>
					</select>
				</div>
			</div>

		
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group" class="form-control">
				<label for="tipo"> Seleccionar Tipo de Reclamante</label>
					<select name="tipo"  class="form-control selectpicker" data-size="5" id="tipo_reclamo" data-live-search="true" required>						
						<option value="Persona (Persona Natural)"> Persona (Persona Natural) </option>				
						<option value="Empresa (Persona Jurídica)"> Empresa (Persona Jurídica) </option>
						<option value="Apoderado de una Persona Natural"> Apoderado de una Persona Natural</option>
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
					<label for="direccion">Dirección (Calle  y Zona)</label>
					<input type="text" name="direccion" class="form-control" value="{{old('direccion')}}"  required>
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

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group text-center">
				<label for="descripcion">Captcha</label>
					{!! Recaptcha::Render() !!}
				</div>
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