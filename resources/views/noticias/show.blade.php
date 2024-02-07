<x-app-layout>
    <div class="w-1/2 mx-auto">

        <div>
            <x-input-label for="titulo" :value="'Títular'" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                type="text" name="titulo" :value="old('titulo', $noticia->titulo)" required
                autofocus autocomplete="titulo" disabled />
        </div>

        <div>
            <x-input-label for="meneos" :value="'Descripción'" />
            <x-text-input id="meneos" class="block mt-1 w-full"
                type="text" name="descripcion" :value="old('descripcion', $noticia->descripcion)" required
                autofocus autocomplete="titulo" disabled />
        </div>



        <div>
            <x-input-label for="usuario_id" :value="'Usuario propietario de la noticia'" />
            <x-text-input id="usuario_id" class="block mt-1 w-full"
                type="text" name="usuario_id" :value="old('usuario_id', $noticia->usuario_id)" required
                autofocus autocomplete="titulo" disabled />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('noticias.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
