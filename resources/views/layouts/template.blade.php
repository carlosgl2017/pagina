<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
    <meta name="author" content="Incanatoit.com">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="{{asset('template/img/favicon.png')}}">
    <title>Sistema  web San martin</title>
    <!-- Icons -->
    <link href="{{asset('template/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/simple-line-icons.min.css')}}" rel="stylesheet">
     @stack('stylesheets')
    <!-- Main styles for this application -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Escritorio</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Configuraciones</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#" data-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Notificaciones</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> Ingresos
                    <span class="badge badge-success">3</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> Ventas
                    <span class="badge badge-danger">2</span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('template/img/avatars/6.jpg')}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Cuenta</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>
            </div>
        </li>
    </ul>
</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
                </li>
                <li class="nav-title">
                    Mantenimiento
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Gestión del Sistema</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/remate/')}}"><i class="icon-bag"></i> Remates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Departamentos</a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-chart"></i> Reporte Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Contenido Principal -->
    @yield('corp')
    <!-- /Fin del contenido principal -->
</div>



<footer class="app-footer">
    <span><a href="#">Departamento de Sistemas</a> &copy; {{date('Y')}}</span>
    <span class="ml-auto">Desarrollado por <a href="#">Cooperativa de Ahorro y Crédito San Martín</a></span>
</footer>

<!-- Bootstrap and necessary plugins -->
<script src="{{asset('template/js/jquery.min.js')}}"></script>
<script src="{{asset('template/js/popper.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/pace.min.js')}}"></script>
<!-- Plugins and scripts required by all views -->
<script src="{{asset('template/js/Chart.min.js')}}"></script>
<!-- GenesisUI main scripts -->
<script src="{{asset('template/js/template.js')}}"></script>
@stack('scripts')

</body>

</html>