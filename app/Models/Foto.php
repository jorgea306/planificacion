<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;


    public function contenido()
    {
        return $this->hasOne('App\Models\Contenido', 'id', 'contenido_id');
    }
}
