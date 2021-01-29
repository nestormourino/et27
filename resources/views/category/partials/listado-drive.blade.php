<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
    <div class="text-xl mb-4 text-gray-800" style="padding-right:10px; padding-left:10px">
        <x-titulo-secundario>LISTADO DRIVE</x-titulo-secundario>
        <ul class="text-gray-800 text-xl italic mt-6">
            <li><a href="{{$category->link_drive}}" class="font-bold">Drive general de {{$category->name}}</a></li>
        @foreach ($materias as $materia)
                <li>
                    <a href="{{$materia->link_drive}}" class="text-base">
                        {{substr ($materia->name , 0, 38)}} @if(strlen ($materia->name) > 38)... @endif
                    </a>
                </li>
        @endforeach
        </ul>
    </div>
</div>