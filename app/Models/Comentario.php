<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }
}
