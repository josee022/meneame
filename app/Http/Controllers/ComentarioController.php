<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('comentarios.index', [
            'comentarios' => Comentario::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'informacion' => 'required|max:255',
        ]);

        $comentario = new Comentario();
        $comentario->informacion = $request->input('informacion');
        $comentario->usuario_id = $request->input('usuario_id');
        $comentario->save();
        session()->flash('success', 'El comentario se ha creado correctamente.');
        return redirect()->route('comentarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        return view('comentarios.show', [
            'comentario' => $comentario,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {

            return view('comentarios.edit', [
                'comentario' => $comentario,
            ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
      {
            $validated = $request->validate([
                'informacion' => 'required|max:255',
            ]);

            $comentario->informacion = $request->input('informacion');
            $comentario->usuario_id = $request->input('usuario_id');
            $comentario->save();
        return redirect()->route('comentarios.index');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
            $comentario->delete();
            session()->flash('success', 'El comentario se ha eliminado correctamente.');

        return redirect()->route('comentarios.index');
    }
}
