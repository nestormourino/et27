<x-app-layout>

    <x-ultima-noticia :post="$posts->last()"/>

    <x-portada/>

    <section id="ultimos-anuncios">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                    <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">ULTIMOS ANUNCIOS</h1>
                    <div class="py-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        
                    @foreach ($posts as $post)
                        
                    <x-ultimosanuncios :post="$post"/>
                        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    <x-canalyt/>

    <x-cooperadora/>

    <x-oficinadealumnos/>

</x-app-layout>
