<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('noticias.index', [
            'noticias' => Noticia::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo'=> 'required|max:255',
            'descripcion' => 'required|max:500',
        ]);


        $noticia = new Noticia();
        $noticia->titulo = $validated['titulo'];
        $noticia->descripcion = $validated['descripcion'];
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('imagenes/noticias', 'public');
            $noticia->imagen = $imagenPath;
        }
        $noticia->save();
        session()->flash('success', 'La noticia se ha añadido correctamente.');
        return redirect()->route('noticias.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('noticias.show', [
            'noticia' => $noticia,
            'descripcion' => $noticia,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', [
            'noticia' => $noticia,
            'autor' => $noticia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:500',
        ]);

        $noticia->titulo = $validated['titulo'];
        $noticia->descripcion = $validated['descripcion'];
        $noticia->save();
        session()->flash('success', 'Noticia editada correctamente');
        return redirect()->route('noticias.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        session()->flash('success', 'La noticia se ha eliminado correctamente.');
        return redirect()->route('noticias.index');
    }

    public function cambiar_imagen(Noticia $noticia)
    {
        return view('noticias.cambiar_imagen', [
            'noticia' => $noticia,
        ]);
    }

    /*public function guardar_imagen(Noticia $noticia, Request $request)
    {
        $mime = Noticia::MIME_IMAGEN;

        $request->validate([
            'imagen_url' => "required|mimes:$mime|max:500",
        ]);

        $imagen = $request->file('imagen_url');
        Storage::makeDirectory('public/uploads');

        $imagen_original = $imagen;
        $manager = new ImageManager(new Driver());
        $noticia->guardarImagen($imagen, $noticia->imagen, 400, $manager);
        $imagen = $imagen_original;
        $noticia->guardarImagen($imagen, $noticia->miniatura, 200, $manager);
        return redirect()->route('noticias.index');
    }*/
}
