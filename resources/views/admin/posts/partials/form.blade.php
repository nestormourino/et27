<div class="form-group">
    {!! Form::label('name', 'Titulo') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la publicacion']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la publicacion para generar el slug', 'readonly']) !!}
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('materia_id', 'Materia') !!}
    {!! Form::select('materia_id', $materias, null, ['class' => 'form-control']) !!}

    @error('materia_id')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

        <label class="mr-2">
            {!! Form::radio('status', 0, true) !!}
            Borrador
        </label>
        <label class="mr-2">
            {!! Form::radio('status', 1) !!}
            Publicado
        </label>

</div>

<div class="form-group">
    {!! Form::label('extract', 'Resumen') !!}
    {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el resumen de la publicacion']) !!}

    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Contenido') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el contenido de la publicacion']) !!}

    @error('body')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>