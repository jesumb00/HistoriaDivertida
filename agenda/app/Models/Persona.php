<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Persona extends Model
{
    use HasFactory;
    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

   /* public function user(){
        return $this->belongsTo(User::class);
    }*/
}
