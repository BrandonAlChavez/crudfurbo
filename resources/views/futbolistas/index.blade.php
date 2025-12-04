@extends('layouts.app')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-green-700"> Cartas de Futbolistas</h1>

        <a href="{{ route('futbolistas.create') }}"
           class="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
             Agregar Futbolista
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

    <!-- Contenedor tipo cartas de FIFA -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach ($futbolistas as $f)
            <div class="relative bg-gradient-to-b from-yellow-300 to-yellow-500 p-4 rounded-2xl shadow-xl text-center border-4 border-yellow-700">

                <!-- Rating simulado FIFA -->
                <div class="absolute top-2 left-2 bg-white bg-opacity-80 px-3 py-1 rounded-lg shadow text-xl font-black text-yellow-900">
                    {{ rand(70, 99) }}
                </div>

                <!-- Posición -->
                <div class="absolute top-2 right-2 bg-yellow-900 text-white px-3 py-1 rounded-lg shadow text-sm font-bold">
                    {{ strtoupper($f->posicion) }}
                </div>

                <!-- Foto predeterminada -->
                <img src="https://cdn-icons-png.flaticon.com/512/75/75653.png"
                     class="w-24 h-24 object-cover mx-auto my-4 opacity-90"
                     alt="Foto">

                <!-- Nombre -->
                <h2 class="text-xl font-extrabold text-yellow-900 mb-2">{{ $f->nombre }}</h2>

                <!-- Info -->
                <div class="text-yellow-900 font-semibold text-sm">
                    <p>Edad: {{ $f->edad }}</p>
                    <p>Equipo: {{ $f->equipo }}</p>
                    <p>Nacionalidad: {{ $f->nacionalidad }}</p>
                </div>

                <!-- Botones -->
                <div class="mt-4 flex justify-center gap-2">
                    <a href="{{ route('futbolistas.show', $f->id) }}"
                       class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm">
                         Ver
                    </a>

                    <a href="{{ route('futbolistas.edit', $f->id) }}"
                       class="px-3 py-1 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-sm">
                         Editar
                    </a>

                    <form action="{{ route('futbolistas.destroy', $f->id) }}" method="POST"
                          onsubmit="return confirm('¿Seguro que quieres eliminar este futbolista?');">
                        @csrf
                        @method('DELETE')

                        <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm">
                             Eliminar
                        </button>
                    </form>
                </div>

            </div>
        @endforeach

    </div>

@endsection
