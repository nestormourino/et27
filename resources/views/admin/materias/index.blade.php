@extends('adminlte::page')

@section('title', 'Listado de materias')

@section('content_header')
    <h1>Listado de materias</h1>
@stop

@section('content')
    @include('admin.materias.partials.table')    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script>
        $(document).ready(function() {
            $('#materias').DataTable(
                {
                    language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
                }}
            );
        } );
    </script>

    @if(session('msg') == 'deleted')

    <script>
        Swal.fire(
            'Eliminado!',
            'La materia fue eliminada',
            'success'
            )
        </script>

    @elseif(session('msg') == 'created')

    <script>
        Swal.fire(
            'Genial!',
            'La materia fue creada con exito',
            'success'
            )
        </script>

    @elseif(session('msg') == 'updated')

    <script>
        Swal.fire(
            'Genial!',
            'La materia fue actualizada con exito',
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