<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    public function prestamo(){
        return $this->belongsToMany(Prestamo::class);
        }
}
