@extends('adminlte::page')

@section('title', 'Listado de areas')

@section('content_header')
    <h1>Listado de areas</h1>
@stop

@section('content')
    @include('admin.areas.partials.table')    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    @if(session('eliminar') == 'ok')

    <script>
        Swal.fire(
            'Eliminado!',
            'El area fue eliminada',
            'success'
            )
        </script>

    @endif

    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: 'Estas seguro?',
                text: "Esta accion no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminalo!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    
                    this.submit();
                }
                })

        })
    </script>

@stop