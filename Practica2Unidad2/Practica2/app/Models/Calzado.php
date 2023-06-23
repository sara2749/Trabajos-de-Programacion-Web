<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calzado extends Model
{
    use HasFactory;
    protected $table = '_Calzado';
    protected $fillable = ['Marca','Categoria','Talla','Color','stock','Precio'];
    protected $hidden = ['created_at','updated_at'];
    
}
