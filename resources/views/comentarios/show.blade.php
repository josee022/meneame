<x-app-layout>
    <div class="w-1/2 mx-auto">
        <!-- Título -->
        <div>
            <x-input-label for="informacion" :value="'Título del comentario'" />
            <x-text-input id="informacion" class="block mt-1 w-full"
                type="text" name="informacion" :value="old('informacion', $comentario->informacion)" required
                autofocus autocomplete="informacion" disabled />
        </div>

        <!-- Título -->
        <div>
            <x-input-label for="autor" :value="'Autor del comentario'" />
            <x-text-input id="autor" class="block mt-1 w-full"
                type="text" name="autor" :value="old('autor', $comentario->usuario_id)" required
                autofocus autocomplete="autor" disabled />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('comentarios.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
