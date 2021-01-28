<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la materia']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la materia para generar el slug', 'readonly']) !!}
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Año') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('area_id', 'Area') !!}
    {!! Form::select('area_id', $areas, null, ['class' => 'form-control']) !!}

    @error('area_id')
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