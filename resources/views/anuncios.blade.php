<x-app-layout>

    <x-portadaalt/>

    <x-cuerpo-central>
                <x-titulo-principal>ANUNCIOS</x-titulo-principal>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
                @foreach ($posts as $post)
                    
                <x-ultimosanuncios :post="$post"/>
                    
                @endforeach
                </div>
                <div class="mb-3 mt-3 font-bold">{{$posts->links()}}</div>
                
    </x-cuerpo-central>
</x-app-layout>


