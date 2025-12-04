@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-xl shadow-lg max-w-xl mx-auto">

    <h2 class="text-2xl font-bold text-blue-700 mb-4"> Editar Futbolista</h2>

    <form action="{{ route('futbolistas.update', $futbolista) }}" method="POST">
        @csrf
        @method('PUT')

        @include('futbolistas.form')

        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Actualizar</button>
    </form>

</div>

@endsection
