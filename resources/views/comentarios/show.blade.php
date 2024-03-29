<x-app-layout>
    <div class="w-1/2 mx-auto">

        <div>
            <x-input-label for="usuario_id" :value="'Usuario del comentario'" />
            <x-text-input id="usuario_id" class="block mt-1 w-full" type="text" name="usuario_id" :value="old('usuario_id', $comentario->usuario_id)"
                required autofocus autocomplete="usuario_id" disabled />
        </div>
        <div>
            <x-input-label for="informacion" :value="'Informacion del comentario'" />
            <x-text-input id="informacion" class="block mt-1 w-full" type="text" name="informacion" :value="old('informacion', $comentario->informacion)"
                required autofocus autocomplete="informacion" disabled />
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
