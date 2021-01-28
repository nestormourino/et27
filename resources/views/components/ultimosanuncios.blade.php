@props(['post'])
                
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
                {{substr ( $post->extract , 0 , 75 )}} @if(strlen ($post->extract) > 75) ... @endif
            </h3>

            <h5 class="text-l leading-8 font-bold" style="text-color:#1e4a6d">Haga click para leer la noticia completa</h4>

                
        </center>
    
    </div>
</a>