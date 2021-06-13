<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\curso_instructor;

class CursosInstructoresController extends Controller
{
    public function index()
    {
        return curso_instructor::all();
    }

    public function show(curso_instructor $curso_instructor)
    {
        return $curso_instructor;
    }

    
    public function store(Request $request)
    {
       $curso_instructor = curso_instructor::save();
       return response()->json($curso_instructor, 201);
    }

    public function update(Request $request, curso_instructor $curso_instructor)
    {
        $curso_instructor->update($request->all());

        return response()->json($curso_instructor, 200);
    }

    public function delete(curso_instructor $curso_instructor)
    {
        $curso_instructor->delete();

        return response()->json(null, 204);
    }
}
