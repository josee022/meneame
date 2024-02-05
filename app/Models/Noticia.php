<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'meneos', 'imagen', 'descripcion', 'usuario_id', 'comentario_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function meneos(Noticia $noticia)
    {

        $noticia->increment('meneos');
        return redirect()->route('noticias.show', ['noticia' => $noticia]);
    }
}
