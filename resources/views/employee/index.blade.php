<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Funcionários') }}
        </h2>

        <div class="flex justify-end mt-4">

            <a href="{{ route('employee.create') }}"
               class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Cadastrar
            </a>
        </div>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-600 text-white p-2 mb-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <table class="w-full table-fixed border border-gray-700">
                    <thead>
                        <tr class="bg-gray-900">
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">Nome</th>
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">CPF</th>
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">Data de Nascimento</th>
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">Telefone</th>
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">Gênero</th>
                            <th class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 text-gray-200">
                        @foreach ($models as $model)
                            <tr>
                                <td class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700"> {{ $model->name }}</td>
                                <td class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700"> {{ $model->document }}</td>
                                <td class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700"> {{ $model->birthday }}</td>
                                <td class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700"> {{ $model->phone }}</td>
                                <td class="w-1/6 py-4 px-6 text-left text-gray-300 font-bold uppercase border-b border-gray-700"> {{ $model->genderAsText }}</td>
                                <td class="py-4 px-6 border-b border-gray-700 flex items-center space-x-4">

                                    <!-- Botão Editar -->
                                    <a href="{{ route('employee.edit', $model->id) }}"
                                        class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0l-10 10A2 2 0 004 13v3a1 1 0 001 1h3a2 2 0 001.414-.586l10-10a2 2 0 000-2.828l-2-2zM5 15v-1.586L12.293 6l1.586 1.586L6.586 15H5z" />
                                        </svg>
                                        Editar
                                    </a>

                                    <!-- Botão Deletar -->
                                    <form action="{{ route('employee.destroy', $model->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700 transition flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-1 1v1H5a1 1 0 100 2h10a1 1 0 100-2h-3V3a1 1 0 00-1-1H9zM4 7a1 1 0 011-1h10a1 1 0 011 1v9a3 3 0 01-3 3H7a3 3 0 01-3-3V7zm4 2a1 1 0 112 0v5a1 1 0 11-2 0V9zm4 0a1 1 0 112 0v5a1 1 0 11-2 0V9z" clip-rule="evenodd" />
                                            </svg>
                                            Deletar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
