<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbolistas</title>

    <!-- Tailwind CSS vía CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Colores personalizados estilo futbolístico -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        futbolGreen: '#1A4D2E',
                        futbolLight: '#4CAF50',
                        futbolGrass: '#76C893',
                        futbolDark: '#0D2818',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-futbolGrass min-h-screen">

    <nav class="bg-futbolGreen text-white p-4 shadow-lg mb-6">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-2xl font-bold"> Fútbol Manager</h1>

            <a href="{{ route('futbolistas.index') }}" 
               class="px-4 py-2 bg-white text-futbolGreen rounded-lg font-semibold hover:bg-gray-200 transition">
                Lista de Futbolistas
            </a>
        </div>
    </nav>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
