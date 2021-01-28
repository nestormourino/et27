<x-app-layout>
    <x-portada/>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                <h1 class="mb-4 py-6 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">ULTIMOS ANUNCIOS</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    
                @foreach ($posts as $post)
                    
                        <a href="{{Route('post.show', $post)}}" class="w-full h-120 bg-cover bg-center" style="background-color: #687bb3">
                            <div class="w-full h-full px-8 flex flex-row justify-center">
                                
                                <center>
                                    <article class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full mb-1">
                                        Fecha de publicación: {{date('d-m-Y', strtotime($post->updated_at))}}
                                    </article>

                                    <article class="inline-block px-3 h-6 bg-gray-800 text-white rounded-full mb-4">
                                        {{$post->updated_at->diffForHumans()}}
                                    </article>

                                    <h1 class="text-4xl text-white leading-8 font-bold mb-4">
                                        {{$post->name}}
                                    </h1>

                                    <h3 class="text-2xl text-white leading-8 font-bold mb-4">
                                        {{substr ( $post->extract , 0 , 75 )}} @if(strlen ($post->extract) > 50) ... @endif
                                    </h3>

                                    <h5 class="text-l leading-8 font-bold" style="text-color:#1e4a6d">Haga click para leer la noticia completa</h4>

                                        
                                </center>
                            
                            </div>
                        </a>
                    
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <section id="portada">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                    <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">ACCESOS DIRECTOS</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 py-6">
                        @foreach ($categories as $category)
                            <a href="{{route('category.show', $category)}}" class="w-full h-120 bg-cover bg-center" style="background-color: #687bb3">
                                <div class="w-full h-full px-8 flex flex-row justify-center">
                                    <center>
                                        <h1 class="text-2xl text-white leading-8 font-bold mt-4 mb-4">
                                            {{$category->name}}
                                        </h1>                                    
                                    </center>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cooperadora/>

    <x-nosotros/>

    <x-contactenos/>

</x-app-layout>
