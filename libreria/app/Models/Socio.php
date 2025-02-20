<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    public function prestamos(){
        return $this->belongsToMany(Prestamo::class);
        }
}
