<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.materias.create')}}"> Agregar materia</a>
    </div>

    <div class="card-body">
        <table class="table table-striped" id="materias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Link Drive</th>
                    <th>Area</th>
                    <th>Año</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                    <tr>
                        <td>{{$materia->id}}</td>
                        <td>{{$materia->name}}</td>
                        <td><a class="btn btn-primary btn-sm" href="{{$materia->link_drive}}">Google Drive</a></td>
                        <td>{{$materia->area->name}}</td>
                        <td>{{$materia->category->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.materias.edit',$materia)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.materias.destroy',$materia)}}" class="formulario-eliminar" method="POST">
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