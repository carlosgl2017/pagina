<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cooperativa San Martín</title>
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<link rel="shortcut icon" href="web/img/sanmartin.png">
	<link rel="stylesheet" href="{{asset('web/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/style.css')}}">
	<link rel="stylesheet" href="{{asset('web/estilo.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/owl.theme.default.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/arrow.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/fixed.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/waypoints.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/simple-line-icons.min.css')}}">
<!--Cargar mi código css-->
@stack('css')

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	

</head>

<body data-spy="scroll" data-target="#navbarResponsive">