@extends('layouts.app')

@section('titulo')
    {{-- Perfil:{{$user->username}} --}}
    Perfil: {{$user->username}}
@endsection
@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #9147B2; }
        .cta-btn { color: #924DB0; }
        .upgrade-btn { background: #924DB0; }
        .upgrade-btn:hover { background: #924DB0; }
        .active-nav-link { background: #924DB0; }
        .nav-item:hover { background: #872DAF; }
        .account-link:hover { background: #924DB0; }
    </style>
@endpush

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w8/12 lg:w-6/12 px-5">
                <img src="{{asset('imgs/usuario.svg')}}" alt="Imagen de usuario">
            </div>
            <div class="md:w8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2xl">{{$user->username}}</p>
                <!--Agregando estructura base para dashboards de publicaciones-->
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Siguiendo</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Publicaciones</span>
                </p>
            </div>
        </div>
    </div>
    <!--Mostrar los post de Publiación obtenidos desde el PostController método index-->
    <section class="container mx-auto mt-10">
        <h2 class="txt-4xl text-center font-black my-10">Publicaciones</h2>
        {{-- {{dd($posts->count())}} --}}
        @if ($posts->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post )
                    <div>
                        <a href="{{route('post.show',  ['user' => $user,'post'=>$post ]) }}">
                            <img src="{{asset('upload'). '/' . $post->imagen}}" alt="Imagen del post" {{$post->titulo}}>
                        </a>
                    </div>
                @endforeach
            </div>
            @if ($posts->hasPages())
            <div class="mt-10">
                <ul class="flex items-center justify-center space-x-2">
                    <!--Pagina Anterior-->
                    @if ($posts->onFirstPage())
                        <li class="disabled" aria-disabled="true">
                            <span class="px-4 py-2 rounded-md border">Anterior</span>
                        </li>
                    @else
                        <li>
                            <a href="{{$posts->previousPageUrl()}}" rel="prev" class="px-4 py-2 rounded-md border">Anterior</a>
                        </li>
                    @endif
                    <!--Condición para poner los números-->
                    @if ($posts->lastPage())
                        @foreach ( $posts->getUrlRange(1,$posts->lastPage()) as $page=>$url)
                            <li>
                                <a href="{{$url}}" class="px-4 py-2 rounded-md border {{$posts->currentPage()===$page ? 'bg-blue-400 text-white' : ''}}">{{$page}}</a>

                            </li>
                        @endforeach
                    @endif
                     <!--Pagina Siguiente-->
                    @if ($posts->hasMorePages())
                        <li>
                            <a href="{{$posts->nextPageUrl()}}" rel="next" class="px-4 py-2 rounded-md border">Siguiente</a>
                        </li>
                    @else
                        <li class="disabled" aria-disabled="true">
                            <span class="px-4 py-2 rounded-md border"> Siguiente</span>
                        </li>
                    @endif
                </ul>
            </div>
        @endif
        @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay publicaciones</p>
        @endif
        
        <br>
    </section>
    
    

@endsection