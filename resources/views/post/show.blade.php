<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8">
                <h1 class="text-4xl px-2 font-bold text-gray-800 mb-2">{{$post->materia->name}}: {{$post->name}}</h1>
                <article class="inline-block px-3 h-6 text-black rounded-full mb-1">
                    Fecha de publicación: {{date('d-m-Y', strtotime($post->updated_at))}} por {{$post->user->name}}
                </article>
            </div>
    @if ($post->materia->category_id == 7)

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-6">
            <div class="md:col-span-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                        <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                            {!! $post->body !!}
                        </div>
                    </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                    <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">
                        <h1 class="mx-auto text-2xl leading-8 font-bold " style="border-bottom: 4px solid #1e4a6d; text-align:center">ULTIMAS NOTICIAS</h1>
                        
                        @foreach ($similares as $similar)
                            <div class="bg-white overflow-hidden shadow sm:rounded-lg py-2 mb-2 mt-2">
                                <a href="{{route('post.show',$similar)}}">
                                    <span class="text-gray-800 font-bold text-lg">{{$similar->name}} ({{date('d-m-Y', strtotime($post->updated_at))}})</span>
                                    <br>
                                    <span class="text-gray-800">{{$similar->extract}}</span>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        
            
    @else

        <div class="grid grid-cols-2">
            asdasda
        </div>
            
    @endif
            
    </div>
    
</x-app-layout>