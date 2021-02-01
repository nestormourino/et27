            <div class="form-group">
                {!! Form::label('name', 'Nombre de la imagen') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la imagen']) !!}

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
                <p class="font-weight-bold">La imagen se mostrara en la galeria?</p>
            
                    <label class="mr-2">
                        {!! Form::radio('slider', 0, true) !!}
                        No mostrar
                    </label>
                    <label class="mr-2">
                        {!! Form::radio('slider', 1) !!}
                        Mostrar
                    </label>

            <div class="form-group">
                {!! Form::label('description', 'Descripción de la imagen') !!}
                {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción de la imagen (max 65 535 caracteres']) !!}
            
                @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="/images/imagen_muestra.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen que esta cargando') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>
                    <b>El peso maximo de la imagen es de 2Mb</b>, sin embargo se recomienda que sea menor a 1 Mb, para optimizar la imagen visite el siguiente enlace: <a href="https://imagecompressor.com/es/">https://imagecompressor.com/es/</a>
                </div>

                @error('file')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
