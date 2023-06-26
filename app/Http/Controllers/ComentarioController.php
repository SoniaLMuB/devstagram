<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    //Crendo el metodo que nos permitirá guardar los datos
    public function store(Request $request, User $user, Post $post){
        // Validar que los campos estan llenos y que no sobrepasan los caracteres de 255
        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        // Guardar el comentario en la BD
        Comentario::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'comentario' => $request->comentario,
        ]);


        // Imprimir un mensaje para mostrar al usuario que se realizó correctamente
        return back()->with('mensaje', 'Comentario publicado correctamente');
    }

    public function eliminar($user, $post, $comentario) {
        //Se ecuentra el comentario que se esta mandando 
        $comentario = Comentario::find($comentario);
        //Condición para eliminar si encuentra el comentario y el usuario que generó el comentario es el mismo que auntenticado 
        //Eliminará el comentario
        if ($comentario && $comentario->user_id === auth()->user()->id) {
            //Se elimina el comentario
            $comentario->delete();
            // Imprimir un mensaje para mostrar al usuario que se realizó correctamente
            return back()->with('mensaje', 'Comentario eliminado correctamente');
        } else {
            // Imprimir un mensaje para mostrar al usuario que no realizó correctamente
            return back()->with('mensajeError', 'El comentario no se eliminó correctamente');
        }
    }
}
