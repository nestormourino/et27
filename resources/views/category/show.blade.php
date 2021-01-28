<x-app-layout>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">{{$category->name}}</h1>
                <div class="grid grid-cols-1 lg:grid-cols-3 py-6 gap-6">
                    <div class="lg:col-span-2 flex flex-row w-full">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                            <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                                <h1 class="py-2 mx-auto text-2xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">MATERIAS</h1>
                                <img src="{{$category->link_image}}" alt="" class="mt-6">
                                <span class="text-sm">*Según Resolución Nº 4149/SSGECP/2012 - <a href="https://www.buenosaires.gob.ar/sites/gcaba/files/folleto-tecnica-2013_web_0_0.pdf" target="_blank" class="font-bold">Acceda al folleto aquí</a> </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                            <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                                <h1 class="py-2 mx-auto text-2xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">LISTADO DRIVE</h1>
                                <br>
                                <ul class="text-gray-800 text-xl italic">
                                    <li><a href="{{$category->link_drive}}" class="font-bold">Drive general de {{$category->name}}</a></li>
                                    <br>
                                @foreach ($materias as $materia)
                                        <li><a href="">{{$materia->name}}</a><li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 py-6 gap-6">
                    <div class="flex flex-row lg:col-span-2 w-full">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                            <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                                <h1 class="py-2 mx-auto text-2xl leading-8 font-bold mb-2" style="border-bottom: 4px solid #1e4a6d; text-align:center">DESCRIPCIÓN</h1>
                                {!! $category->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                        <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                            <h1 class="py-2 mx-auto text-2xl leading-8 font-bold mb-2" style="border-bottom: 4px solid #1e4a6d; text-align:center">ULTIMAS NOTICIAS</h1>
                            @foreach ($posts as $post)
                                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-4 mb-2 mt-2">
                                    <a href="{{route('post.show',$post)}}">
                                        <span class="text-gray-800 font-bold text-lg">{{$post->name}}<br><center class="text-gray-600 text-base">({{date('d-m-Y', strtotime($post->updated_at))}})</center></span>
                                        <span class="text-gray-800 text-base">{{$post->extract}}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</x-app-layout>