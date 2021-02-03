<section id="contactenos">
    <x-cuerpo-central>
        <x-titulo-principal>CONTACTENOS</x-titulo-principal>
        <div class="grid grid-cols-1 lg:grid-cols-2 py-6 gap-6">
            <div class="text-xl">
                
                <form id="contact-me" class="w-full mx-auto max-w-3xl bg-white text-gray-700 " action="{{route('contactanos.store')}}" method="POST">
                    @csrf
                    <x-titulo-secundario>Escribenos un correo</x-titulo-secundario>
                    <!-- name field -->
                    <div class="flex flex-wrap mb-6">
                        <div class="relative w-full appearance-none label-floating">
                            <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            name="name" type="text" placeholder="Nombre y apellido*"required>
                            <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                Nombre y Apellido
                            </label>
                        </div>
                    </div>
                    <!-- email field -->
                    <div class="flex flex-wrap mb-6">
                        <div class="relative w-full appearance-none label-floating">
                            <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            name="email" type="text" placeholder="ejemplo@gmail.com*"required>
                            <label for="email" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                Tu correo electronico
                            </label>
                        </div>
                    </div>
                    <!-- telephone field -->
                    <div class="flex flex-wrap mb-6">
                        <div class="relative w-full appearance-none label-floating">
                            <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            name="telephone" type="text" placeholder="(011) 4555-5555">
                            <label for="telephone" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                                Telefono de contacto
                            </label>
                        </div>
                    </div>
                    <!-- Message field -->
                    <div class="flex flex-wrap mb-6">
                        <div class="relative w-full appearance-none label-floating">
                            <textarea class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                                name="message" type="text" placeholder="Mensaje...*"></textarea>
                                <label for="message" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Mensaje...
                            </label>
                        </div>
                    </div>
                    <p class="text-sm mb-6">*Campos obligatorios</p>

                    {!! htmlFormSnippet() !!}
                
                    <div class="">
                        <button class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-darkblue font-bold py-2 px-4 rounded"
                            type="submit">
                            Enviar
                        </button>
                    </div>
                    <center><h2 class="w-full my-2 text-2xl font-bold leading-tight mt-8">O llamanos al 4567-2244/4341</h2></center>
                </form>
            </div>
            <div class="">
                <center>
                    <x-titulo-secundario>Como llegar</x-titulo-secundario>
                        <h4 class="w-full my-2 text-xl font-bold leading-tight">Colectivos a menos de 5 cuadras: <br>25, 53, 106, 107, 108, 124, 135, 181 <br><br> Colectivos entre 5 y 10 cuadras: <br>21, 28, 80, 85, 114, 117, 146</h4>
                </center>
                <br>
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13133.287285628378!2d-58.5177962!3d-34.6213068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf112c5a82aee356d!2sEscuela+T%C3%A9cnica+N%C2%BA+27+Hip%C3%B3lito+Yrigoyen!5e0!3m2!1ses!2sar!4v1520831688172"></iframe>
            </div>
        </div>
    </x-cuerpo-central>
</section>