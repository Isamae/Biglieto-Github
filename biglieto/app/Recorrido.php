<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Recorrido as Authenticatable;
class Recorrido extends Model
{
    protected $table = 'recorrido';
    protected $primaryKey = 'idRe';
    protected $fillable = ['provincia_O','provincia_D','canton_O','canton_D','direccion_O','direccion_D'];
}
