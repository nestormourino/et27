<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.categories.create')}}"> Agregar categoria</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Link Drive</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{$category->link_drive}}">Google Drive</a></td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit',$category)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.categories.destroy',$category)}}" class="formulario-eliminar" method="POST">
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