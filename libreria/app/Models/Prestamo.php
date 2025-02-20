<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public function libros(){
        return $this->belongsToMany(Libro::class);
        }
    public function socios(){
        return $this->belongsToMany(Socio::class);
        }
}
