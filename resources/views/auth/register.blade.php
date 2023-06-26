<!--Extencian al archivo app que esta en la carpeta layouts -->
@extends('layouts.app')

<!--Titulo de la pagina-->
@section('titulo')
    Registrate a Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <!--Insertar imagen utilizando "assert "(acceder a carpea public) -->
            <img src="{{asset('imgs/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!--Formulario para registrarse -->
            <form action="{{route('register')}}" method="POST">
                <!--Directiva de seguridad -->
                @csrf
                <!--Campo de nombre -->
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"  value="{{old('name')}}" >
                    <!--Crear una directiva para mostrar un mensaje de error -->
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--Campo de username -->
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">
                        Username
                    </label>
                    <input id="username" name="username" type="text" placeholder="Tu username" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--Campo de email -->
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--Campo de password -->
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Password de registro" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    
                </div>
                <!--Campo de confirmacion de password -->
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">
                        Repetir Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repetir Password" class="border p-3 w-full rounded-lg">
                </div>
                <!--boton para mandar los datos -->
                <input type="submit" value="Crear Cuenta" class="bg-blue-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection