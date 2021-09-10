<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Asignacion Masiva
    protected $fillable = ['name', 'slug'];

    //URL Amigable
    public function getRouteKeyName()
    {
        return "slug";
    }

     //Relacion Uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
