<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', [
            'usuarios' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'nombreUsuario' => 'required|max:255',
            'biografia' => 'required|max:255',
            'email' => 'required|max:255',
            'contraseña' => 'required|min:8',
        ]);

        $usuario = new User();
        $usuario->nombreUsuario = $validated['nombreUsuario'];
        $usuario->email = $validated['email'];
        $usuario->nombre = $validated['nombre'];
        $usuario->contraseña = $validated['contraseña'];
        $usuario->biografia = $validated['biografia'];
        $usuario->save();
        session()->flash('success', 'El usuario se ha creado correctamente.');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return view('users.show', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        return view('users.edit',[
            'usuario' => $usuario,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'nombreUsuario' => 'required|max:255',
            'biografia' => 'required|max:255',
            'email' => 'required|max:255',
            'contraseña' => 'required|min:8',
        ]);

        $usuario->nombreUsuario = $validated['nombreUsuario'];
        $usuario->email = $validated['email'];
        $usuario->nombre = $validated['nombre'];
        $usuario->contraseña = $validated['contraseña'];
        $usuario->biografia = $validated['biografia'];
        $usuario->save();
        session()->flash('success', 'El usuario se ha creado correctamente.');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        session()->flash('success', 'El usuario se ha eliminado correctamente.');
        return redirect()->route('users.index');
    }
}
