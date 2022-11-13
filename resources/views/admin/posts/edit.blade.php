@extends('adminlte::page')

@section('title', 'Editar publicacion')

@section('content_header')
    <h1>Editar publicacion</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'method' => 'PUT']) !!}

            @include('admin.posts.partials.form')

                {!! Form::submit('Actualizar publicacion', ['btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(document).ready( function() {
        $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
        });
    });
    </script>
    <script src="{{asset('vendor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@stop