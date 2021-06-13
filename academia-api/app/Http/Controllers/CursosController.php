<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Cursos;

class CursosController extends Controller
{
    public function index()
    {
        return Cursos::all();
        
    }

    public function show(Cursos $cursos)
    {
        return $cursos;
    }

    
    public function store(Request $request)
    {
       $cursos = Cursos::save();
       return response()->json($cursos, 201);
    }

    public function update(Request $request, Cursos $cursos)
    {
        $cursos->update($request->all());

        return response()->json($cursos, 200);
    }

    public function delete(Cursos $cursos)
    {
        $cursos->delete();

        return response()->json(null, 204);
    }
}
