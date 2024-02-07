<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST"
            action="{{ route('noticias.update', ['noticia' => $noticia]) }}">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="nombre" :value="'Nombre'" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                    required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="email" :value="'Email'" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                    :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="biografia" :value="'Biografia'" />
                <x-text-input id="biografia" class="block mt-1 w-full" type="text" name="biografia"
                    :value="old('biografia')" required autofocus autocomplete="biografia" />
                <x-input-error :messages="$errors->get('biografia')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="fechaNac" :value="'Fecha de nacimiento'" />
                <x-text-input id="fechaNac" class="block mt-1 w-full" type="text" name="fechaNac"
                    :value="old('fechaNac')" required autofocus autocomplete="fechaNac" />
                <x-input-error :messages="$errors->get('fechaNac')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="nombreUsuario" :value="'Nombre del usuario'" />
                <x-text-input id="nombreUsuario" class="block mt-1 w-full" type="text" name="nombreUsuario"
                    :value="old('nombreUsuario')" required autofocus autocomplete="nombreUsuario" />
                <x-input-error :messages="$errors->get('nombreUsuario')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="contraseña" :value="'Introduce la nueva contraseña'" />
                <x-text-input id="contraseña" class="block mt-1 w-full" type="text" name="contraseña"
                    :value="old('contraseña')" required autofocus autocomplete="contraseña" />
                <x-input-error :messages="$errors->get('contraseña')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="contraseña" :value="'Introduce la contraseña denuevo'" />
                <x-text-input id="contraseña" class="block mt-1 w-full" type="text" name="contraseña"
                    :value="old('contraseña')" required autofocus autocomplete="contraseña" />
                <x-input-error :messages="$errors->get('contraseña')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('noticias.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                    </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Editar datos del usuario
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
