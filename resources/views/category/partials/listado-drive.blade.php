<div class="w-full">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
        <div class="text-xl mb-4 text-gray-800" style="padding-right:10px; padding-left:10px">
            <h1 class="py-2 mx-auto text-2xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">LISTADO DRIVE</h1>
            <br>
            <ul class="text-gray-800 text-xl italic">
                <li><a href="{{$category->link_drive}}" class="font-bold">Drive general de {{$category->name}}</a></li>
                <br>
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
</div>