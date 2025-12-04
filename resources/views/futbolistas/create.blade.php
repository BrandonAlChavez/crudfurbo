@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-xl shadow-lg max-w-xl mx-auto">

    <h2 class="text-2xl font-bold text-green-700 mb-4"> Agregar Futbolista</h2>

    <form action="{{ route('futbolistas.store') }}" method="POST">
        @csrf
        @include('futbolistas.form')

        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Guardar</button>
    </form>

</div>

@endsection
