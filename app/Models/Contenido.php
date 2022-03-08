<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;

    public function foto()
    {
        return $this->belongsTo('App\Models\Foto', 'id', 'id');
    }

}
