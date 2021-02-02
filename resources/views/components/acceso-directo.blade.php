@props(['categories'])

<section id="categories">
    <x-cuerpo-central>
        <x-titulo-principal>ACCEDE AL AREA DE TU AÑO</x-titulo-principal>
        
        <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 gap-4 py-6">
            @foreach ($categories as $category)
                
                <a href="{{Route('category.show', $category)}}" class="w-full h-120 bg-cover bg-center" style="background-color: #687bb3">
                    <div class="container w-full h-full px-8 mt-3 flex flex-row">
                        <center>
                            <h1 class="text-4xl text-white leading-8 font-bold mb-4">
                                {{$category->name}}
                            </h1>
                        </center>
                    </div>
                </a>

            @endforeach
        </div>
    </x-cuerpo-central>
</section>