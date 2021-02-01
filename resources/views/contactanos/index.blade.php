<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Dejanos un mensaje</h1>

                <form action="{{route('contactanos.store')}}" method="POST">
                    @csrf
                    <label>
                        Nombre:
                        <br>
                            <input type="text" name="name">
                    </label>
                    <br>
                    @error('name')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                    <br>
                    <label>
                        Correo:
                        <br>
                            <input type="text" name="email">
                    </label>
                    <br>
                    @error('correo')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                    <br>
                    <label>
                        Mensaje:
                        <br>
                            <textarea name="message" rows="4"></textarea>
                    </label>
                    <br>
                    @error('message')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                    <br>
                    <button type="submit">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>