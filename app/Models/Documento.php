<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //Relacion uno a uno
    use HasFactory;

    public function persona(){
        return $this->hasOne(Persona::class);
    }
}
