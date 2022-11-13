<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.posts.create')}}"> Agregar publicacón</a>
    </div>

    <div class="card-body">
        <table class="table" id="posteos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo de publicación</th>
                    <th>Materia</th>
                    <th>Area</th>
                    <th>Año</th>
                    <th>Fecha edición</th>
                    <th>Edicion</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id->reverse()}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->materia->name}}</td>
                        <td>{{$post->materia->area->name}}</td>
                        <td>{{$post->materia->category->name}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy',$post)}}" class="formulario-eliminar" method="POST">
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