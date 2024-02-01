<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'biografia', 'nombreUsuario', 'email', 'password', 'fechaNac',
    ];


    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
