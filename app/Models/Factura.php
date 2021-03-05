<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 
        'descripcion',
        'fecha'
    ];

    public function Factura(){
        return $this->hasMany(Reparacion::class);
    } 
    

}
