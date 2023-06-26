<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite ('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <!--ENCABEZADO DE LA PAGINA -->
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Devstagram
            </h1>
            <!--Navegacion -->
            <nav class="flex gap-2 item-ceter">
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <!--Contenido para cada una de las vistas-->

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <!--Pie de pagina -->
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram UPV - Todos los derechos reservados {{now()->year}}
    </footer>       
</body>

<body class="h-full bg-gray-100">
    <header class="p-5 border-b bg-w shadow ">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Devstagram
            </h1>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear Cuenta</a>
            </nav>
        </div>
    </header>
    <!--Contenido de cada una de las páginas-->
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')

    </main>
    <!-- Pie de Página-->
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram UPV- Todos los derechos reservados {{now()->year}}, {{now()->month}}
    </footer>

        {{-- <div class="min-h-full">
            <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                    </div>
                    <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Pagina Principal</a>
                        <a href="alumnos" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Alumnos</a>
                        <a href="curriculum" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Curriculum</a>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
            </nav>
        
            <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Sonia Lizbeth Muñoz Barrientos</h1>
            </div>
            </header>
            <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!--Crear un contenedor dinamico para el titulo -->
                <h1>@yield('titulo')</h1>

                <hr>
                <h3>@yield('contenido')</h3>
                <!-- Your content -->
            </div>
            </main>
        </div> --}}        
</body>

</html>