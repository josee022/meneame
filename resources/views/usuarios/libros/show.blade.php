<x-app-layout>
    <div class="w-1/2 mx-auto">
        <!-- Título -->
        <div>
            <x-input-label for="titulo" :value="'Título del libro'" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                type="text" name="titulo" :value="old('titulo', $libro->titulo)" required
                autofocus autocomplete="titulo" disabled />
        </div>

        <!-- Autor -->
        <div class="mt-4">
            <x-input-label for="autor" :value="'autor del libro'" />
            <x-text-input id="autor" class="block mt-1 w-full"
                type="text" name="autor" :value="old('autor', $libro->autor)" required
                autofocus autocomplete="autor" disabled />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('libros.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
