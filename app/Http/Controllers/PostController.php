<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Contructor para protección de la url "dashboard"
    //El constructor es lo que se ejecuta cuando instanciamos un controlador
    public function __construct()
    {
        //protegemos la url
        //Al metodo index con el constructor le pasamos el parametro de autenticación
        $this->middleware('auth')->except(['show','index']);
    }


    public function index(User $user){
        //Crear la consulta 
        //Post es el nombre del modelo

        $posts = Post::where('user_id',$user->id)->paginate(8);
        //Muestre la vista de dashabord
        //return view('dashboard')->with('posts',$posts);
        //dd("Usuario",$user->username);
        return view('dashboard',[
            //dd("Creando post");
            'user'=>$user,
            //Pasamos los valores de los Post de publicación
            'posts'=>$posts
        ]);
    }

    //CReando metodo create para formulario de publicaciones
    public function create(){
        //dd("Creando post");
        //Retornar a la vista del dashboard
        return view('posts.create');
    }

    public function store(Request $request){
        //"dd" Dump and Die imprime  lo que tiene del proyecto y lo depura

        //validaciones del formulario de registro
        $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required'
        ]);
        //dd('Mensaje creado cuenta...');
        
        ////dd($request);
        // Post::create([
        //      'titulo' =>$request->titulo,
        //      'descripcion'=>$request->descripcion,
        //      'imagen'=>$request->imagen,
        //      //Identificación del usuario que esta autenticado en ese momento
        //      'user_id'=>auth()->user()->id

        // ]);
        //GuardAR registro con relaciones (E-R)
        //post es el nombre de la relación
        $request->user()->post()->create([
            'titulo' =>$request->titulo,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            //Identificación del usuario que esta autenticado en ese momento
            'user_id'=>auth()->user()->id

        ]);
        //Redireccionamos al muro principal
        return redirect()->route('post.index',auth()->user()->username);
    }

    // public function show($id){
    //     $post = Post::findOrFail($id);

    //     return view('posts.post', compact('post'));
    // }
    public function show(User $user, Post $post){
        
        //$post = Post::findOrFail($id);
        //Obtiene todos los comentarios relacionados con el post por orden
        $comentarios = Comentario::where('post_id', $post->id)->latest()->get();

        //Pasa el objeto Post,user y comentarios a la vista para que pueda ser utilizado.
        return view('posts.post', [
            'post' => $post,
            'user' => $user,
            'comentarios' => $comentarios
        ]);
    }

}
