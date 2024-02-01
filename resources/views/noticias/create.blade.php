<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST" action="{{ route('noticias.store') }}">
            @csrf

            <div>
                <x-input-label for="titulo" :value="'Títular'" />
                <x-text-input id="titulo" class="block mt-1 w-full"
                    type="text" name="titulo" :value="old('titulo')" required
                    autofocus autocomplete="titulo" />
                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="descripcion" :value="'Descripción'" />
                <x-text-input id="descripcion" class="block mt-1 w-full"
                    type="text" name="descripcion" :value="old('descripcion')" required
                    autofocus autocomplete="descripcion" />
                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
            </div>

            <label for="imagen">Imagen de la noticia : </label>
            <input type="file" name="imagen" accept="image/*">


            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('noticias.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Publicar noticia
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
