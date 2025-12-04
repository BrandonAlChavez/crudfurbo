@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-xl shadow-lg max-w-xl mx-auto">

    <h2 class="text-2xl font-bold text-green-700 mb-4"> Detalles del Futbolista</h2>

    <p><b>Nombre:</b> {{ $futbolista->nombre }}</p>
    <p><b>Posición:</b> {{ $futbolista->posicion }}</p>
    <p><b>Edad:</b> {{ $futbolista->edad }}</p>
    <p><b>Equipo:</b> {{ $futbolista->equipo }}</p>
    <p><b>Nacionalidad:</b> {{ $futbolista->nacionalidad }}</p>

    <a href="{{ route('futbolistas.index') }}" 
       class="mt-4 inline-block px-4 py-2 bg-gray-600 text-white rounded">Volver</a>

</div>

@endsection
