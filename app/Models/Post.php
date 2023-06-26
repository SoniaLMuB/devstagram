<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //Se aregan los campos que se guardran

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id',
        
    ];
    
    /**
     * Relación de autoria de los Posts
     */
    // public function user(){
    //     return $this->belongsTo(User::class)->select(['name', 'username']);
    // }

    /**
     * Relación del Post con sus Comentarios
     */
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
