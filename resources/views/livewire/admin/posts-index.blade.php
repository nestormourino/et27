<div class="card">

    <div class="card-header">
        <table cellspacing="10">
            <th style="width:91%"><input wire:model="search" class="form-control" placeholder="Ingrese el nombre del post" type="text" name="" id=""></th>
            <th><a class="btn btn-secondary float-right" href="{{route('admin.posts.create')}}"> Crear nuevo post</a></th>
        </table>
        
    </div>

    @if ($posts->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo de publicación</th>
                    <th>Materia</th>
                    <th>Area</th>
                    <th>Año</th>
                    <th>Fecha edicion</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->materia->name}}</td>
                        <td>{{$post->materia->area->name}}</td>
                        <td>{{$post->materia->category->name}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$posts->links()}}
    </div>

    @else

    <div class="card-body"><strong>No hay ningun registro</strong></div>
    
    @endif

</div>