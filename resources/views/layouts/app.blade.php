<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}
    <!--link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> 
    
    @stack('styles')
    @vite ('resources/css/app.css')
    @vite('resources/js/app.js')
    

</head>
<body class="bg-gray-100 antialiased">

    <!--ENCABEZADO DE LA PAGINA -->
    <header class="p-3 border-b  bg-blue-200 shadow">
        <div class="container mx-auto flex justify-between items-center">
            
            {{-- <a  class="text-3xl font-black">
                Devstagram
            </a> --}}
            <!--Aplicar Helper para verificar si esta autenticado-->
            @auth
                <a href="{{route('post.index',auth()->user()->username)}}" class="text-3xl font-black">Devstagram</a>
                <!--Vinculo botón de publicar Post-->
                <a href="{{route('post.create')}}" class="flex items-center gap-2 bg-blue-100 border p-2 text-gray-600 rounded text-sm upercase font-font-bold cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                      
                    Crear
                </a>
                <!--p>Autenticado</p-->
                <nav class="flex gap-2 items-center font-bold">
                    Hola: 
                    <span class="font-normal">
                        {{auth()->user()->username}}
                    </span>
                    <!--Agregar seguridad logut---------------------------------------------------------------->
                    <form method="POST"action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar Sesión
                        </button>
                    </form>
                </nav>
            @endauth 
            <!--Determinar que -->
            @guest
                <a href="#" class="text-3xl font-black">Devstagram</a>
                <!--Navegacion -->
                <nav class="flex gap-2 item-ceter">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">Crear cuenta</a>
                </nav>
            @endguest

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
    <footer class="text-center bg-blue-200 p-3 text-gray-500 font-bold uppercase">
        Devstagram UPV - Todos los derechos reservados {{now()->year}}
    </footer>       
</body>
</html>