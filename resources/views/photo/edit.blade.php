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
        <h4>Añadir  Fotografias</h4>                    
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


      <form method="post" action="{{url('/photo/'.$id.'/edit')}}">
        {{csrf_field()}}
        <div class="row">

         <div class="col-12">
          <div class="form-group">
            <label > (*) Arrastra las imagenes</label>
            <div class="dropzone">    
            </div>
          </div>
        </div>
      </div>

      <div class="row">

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



@push('stylesheets')
<link href="{{asset('template/css/dropzone.min.css')}}" rel="stylesheet">
@endpush

@push ('scripts')

<script src="{{asset('/template/js/dropzone.min.js')}}"></script>
<script>
  new Dropzone('.dropzone',{
   url:'/public/photo/{{$id}}/edit',
   acceptedFiles:'image/*',
   paramName:'photo',
   headers:{
    'X-CSRF-TOKEN':'{{csrf_token()}}'
   },
   dictDefaultMessage:'Arrastra las imagenes aqui para subirlas'
 });
  Dropzone.autoDiscover = false;
</script>
@endpush
@endsection
