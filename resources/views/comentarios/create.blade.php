<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('comentarios.store') }}">
            @csrf

            <div>
                <x-input-label for="informacion" :value="'Informacion del comentario'" />
                <x-text-input id="informacion" class="block mt-1 w-full"
                    type="text" name="informacion" :value="old('informacion')" required
                    autofocus autocomplete="informacion" />
                <x-input-error :messages="$errors->get('informacion')" class="mt-2" />
                </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('comentarios.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Subir comentario
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
