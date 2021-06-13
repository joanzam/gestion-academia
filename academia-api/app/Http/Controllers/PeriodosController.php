<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Periodos;

class PeriodosController extends Controller
{
    public function index()
    {
        return Periodos::all();
    }

    public function show(Periodos $periodos)
    {
        return $periodos;
    }

    
    public function store(Request $request)
    {
       $periodos = Periodos::save();
       return response()->json($periodos, 201);
    }

    public function update(Request $request, Periodos $periodos)
    {
        $periodos->update($request->all());

        return response()->json($periodos, 200);
    }

    public function delete(Periodos $periodos)
    {
        $periodos->delete();

        return response()->json(null, 204);
    }
}
