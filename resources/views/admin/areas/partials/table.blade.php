<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.areas.create')}}"> Agregar area</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{$area->id}}</td>
                        <td>{{$area->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.areas.edit',$area)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.areas.destroy',$area)}}" class="formulario-eliminar" method="POST">
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