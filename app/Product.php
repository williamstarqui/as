<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'marca', 'descripcion', 'precio', 'foto',
    ];
}
