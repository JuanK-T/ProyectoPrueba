<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relacion Muchos A Muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion Uno A uno

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
