<!--Index principal web-->
    <!--Superior-->
    @include('web.partials.superior-main')
	<!--header-->
    @include('web.partials.header')
	<!--- Navigation -->
	@include('web.partials.nav-main')
    @yield('contenido')
	<!-- Start Contact Section -->                                          
	@include('web.partials.footer-main')
<!--Inferior-->
    @include('web.partials.inferior-main')