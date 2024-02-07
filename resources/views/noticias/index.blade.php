<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Meneos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Usuario
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($noticia->existeImagen())
                                <img src="{{ asset($noticia->imagen_url) }}" />
                            @endif
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('noticias.show', ['noticia' => $noticia]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $noticia->meneos }}
                            </a>
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($articulo->existeImagen())
                                <img src="{{ asset($articulo->imagen_url) }}" />
                            @endif
                        </th>
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('noticias.show', ['noticia' => $noticia]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $noticia->titulo }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('noticias.show', ['noticia' => $noticia]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $noticia->descripcion }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('noticias.show', ['noticia' => $noticia]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                {{ $noticia->usuario_id }}
                            </a>
                        </th>

                        <td class="px-6 py-4">
                            <a href="{{ route('noticias.edit', ['noticia' => $noticia]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-primary-button class="bg-green-500">
                                    Editar
                                </x-primary-button>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('articulos.cambiar_imagen', ['articulo' => $articulo]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-primary-button>
                                    Cambiar imagen
                                </x-primary-button>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('noticias.destroy', ['noticia' => $noticia]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="bg-red-500">
                                    Borrar
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('noticias.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500">Ingresa una nueva noticia</x-primary-button>
        </form>
    </div>
</x-app-layout>
