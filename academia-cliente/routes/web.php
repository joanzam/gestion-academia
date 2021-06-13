<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/gestion");
});


Route::post("/guardar", "App\Http\Controllers\GestionController@guardar" );

Route::get("/supr", "App\Http\Controllers\GestionController@supr" );

Route::get('/gestion', function () {

    $cursos = DB::select('select cu_id,cu_nombre from cursos');

    $instructores = DB::select('select in_id,in_nombre from instructores');
    
    $query = DB::select('select instructores.in_id, instructores.in_nombre, cursos.cu_id, cursos.cu_nombre, curso_instructors.id from instructores
    INNER JOIN curso_instructors on instructores.in_id = curso_instructors.instructor_id
    INNER JOIN cursos on curso_instructors.curso_id = cursos.cu_id');

    return view('gestion', compact('instructores','cursos','query'));
        
});