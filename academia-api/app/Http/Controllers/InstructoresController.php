<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Instructores;

class InstructoresController extends Controller
{
    public function index()
    {
        return Instructores::all();
    }

    public function show(Instructores $instructores)
    {
        return $instructores;
    }

    
    public function store(Request $request)
    {
       $instructores = Instructores::save();
       return response()->json($instructores, 201);
    }

    public function update(Request $request, Instructores $instructores)
    {
        $instructores->update($request->all());

        return response()->json($instructores, 200);
    }

    public function delete(Instructores $instructores)
    {
        $instructores->delete();

        return response()->json(null, 204);
    }
}
