<section id="nosotros">
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6">
                {{-- <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">AUTORIDADES</h1>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Rector</h1>
                        <h2 class="font-bold">Oscar Lazbal</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">ViceRector</h1>
                        <h2 class="font-bold">Carlos Reyes</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Regente Técnico</h1>
                        <h2 class="font-bold">Hebe Depalma</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Subregente Técnico</h1>
                        <h2 class="font-bold">Diego Amato</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Regente</h1>
                        <h2 class="font-bold">TBD</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Jefe de taller</h1>
                        <h2 class="font-bold">TBD</h2>
                    </div>
                    <div>
                        <img src="/images/img_avatar.png" class="rounded-full">
                        <br>
                        <h1 class="text-xl font-bold">Jefe de laboratorio</h1>
                        <h2 class="font-bold">TBD</h2>
                    </div>
                </div> --}}
                <h1 class="py-4 mx-auto text-4xl leading-8 font-bold" style="border-bottom: 4px solid #1e4a6d; text-align:center">OFICINA DE ALUMNOS</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 py-6 gap-6">
                    <div class="text-xl">
                        <div class="w-full mx-auto max-w-3xl bg-white">
                            <h2 class="w-full text-3xl font-bold leading-tight">Tramites disponibles:</h2>
                            <br>
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
                            <h2 class="w-full text-3xl font-bold leading-tight">Contactenos por estos tramites</h2><br>
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
                        
                            <div class="">
                                <button class="w-full shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-darkblue font-bold py-2 px-4 rounded"
                                    type="submit">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>