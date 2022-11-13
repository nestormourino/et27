@extends('adminlte::page')

@section('title', 'Panel de control ET27')

@section('content_header')
    <h1>Panel de control ET27</h1>
@stop

@section('content')
    <p>Detesto decir esto, ya quedo viejo esta version de Laravel, tengo que rearmar la web, no se encariñen.</p>

    <p>Bugtracker:<br>
        Si no hay noticias publicadas crashea el sitio.<br>
        No se suben las imagenes directamente desde la publicacion.<br>
    </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop