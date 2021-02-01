<x-app-layout>

    <x-ultima-noticia :post="$posts->last()"/>

    <x-portada/>

    <section id="ultimos-anuncios">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                    <x-titulo-principal>ULTIMOS ANUNCIOS</x-titulo-principal>
                    <div class="py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        
                    @foreach ($posts as $post)
                        
                    <x-ultimosanuncios :post="$post"/>
                        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <x-carousel :images="$images"/> --}}
    
    <x-canalyt/>

    <x-cooperadora/>

    <x-oficina-de-alumnos/>

</x-app-layout>
