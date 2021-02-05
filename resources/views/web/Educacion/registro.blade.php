@extends ('web.modulo')
@section ('contenido')

<div class="container">
  <div class="row d-flex">
    <div class="col-md-12 d-flex justify-content-center">
      <h1>Datos generales</h1>
    </div>
  </div>


  <div class="box-body">
    <table id="o_credito" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nro Socio</th>
          <th>Nombre</th>
          <th>Ci</th>
          <!--<th>Fecha Nacimiento</th>  -->
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($socios as $so)
        <tr>
          <td>{{$so->nro_socio}}</td>
          <td>{{$so->nombre}}</td>
          <td>{{$so->ci}}</td>
          <!-- <td>{{$so->fecha_nac}}</td>    -->
          <td>
            <a href="" data-target="#modal-delete-{{$so->nro_socio}}" rel="tooltip" title="Inscribirse" data-toggle="modal" class="btn btn-success btn-simple ">
              <i></i>Inscribirse</a>
          </td>
        </tr>
        @include('web.Educacion.modal')
        @endforeach
      </tbody>
    </table>
    <!--  Suma del total-->
  </div>
</div>
@endsection