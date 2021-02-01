<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.images.create')}}"> Agregar imagen</a>
    </div>

    <div class="card-body">
        <table class="table" id="images">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ultima modificacion por</th>
                    <th>Fecha edición</th>
                    <th>Edicion</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td><a href="{{$image->url}}"><img src="{{$image->url}}" alt="{{$image->name}}" style="height:30px"></a></td>
                        <td>{{$image->id}}</td>
                        <td>{{$image->name}}</td>
                        <td>{{$image->user_creator->name}}</td>
                        <td>{{$image->updated_at}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.images.edit',$image)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.images.destroy',$image)}}" class="formulario-eliminar" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>