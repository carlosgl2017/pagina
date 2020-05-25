@extends ('layouts.template')
@section ('corp')

<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
      <li class="breadcrumb-item">Principal</li>
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
  </ol>


  <div class="container-fluid">
    <!-- Ejemplo de tabla Listado -->
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Categorías
            <a href="{{url('/remate/create')}}">
           <button type="button" class="btn btn-secondary">                
               
                <i class="icon-plus"></i>&nbsp;Nuevo
           </button>  </a>                     
        </div>
        <div class="card-body">
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-control col-md-3" id="opcion" name="opcion">
                          <option value="nombre">Nombre</option>
                          <option value="descripcion">Descripción</option>
                      </select>
                      <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                  </div>
              </div>
          </div>
          <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
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
                  <td>{{$re->id_remate}} </td>
                  <td>{{$re->lugar}} </td>
                  <td>{{$re->juzgado}} </td>
                  <td>{{$re->fecha_subasta}} </td>
                  <td>{{$re->hora}}</td>
                  <td>{{$re->descripcion_bien}} </td>
                  <td>{{$re->monto}}</td>
                  <td>{{$re->nombre_martillero}} </td>
                  <td>{{$re->nombre_departamento}} </td>
                  <td>{{$re->condicion}} </td>
                  

                  <td> <a href="{{url('/remate/'.$re->id_remate.'/edit')}}" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
        <i class="fa fa-pencil"></i> 
      </a>
      <a href="" data-target="#modal-delete-{{$re->id_remate}}" rel="tooltip" title="Eliminar" data-toggle="modal" class="btn btn-danger btn-simple btn-xs">
         <i class="fa fa-times"></i> 
       </a>
    </td>
            

          </tr>
           @include('remate.modal')
          @endforeach
      </tbody>

  </table>
  <nav>
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#">Ant</a>
        </li>                           
        <li class="page-item">
            <a class="page-link" href="#">Sig</a>
        </li>
    </ul>
</nav>
</div>
</div>
<!-- Fin ejemplo de tabla Listado -->
</div>
</main>
@endsection