@extends('adminlte::page')

@section('title', 'Editar imagen')

@section('content_header')
    <h1>Editar imagen</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($image, ['route' => ['admin.images.update', $image], 'method' => 'PUT']) !!}
        
        {!! Form::open(['route' => 'admin.images.store', 'files' => true]) !!}

        {!! Form::hidden('user_id_editor', auth()->user()->id) !!}

        @include('admin.images.partials.form')

        {!! Form::submit('Actualizar imagen', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')

<script>
	//Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
</script>
@stop