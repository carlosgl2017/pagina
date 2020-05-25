@extends ('layouts.template')
@section ('corp')

<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Principal</li>
    <li class="breadcrumb-item"><a href="#">Admin</a></li>
    <li class="breadcrumb-item active">Create</li>
  </ol>


  <div class="container-fluid">
    <!-- Ejemplo de tabla Listado -->
    <div class="card">
      <div class="card-header">
        <h4>Registrar Remate</h4>                    
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


      <form method="post" action="{{url('/remate')}}">
        {{csrf_field()}}
        <div class="row">   
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
             <label for="lugar"> (*) Lugar</label>
             <input type="text"  name="lugar" class="form-control" required>
           </div>
         </div>  


         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="form-group">
           <label for="nombre"> (*) Juzgado</label>
           <input type="text" name="juzgado" class="form-control" value="{{old('juzgado')}}" required>
         </div>
       </div>

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
         <label for="fecha_subasta"> (*) Fecha Subasta</label>
         <input type="date" name="fecha_subasta" class="form-control" value="{{old('fecha_subasta')}}" required>
       </div>
     </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <div class="form-group">
       <label for="hora">(*) Hora Subasta</label>
       <input type="time" name="hora" class="form-control" value="{{old('hora')}}">
     </div>
   </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
     <label for="descripcion_bien">Descripción</label>
     <input type="text" name="descripcion_bien" class="form-control" value="{{old('descripcion_bien')}}">
   </div>
 </div>

 <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
   <label for="monto">(*) Monto</label>
   <input type="number" step="any" name="monto" class="form-control" value="{{old('monto')}}" required>
 </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
   <label for="nombre_martillero">(*) Nombre Martillero</label>
   <input type="text" name="nombre_martillero" class="form-control" value="{{old('nombre_martillero')}}" required>
 </div>
</div>


<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
 <div class="form-group" class="form-control">
   <label for="id_departamento"> (*) Departamento</label>
   <select name="id_departamento"  class="form-control selectpicker" data-size="5" id="id_departamento" data-live-search="true" required>
     @foreach($departamentos as $de)
     <option value="{{$de->id_departamento}}"> {{$de->nombre_departamento}}</option>
     @endforeach
   </select>
 </div>
</div>



<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
  <div class="form-group">
   <button class="btn btn-primary" type="submit">Guardar</button>
   <a href="{{url('/remate')}}" class="btn btn-danger">Cancelar</a>
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
<script type="text/javascript">
  $('#liAdmin').addClass("treeview active");
  $('#liAdmin_persona').addClass("active");
</script>
@endpush

@endsection
