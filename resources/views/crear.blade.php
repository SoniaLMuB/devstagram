@extends('layouts.app')
@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    
    <div class="w-9/12 lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <!--Formulario para subir fotos-->
        <form method="POST" action="" novalidate>
            <!--Directiva de seguridad -->
            @csrf

            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{session('mensaje')}}
                </p>
            @endif

            <!--Campo de descripción corta -->
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="descripcion_corta">
                    Descripción 
                </label>
                <textarea id="descripcion_corta" name="descripcion_corta" placeholder="Breve descripción" class="border p-3 w-full rounded-lg @error('descripcion_corta') border-red-500 @enderror" value="{{old('descripcion_corta')}}" rows="3"></textarea>
                @error('descripcion_corta')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <!--boton para mandar los datos -->
            <input type="submit" value="Guardar Datos" class="bg-blue-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            <br>
        </form>

        <div class="mb-5">
            <form action="/target" class="dropzone" id="my-great-dropzone"></form>

                <script>
                Dropzone.options.myGreatDropzone = { // camelized version of the `id`
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    accept: function(file, done) {
                    if (file.name == "justinbieber.jpg") {
                        done("Naha, you don't.");
                    }
                    else { done(); }
                    }
                };
                </script>
        </div>
        <br>
    </div>
</div>



@endsection