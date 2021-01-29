<x-app-layout>

    <x-portadaalt/>

    <x-cuerpo-central>

        <x-titulo-principal>{{$category->name}}: Todas las noticias</x-titulo-principal>

        <div class="grid grid-cols-1 lg:grid-cols-3 py-6 gap-6">
                    
                    @foreach ($posts as $post)
                        @include('category.partials.listado-noticias')
                    @endforeach
        </div>
        <div class="container mb-3">
            {{$posts->links()}}
        </div>
        
        
    </x-cuerpo-central>

</x-app-layout>