@extends('adminlte::page')

@section('title', 'Crear publicacion')

@section('content_header')
    <h1>Crear publicacion</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}

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
        .create( document.querySelector( '#body' ), {
            simpleUpload: {
            // The URL that the images are uploaded to.
            uploadUrl: "{{route('image.upload')}}",
        }
        } )
        .catch( error => {
            console.error( error );
        } );
    </script>
@stop