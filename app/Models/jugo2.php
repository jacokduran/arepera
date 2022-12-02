<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//MAARICO NO TE OLVIDES DE ESTO- PARA PODER CORREGIR MAYUSCULAS
use Illuminate\Database\Eloquent\Casts\Attribute;
class listaarepa extends Model
{
    use HasFactory;
    protected $table = "jugo";

  

   protected $filtable = [
       "jugopostre",
       "precio", 
       "descripcion",
   ]; 
   //CORREGIR MAYUSCULAS
   protected function arepa(): Attribute{
       return new Attribute(
           get: fn($value) => ucwords($value),
           set: fn($value) => strtolower($value),
       ); 
   }
}
