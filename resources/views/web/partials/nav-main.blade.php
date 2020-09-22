<!--- Navigation -->
<hr style="border-top: 3px solid #F5BB00;margin: 0">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="main_navbar">
   <a class="navbar-brand" href="#"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li @click="menu=100" class="nav-item active">
            <a class="nav-link" href="{{route('main')}}">Inicio</a><span class="hover"></span>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#features" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Institucional
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li class="nav-item">
                  <!--<a class="dropdown-item" href="{{ route('mision_vision') }}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Misión y Visión</a>-->
               </li>
               <li>
                  <a class="dropdown-item" href="{{route('organigrama')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Organigrama Administrativo</a>
                  <span class="hover"></span>
               </li>
            </ul>
         </li>
         <span class="hover"></span>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Gobierno Corporativo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="{{route('electoral')}}">Comite Electoral</a></li>
               <li class="nav-item dropdown">
                  <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Consejo de Administración
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                     <li><a class="dropdown-item" href="{{route('directorio')}}">Directorio</a></li>
                     <li><a class="dropdown-item" href="{{route('prevension')}}">Comité de Gestión de Prevensión LGI/T y DP</a>
                     </li>
                     <li><a class="dropdown-item" href="{{route('riesgos')}}">Comité de Gestión de Riesgos</a></li>
                     <li><a class="dropdown-item" href="{{route('tecnologia')}}">Comité de Tecnologia de la Información</a></li>
                  </ul>
               </li>

               <li class="nav-item dropdown">
                  <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Comité de Vigilancia
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                     <li><a class="dropdown-item" href="{{route('auditoria')}}">Auditoria Interna</a></li>
                  </ul>
               </li>
            </ul>
         </li>

         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Servicios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="http://181.188.171.131:8005">Solicitar Crédito</a></li>
               <li><a class="dropdown-item" href="{{route('otorgacion_creditos')}}">Otorgación de Créditos</a></li>

               <li><a class="dropdown-item" href="{{route('certificados_aportacion')}}">Certificados de Aportación</a></li>
               <li><a class="dropdown-item" href="{{route('cambio_divisas')}}">Cambio de Divisas</a></li>
               <div class="dropdown-divider"></div>
            </ul>
         </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Convocatorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="{{route('comunicados')}}">Comunicados</a></li>
               <li><a class="dropdown-item" href="{{route('asambleas')}}">Asambleas</a></li>
               <li><a class="dropdown-item" href="{{route('licitaciones')}}">Licitaciones</a></li>
               <li><a class="dropdown-item" href="{{route('aseguradoras')}}">Aseguradoras</a></li>
               <li><a class="dropdown-item" href="{{route('requerimiento')}}">Requerimiento de Personal</a></li>
               <div class="dropdown-divider"></div>
            </ul>
         </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Educación Financiera
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="{{route('inscripcion')}}">Inscripción al curso</a></li>
               <li><a class="dropdown-item" href="{{route('programa_educacion')}}">Programa de Educación Financiera</a></li>
               <li><a class="dropdown-item" href="{{route('punto_reclamo')}}">Punto de Reclamo</a></li>
               <li><a class="dropdown-item" href="{{route('derechos_obligaciones')}}">Derechos y Obligaciones</a></li>
               <li><a class="dropdown-item" href="{{route('responsabilidad_social')}}">Responsabilidad Social Empresarial</a></li>
               <li><a class="dropdown-item" href="{{route('liderazgo')}}">Liderazgo</a></li>
               <li><a class="dropdown-item" href="{{route('multimedia')}}">Multimedia</a></li>
               <div class="dropdown-divider"></div>
            </ul>
         </li>

         <li class="nav-item">
            <a class="nav-link" href="{{route('incentivos')}}">Incentivos</a>
         </li>
         <!--<li class="nav-item">
               <a class="nav-link" href="{{route('remates')}}">Remates</a>
            </li>-->
         <li class="nav-item">
            <a class="nav-link" href="{{route('ubicacion')}}">Ubicación</a>
         </li>
      </ul>
      <!--<form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>-->
   </div>
</nav>