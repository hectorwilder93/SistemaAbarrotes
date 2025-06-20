<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //relacion inversa
    use HasFactory;

    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}
