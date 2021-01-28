<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria para generar el slug', 'readonly']) !!}
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('link_drive', 'Link drive') !!}
    {!! Form::text('link_drive', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link de la carpeta de drive']) !!}

    @error('link_drive')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('link_image', 'Link imagen') !!}
    {!! Form::text('link_image', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link a la imagen del plan de estudio']) !!}

    @error('link_drive')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('description', 'Contenido') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion de la categoria']) !!}

    @error('description')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>