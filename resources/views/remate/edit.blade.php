 @extends ('layouts.template')
 @section ('corp')

<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Principal</li>
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active">Edit</li>
  </ol>

  <div class="container-fluid">
    <!-- Ejemplo de tabla Listado -->
    <div class="card">
      <div class="card-header">
        <h4>Editar Remate</h4>                    
      </div>
      <div class="card-body">
        <!--contenido inicio-->

        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           @if (count($errors)>0)
           <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>


      <form method="post" action="{{url('/remate/'.$remate->id_remate.'/edit')}}">
  {{csrf_field()}}
  <div class="row">

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="lugar">Lugar</label>
      <input type="text" name="lugar" class="form-control" value="{{old('lugar',$remate->lugar)}}">
    </div>
  </div>

  

 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="juzgado">Juzgado</label>
    <input type="text" name="juzgado" class="form-control" value="{{old('juzgado',$remate->juzgado)}}">
  </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="fecha_subasta">Fecha Subasta</label>
    <input type="date" name="fecha_subasta" class="form-control" value="{{old('fecha_subasta',$remate->fecha_subasta)}}">
  </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="hora">Hora</label>
    <input type="time" name="hora" class="form-control" value="{{old('hora',$remate->hora)}}">
  </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="descripcion_bien">Descripcion Bien</label>
    <input type="text" name="descripcion_bien" class="form-control" value="{{old('descripcion_bien',$remate->descripcion_bien)}}">
  </div>
</div>




<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="monto">Monto</label>
    <input type="number" step="any" name="monto" class="form-control" value="{{old('monto',$remate->monto)}}">
  </div>
</div>


<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
    <label for="nombre_martillero">Nombre martillero</label>
    <input type="text" name="nombre_martillero" class="form-control" value="{{old('nombre_martillero',$remate->nombre_martillero)}}">
  </div>
</div>


<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
 <div class="form-group">
   <label>Departamento</label>
   <select name="id_departamento" class="form-control selectpicker" data-size="5" id="id_departamento" data-live-search="true">
     @foreach ($departamentos as $de)
     @if($de->id_departamento==$remate->id_departamento)
     <option value="{{$de->id_departamento}}" selected>{{$de->nombre_departamento}}</option>
     @else
     <option value="{{$de->id_departamento}}">{{$de->nombre_departamento}}</option>
     @endif
     @endforeach
   </select> 
 </div>
</div>


 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
   <div class="form-group">
     <button class="btn btn-primary" type="submit">Guardar</button>
     <a href="{{url('/remate')}}" class="btn btn-default"> cancelar</a>
     <button class="btn btn-danger" type="reset">Restablecer</button>
   </div>
 </div>
</div>
</form>
<!--Contenido fin-->    
</div>
</div>
<!-- Fin ejemplo de tabla Listado -->
</div>
</main>



@push ('scripts')
<script>
  $('#liAdmin').addClass("treeview active");
  $('#liAdmin_persona').addClass("active");
</script>
@endpush
@endsection
