<x-app-layout>
    <div class="w-1/2 mx-auto">
        <!-- Título -->
        <div>
            <x-input-label for="titulo" :value="'Títular'" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                type="text" name="titulo" :value="old('titulo', $noticia->titulo)" required
                autofocus autocomplete="titulo" disabled />
        </div>

        <div>
            <x-input-label for="descripcion" :value="'Descripción'" />
            <x-text-input id="descripcion" class="block mt-1 w-full"
                type="text" name="descripcion" :value="old('descripcion', $noticia->descripcion)" required
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
