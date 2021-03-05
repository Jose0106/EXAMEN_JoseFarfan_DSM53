<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'description',
        'image'
    ]; 
    //Una categoria puede puede estar en uno o muchos post

    public function category(){
        return $this->hasMany(Post::class);
    } 
}
