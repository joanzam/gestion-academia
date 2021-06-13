<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    public $timestamps = false;           //<= elimina el error y permite actualizar

    protected $fillable = ['pe_descripcion'];  //<= permite modificacion del campo
    
    protected $primaryKey = 'pe_id';      //<= establece la llave y elimina errores de busquedas
}
