@extends('layouts.app')

@section('titulo')
    Publicación {{$user->username}}
@endsection
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        {{-- <label for="email" class="mb-2 block uppercase text-gray-900 font-bold">{{auth()->user()->name}}</label>
        <br> --}}
        <div class="md:w-6/12 p-5">
            <!--Insertar imagen utilizando "assert" (acceder a carpeta public)-->
            <img src="{{asset('upload'). '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!-- Mostrar los detalles de la imagen como: usuario -->
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="ml-2">
                    <label for="username" class="mb-2 block uppercase text-gray-900 font-bold">{{$user->username}}</label>
                </span>
            </div>
            <div class="mb-5"> 
                <!-- Mostrar los detalles de la imagen como: titulo  descripción y creaación-->               
                <label for="titulo" class="mb-2 block text-gray-700 font-bold">{{$post->titulo}}</label>
                <label for="desripcion" class="mb-2 block  text-gray-600 font-bold">{{$post->descripcion}}</label>
                <label for="fecha" class="text-sm text-gray-400 font-bold">{{$post->created_at->diffForHumans()}}</label>
            </div>
            @auth
            <!--Formulario que solo aparecerá a los usuarios que estan en sesión activa  para poder comentar-->
            <form action="{{ route('comentarios.store', ['post'=>$post, 'user'=>$user]) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">Escribe un comentario</label>
                    <textarea name="comentario" id="comentario" placeholder="Descripción de la publicación" class="border p-3 w-full rounded-lg @error('comentario') border-red-500 @enderror"></textarea>
                    @error('comentario')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Comentar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-4/12 p-3 text-white rounded-lg">
            </form>
            <br>
            <!-- condiciones para mostrar mensajes de resultados satisfactorios o errores -->
            @if(session('mensaje'))
                <div class="bg-green-400 p-2 rounded-lg mb-6 text-white text-center  font-bold">
                    {{ session('mensaje') }}
                </div>
            @endif
            @if(session('mensajeError'))
                <div class="bg-red-400 p-2 rounded-lg mb-6 text-white text-center  font-bold">
                    {{ session('mensaje') }}
                </div>
            @endif
            @endauth
            <div class="shadow rounded-md my-5 max-h-96 overflow-y-scroll">
                <!-- Mostrar los comentarios de la imagen  en caso de que haya-->
                @if($comentarios->count())
                    @foreach($comentarios as $comentario)
                        <div class="p-5 border-gray-300 border-b flex flex-col">
                            <div class="flex items-center">
                                <a href="{{ route('post.index', ['user'=> $comentario->user]) }}" class="font-bold">{{ $comentario->user->username }}</a>
                                <span class="ml-2">
                                    @auth
                                        <!--El botón solo parecerá para el usuario que realizó el comentario-->
                                        @if ($comentario->user_id==auth()->user()->id)
                                            <!--Se agrega la ruta para eliminar-->
                                            <form action="{{ route('comentarios.eliminar', ['user'=>$user, 'post'=>$post, 'comentario'=>$comentario]) }}" method="POST" class="inline">
                                                @csrf
                                                <!--Se indica que se hará con el metodo delete porque será para eliminar-->
                                                @method('DELETE')
                                                <button type="submit" class="font-bold text-red-300 flex items-center hover:text-red-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                    <span class="ml-1">Eliminar</span>
                                                </button>
                                            </form>
                                        @endif
                                    @endauth
                                    
                                    {{-- <a href="{{route('comentarios.eliminar', ['post'=>$post, 'user'=>$user,'comentario'=>$comentario])}}" class="font-bold text-red-300 flex items-center hover:text-red-500">
                                        
                                    </a> --}}
                                </span>
                            </div>
                            <p>{{ $comentario->comentario }}</p>
                            <p class="text-sm text-gray-500">{{ $comentario->created_at->diffForHumans() }}</p>
                        </div>
                        
                    @endforeach
                @else
                    <!-- Mostrar Mensaje en caso de que no hay comentaios -->
                    <p class="p-10 text-center text-gray-700">No hay comentarios aún.</p>
                @endif
            </div>
        </div>
    </div>

@endsection