@extends('adminlte::page')

@section('title', 'Crear materia')

@section('content_header')
    <h1>Crear materia</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.materias.store']) !!}

                @include('admin.materias.partials.form')

                {!! Form::submit('Crear materia', ['class' => 'btn btn-primary']) !!}

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
@stop