@extends ('web.modulo')
@section ('contenido')

<div class="contenido-electoral">
    <div class="electoral">

        <img class="img-fluid" src="{{asset('web/img/educacion/oficial.png')}}">
    </div>
</div>
<div style="height: 150px; overflow: hidden; background: #f2f2f2"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 275.11,1.48 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#4CAC54"></path>
    </svg></div>
@include('sweetalert::alert')
@endsection