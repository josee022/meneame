<?php

namespace App\Models;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class Noticia extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======

>>>>>>> 4808544e0265ca769cc889662c7198b120609b8e
    const MIME_IMAGEN = 'jpg';

    private function imagen_url_relativa()
    {
        return '/uploads/' . $this->imagen;
    }

    private function miniatura_url_relativa()
    {
        return '/uploads/' . $this->miniatura;
    }

<<<<<<< HEAD
=======
    protected $fillable = ['titulo', 'meneos', 'imagen', 'descripcion', 'usuario_id', 'comentario_id'];


>>>>>>> 4808544e0265ca769cc889662c7198b120609b8e
    public function meneadores()

    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class);
    }

    public function comentarios()
    {
        return $this->morphMany(Comentario::class, 'comentable');
    }

    public function getImagenAttribute()
    {
        return $this->id . '.' . self::MIME_IMAGEN;
    }

    public function getMiniaturaAttribute()
    {
        return $this->id . '_mini.' . self::MIME_IMAGEN;
    }

    public function getImagenUrlAttribute()
    {
        return Storage::url(mb_substr($this->imagen_url_relativa(), 1));
    }

    public function getMiniaturaUrlAttribute()
    {
        return Storage::url(mb_substr($this->miniatura_url_relativa(), 1));
    }

    public function existeImagen()
    {
        return Storage::disk('public')->exists($this->imagen_url_relativa());
    }

    public function existeMiniatura()
    {
        return Storage::disk('public')->exists($this->miniatura_url_relativa());
    }

    public function guardarImagen(UploadedFile $imagen, string $nombre, int $escala, ?ImageManager $manager = null)
    {
        if ($manager === null) {
            $manager = new ImageManager(new Driver());
        }

        $imagen = $manager->read($imagen);
        $imagen->scaleDown($escala);
        $ruta = Storage::path('public/uploads/' . $nombre);
        $imagen->save($ruta);
    }

}
