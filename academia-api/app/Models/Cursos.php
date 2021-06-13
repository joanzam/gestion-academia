<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    public function instructores(){
        
        return $this->belongsToMany('\App\Models\Instructores', 'curso_instructor'); // Relacion Muchos a muchos
    }

    public $timestamps = false;           //<= elimina el error y deja actualizar

    protected $fillable = ['cu_nombre'];  //<= permite modificacion del campo
    
    protected $primaryKey = 'cu_id';      //<= establece la llave y elimina errores de busquedas

        
}
