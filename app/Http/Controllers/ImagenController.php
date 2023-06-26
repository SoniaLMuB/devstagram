<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //
    public function store(Request $request){
        #return('Desde imagen controller');
        ///Identificar el archivo de dropzone
        $imagen=$request->file('file');
        //Convertir la imagen de json
        //return resfjponse()->json(['imagen' => $imagen->extension()]);
        //Generar un id unico para cada una de las imagenes que se cargan en el server
        $nombreImagen=Str::uuid().".".$imagen->extension();
        
        //implemnetar intervation image
        $imagenServidor=Image::make($imagen);
        //Agregamos efectos de intervation image: Indicamos la medida de cada imagen
        $imagenServidor->fit(1000,1000); //redimensiona 1000x1000 de la imagen

        //movemos la imagen a un lugar físico del server
        $imagenPath= public_path('upload').'/'. $nombreImagen;

        //Pasamos la imagen de memoria al servidor
        $imagenServidor->save($imagenPath  );
        
        //Verificamos que el nombre del archivo se ponga público
        return response()->json(['imagen'=>$nombreImagen ]);
    }
}

