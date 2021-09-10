<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // Asignacion Masiva
    protected $fillable = ['name', 'slug', 'color'];

    // URL Amigable
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relacion Muchos A Muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
