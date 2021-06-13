<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructores extends Model
{
    public function cursos(){
        
        return $this->belongsToMany('\App\Models\Cursos', 'curso_instructor'); // Relacion Muchos a muchos
    }

    public $timestamps = false;           //<= elimina el error y permite actualizar

    protected $fillable = ['in_nombre'];  //<= permite modificacion del campo
    
    protected $primaryKey = 'in_id';      //<= establece la llave y elimina errores de busquedas
}
