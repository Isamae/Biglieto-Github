    @extends('principalEm')
    @section('contenido2')
        <template v-if="menu==0">
            <inicio></inicio>
        </template>
        <template v-if="menu==1">
            <articulo></articulo>
        </template>
            
        <template v-if="menu==2">
            <rutas_em></rutas_em>
        </template>

        <template v-if="menu==3">
            <h1>Contenido del menú 3</h1>
        </template>

        <template v-if="menu==4">
            <contacto></contacto>
        </template>

        <template v-if="menu==5">
            <h1>Contenido del menú 5</h1>
        </template>
        
    @endsection