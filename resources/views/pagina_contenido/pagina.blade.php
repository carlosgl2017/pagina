@extends('principalweb')
    @section('contenido_pagina')
    <template v-if="menu==100">
         <inicio :ruta="ruta"></inicio>
    </template>
    <template v-if="menu==101">
    <h1>menu 2</h1>
    </template>
@endsection