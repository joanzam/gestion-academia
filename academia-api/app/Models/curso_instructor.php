<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso_instructor extends Model
{
    
    public $timestamps = false;           //<= elimina el error para que deje actualizar
    
    protected $fillable = ['curso_id', 'instructor_id', 'created_at', 'updated_at' ];  //<= permite modificacion del campo

    protected $primaryKey = 'id';      //<= establece la llave y elimina errores de busquedas
}
