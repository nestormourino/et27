@extends('adminlte::page')

@section('title', 'Listado de publicaciones')

@section('content_header')
    <h1>Listado de publicaciones</h1>
@stop

@section('content')
    @include('admin.posts.partials.table')    

@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#posteos').DataTable(
                {language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
                }}
            );
        } );
    </script>

    @if(session('msg') == 'deleted')

    <script>
        Swal.fire(
            'Eliminado!',
            'La publicación fue eliminada',
            'success'
            )
        </script>

    @elseif(session('msg') == 'created')

    <script>
        Swal.fire(
            'Genial!',
            'La publicación fue creada con exito',
            'success'
            )
        </script>

    @elseif(session('msg') == 'updated')

    <script>
        Swal.fire(
            'Genial!',
            'La publicación fue actualizada con exito',
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