<!--Crear una directiva para incluir la navegacio -->
@extends('layouts.app')

<!--Directiva para crear el contenido que se envia al contenedor (@ield) -->
<!--section es toda la infromacion que va tener el contenedor-->
@section('titulo')
    Bienvenidos alumnas y alumnos
@endsection

<!--crear el contenido que se envia al contenedor de contenedido en el app -->
@section('contenido')
    Lista de asistencia de alumnos
@endsection