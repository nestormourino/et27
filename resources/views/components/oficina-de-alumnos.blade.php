<section id="oficinadealumnos">
    <x-cuerpo-central>
                <x-titulo-principal>OFICINA DE ALUMNOS</x-titulo-principal>
                <div class="grid grid-cols-1 lg:grid-cols-2 py-6 gap-6">
                    <div class="text-xl">
                        <div class="w-full mx-auto max-w-3xl bg-white">
                            <x-titulo-secundario>Tramites disponibles:</x-titulo-secundario>
                            <ul>
                                <li>-Ingreso primer año</li>
                                <li>-Ingreso alumnos nuevos para 2, 3, 4, 5 y 6to año</li>
                                <li>-Pases y articulación de estudios</li>
                                <li>-Exámenes previos, pendientes egresados y libres</li>
                                <li>-Constancias de titulo en tramite</li>
                                <li>-Constancia de materias adeudadas</li>
                            </ul>
                            <br>
                            <p class="py-5 font-bold">Contactarse con oficinadealumnoset27de18@gmail.com</p>
                        </div>
                    </div>
                    <div class="text-xl" style="padding-right:10px; padding-left:10px">
                            
                        <form id="contact-me" class="w-full mx-auto max-w-3xl bg-white" action="{{route('contactanos.oastore')}}" method="POST">
                            @csrf
                            <x-titulo-secundario>Contactenos por estos tramites</x-titulo-secundario>
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

                            <x-honey-recaptcha/>
                        
                            <div class="">
                                <button class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-darkblue font-bold py-2 px-4 rounded"
                                    type="submit">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    </x-cuerpo-central>
</section>