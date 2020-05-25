@extends ('web.modulo')
@section ('contenido')
<!--- Start Education Section -->
<div id="skills" class="offset">
	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="narrow">

			<div class="col-12 os-animation" data-animation="fadeInUp">
				<h3 class="heading">Remates Publicados</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="os-animation" data-animation="fadeInUp">
				<div class="row text-center">
					<div class="card text-justify">
						
						<div class="card-body">
							
						<table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Lugar</th>
                    <th>Juzgado</th>
                    <th>Fecha Subasta</th>
                    <th>Hora</th>
                    <th>Descripción Bien</th>
                    <th>Monto</th>
                    <th>Nombre Martillero</th>
                    <th>Departamento</th>
                    <th>Condicion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($remates as $re)
               <tr>   
                  <td>{{$re->lugar}} </td>
                  <td>{{$re->juzgado}} </td>
                  <td>{{$re->fecha_subasta}} </td>
                  <td>{{$re->hora}}</td>
                  <td>{{$re->descripcion_bien}} </td>
                  <td>{{$re->monto}}</td>
                  <td>{{$re->nombre_martillero}} </td>
                  <td>{{$re->nombre_departamento}} </td>
                  <td>{{$re->condicion}} </td>  
                  <td> 
  				  </td>          
          </tr>
          @endforeach
      </tbody>

  </table>

						</div>
					</div>
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