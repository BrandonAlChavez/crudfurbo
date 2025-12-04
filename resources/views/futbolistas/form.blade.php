@csrf

<div class="mb-4">
    <label class="block font-semibold">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $futbolista->nombre ?? '') }}"
           class="w-full p-2 border rounded">
</div>

<div class="mb-4">
    <label class="block font-semibold">Posición</label>
    <input type="text" name="posicion" value="{{ old('posicion', $futbolista->posicion ?? '') }}"
           class="w-full p-2 border rounded">
</div>

<div class="mb-4">
    <label class="block font-semibold">Edad</label>
    <input type="number" name="edad" value="{{ old('edad', $futbolista->edad ?? '') }}"
           class="w-full p-2 border rounded">
</div>

<div class="mb-4">
    <label class="block font-semibold">Equipo</label>
    <input type="text" name="equipo" value="{{ old('equipo', $futbolista->equipo ?? '') }}"
           class="w-full p-2 border rounded">
</div>

<div class="mb-4">
    <label class="block font-semibold">Nacionalidad</label>
    <input type="text" name="nacionalidad" value="{{ old('nacionalidad', $futbolista->nacionalidad ?? '') }}"
           class="w-full p-2 border rounded">
</div>
