<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropietarioRequest;
use App\Http\Requests\UpdatePropietarioRequest;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('propietarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropietarioRequest $request)
    {
        Propietario::create($request->all());

        return redirect()->route('propietarios.index')->with('info', 'GUARDADO CON EXITO!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propietario = Propietario::findOrFail($id);

        return view('propietarios.edit', compact('propietario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropietarioRequest $request, string $id)
    {
        $propietario = Propietario::findOrFail($id);
        
        $propietario->update($request->all());

        return redirect()->back()->with('info', 'DATOS ACTUALIZADOS!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
