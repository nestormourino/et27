<x-app-layout>

    <x-portadaalt/>

    <x-cuerpo-central>

        <x-titulo-principal>{{$category->name}}</x-titulo-principal>

        <div class="grid grid-cols-1 lg:grid-cols-3 py-6 gap-6">
            
            <div class="lg:col-span-2 w-full">
                @include('category.partials.imagen-materias')
            </div>

            <div class="w-full">
                @include('category.partials.listado-drive')
            </div>

            <div class="lg:col-span-2 w-full">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                    <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">

                        <x-titulo-secundario>DESCRIPCIÓN</x-titulo-secundario>

                        {!! $category->description !!}
                    </div>
                </div>
            </div>

            <div class="w-full bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-6">
                <div class="text-xl mb-4 text-gray-800 text-justify" style="padding-right:10px; padding-left:10px">

                    <x-titulo-secundario>ULTIMAS NOTICIAS</x-titulo-secundario>
                    
                    @foreach ($posts as $post)
                        @include('category.partials.listado-noticias')
                    @endforeach
                </div>
            </div>
        </div>
        
    </x-cuerpo-central>

</x-app-layout>