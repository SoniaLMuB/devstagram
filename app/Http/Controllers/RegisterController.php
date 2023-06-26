<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    //Crear nuestro primeer método del controlador 
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //"dd" Dump and Die imprime  lo que tiene del proyecto y lo depura
        //dd("Post...");
        //dd($request);

        //Modificaciones username en minusculaas y sin espacios
        $request->request->add(['username'=>Str::slug($request->username)]);
        //validaciones del formulario de registro
        $this->validate($request,[
            'name'=>'required|min:5',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|confirmed|min:5',
            'password_confirmation'=>'', 
        ]);
        //dd('Mensaje creado cuenta...');
        
        ////dd($request);
        User::create([
             'name' =>$request->name,
             'username'=>$request->username,
             'email' =>$request->email,
             'password' =>Hash::make($request->password)
        ]);
        
        //Autenticar un usuario con el metodo 'attemp'
        //Opción 1
        // auth()->attempt([
        //     'email'=>$request->email,
        //     'password'=>$request->password

        // ]);
        //OPCión 2
        auth()->attempt($request->only('email', 'password'));

        //Redireccionar a dashboard
        return redirect()->route('post.index',auth()->user()->username);
    }


}
