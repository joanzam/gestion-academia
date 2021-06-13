<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GestionController extends Controller
{
    function supr(Request $request){
        
        $rela_id = $request->get("id");
        
        // Via api - seccion para eliminar un instructor asociado al curso
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://localhost:8000/api/cursos_instructores/'.$rela_id]);
        $response = $client->delete('http://localhost:8000/api/cursos_instructores/'.$rela_id);
        $pivote = $response->getBody()->getContents();
        
        return redirect("/gestion");
    }

    function guardar(Request $request){

        $in_id = $request->get("in_id");
        $cu_id = $request->get("cu_id");
        $fecha = date('Y-m-d H:i:s');
        
        // Via api - agregar datos a la relacion curso_instructor a la api
        $client = new \GuzzleHttp\Client();    
        $response = $client->post("http://localhost:8000/api/cursos_instructores/",
            array(
                "form_params" => array(
                    "curso_id" => $cu_id,
                    "instructor_id" => $in_id,
                    "created_at" => "$fecha",
                    "updated_at" => "$fecha"
                )
            )
        );
        $pivote = $response->getBody()->getContents();

        return redirect("/gestion");
    }
}
