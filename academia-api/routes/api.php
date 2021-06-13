<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Cursos;
use App\Models\Instructores;
use App\Models\Periodos;
use App\Models\curso_instructor;

/*************** Rutas para manejar Cursos ***************/

Route::get('cursos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Cursos::all();
});

Route::get('cursos/{id}', function($id) {
    return Cursos::find($id);
});


Route::post('cursos', function(Request $request) {
    $data = $request->all();
        return Cursos::create([
            'cu_nombre' => $data['cu_nombre'],
        ]);
});


Route::put('cursos/{id}', function(Request $request, $id) {
    $cursos = Cursos::findOrFail($id);
    $cursos->update($request->all());

    return $cursos;
});

Route::delete('cursos/{id}', function($id) {
    Cursos::find($id)->delete();

    return 204;
});

/*************** Rutas para manejar Instructores ***************/

Route::get('instructores', function() {
    
    return Instructores::all();
});

Route::get('instructores/{id}', function($id) {
    return Instructores::find($id);
});


Route::post('instructores', function(Request $request) {
    $data = $request->all();
        return Instructores::create([
            'in_nombre' => $data['in_nombre'],
        ]);
});


Route::put('instructores/{id}', function(Request $request, $id) {
    $instructores = Instructores::findOrFail($id);
    $instructores->update($request->all());

    return $instructores;
});

Route::delete('instructores/{id}', function($id) {
    Instructores::find($id)->delete();

    return 204;
});

/*************** Rutas para manejar Periodos ***************/

Route::get('periodos', function() {
    
    return Periodos::all();
});

Route::get('periodos/{id}', function($id) {
    return Periodos::find($id);
});


Route::post('periodos', function(Request $request) {
    $data = $request->all();
        return Periodos::create([
            'pe_descripcion' => $data['pe_descripcion'],
        ]);
});


Route::put('periodos/{id}', function(Request $request, $id) {
    $periodos = Periodos::findOrFail($id);
    $periodos->update($request->all());

    return $periodos;
});

Route::delete('periodos/{id}', function($id) {
    Periodos::find($id)->delete();

    return 204;
});

/*************** Rutas para manejar relacion curso_instructors ***************/

Route::get('cursos_instructores', function() {
    
    return curso_instructor::all();
});

Route::get('cursos_instructores/{id}', function($id) {
    return curso_instructor::find($id);
});


Route::post('cursos_instructores', function(Request $request) {
    $data = $request->all();
        return curso_instructor::create([
            'curso_id' => $data['curso_id'],
            'instructor_id' => $data['instructor_id'],
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at']
            
        ]);
});


Route::delete('cursos_instructores/{id}', function($id) {
    curso_instructor::find($id)->delete();

    return 204;
});

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/