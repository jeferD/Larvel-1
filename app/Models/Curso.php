<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'descripcion', 'categoria'];//guarda los datos que uno quiere
    protected $guarded = [];//guarda los campos que uno no quiere
    // protected $table = "Curso"; //se agrega para apuntar una tabla y poderla administrar
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
