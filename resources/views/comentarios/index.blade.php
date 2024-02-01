<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID del usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Informacion
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('comentarios.show', ['comentario' => $comentario]) }}" class="font-medium text-blue-600 hover:underline">
                                {{ $comentario->usuario_id }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <a href="{{ route('comentarios.show', ['comentario' => $comentario]) }}" class="font-medium text-blue-600 hover:underline">
                                {{ $comentario->informacion }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{ route('comentarios.edit', ['comentario' => $comentario]) }}" class="font-medium text-blue-600 hover:underline">
                                <x-primary-button class="bg-green-500">
                                    Editar
                                </x-primary-button>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('comentarios.destroy', ['comentario' => $comentario]) }}" method="POST">
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
        <form action="{{ route('comentarios.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500">Ingresa un nuevo comentario</x-primary-button>
        </form>
    </div>
</x-app-layout>
