@php
    use App\Models\Employee;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Funcionários - Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{--  --}}

                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg w-96">

                            @if ($errors->any())
                                <div class="bg-red-600 text-white p-2 mb-3 rounded">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('employee.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-300 mb-1">Nome</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        class="w-full px-3 py-2 bg-gray-700 text-black border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                {{--  --}}
                                <!-- Campo Documento -->
                                <div class="mb-4">
                                    <label for="document" class="block text-gray-300 mb-1">CPF</label>
                                    <input type="text" id="document" name="document" value="{{ old('document') }}"
                                        class="w-full px-3 py-2 bg-gray-700 text-black border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Exemplo: 123.456.789-00">
                                </div>

                                <!-- Campo Data de Nascimento -->
                                <div class="mb-4">
                                    <label for="birthday" class="block text-gray-300 mb-1">Data de Nascimento</label>
                                    <input type="date" id="birthday" name="birthday" value="{{ old('birthday') }}"
                                        class="w-full px-3 py-2 bg-gray-700 text-black border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Campo Telefone -->
                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-300 mb-1">Telefone</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                        class="w-full px-3 py-2 bg-gray-700 text-black border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        placeholder="Exemplo: (11) 91234-5678">
                                </div>

                                <!-- Campo Gênero -->
                                <div class="mb-4">
                                    <label for="gender" class="block text-gray-300 mb-1">Gênero</label>
                                    <select id="gender" name="gender" class="w-full px-3 py-2 bg-gray-700 text-black border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="">Selecione</option>
                                        @foreach(Employee::list_genders() as $key => $value)
                                            <option value="{{ $key }}" {{ old('gender') == $key ? 'selected' : '' }}> {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--  --}}


                                <div class="flex justify-end">
                                    <button
                                        type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                    >
                                        Cadastrar
                                    </button>
                                </div>

                            </form>
                        </div>
                    {{--  --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
