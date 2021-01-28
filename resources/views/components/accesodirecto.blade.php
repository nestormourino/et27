<section id="portada">
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">ACCESO DIRECTO AL DRIVE</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 py-6">
                    @foreach ($categories as $category)
                        <a href="{{route('category.show', $category)}}" target="_blank" class="w-full h-120 bg-cover bg-center" style="background-color: #687bb3">
                            <div class="w-full h-full px-8 flex flex-row justify-center">
                                <center>
                                    <h1 class="text-4xl text-white leading-8 font-bold mt-4 mb-4">
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