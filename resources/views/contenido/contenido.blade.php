    @extends('principalweb')
    @section('contenido_web')
    <template v-if="menu==1">
         <remate :ruta="ruta"></remate>
    </template>
    <template v-if="menu==2">
    <h1>menu 2</h1>
    </template>
    @endsection
