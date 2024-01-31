<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
