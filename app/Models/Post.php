<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Asignacion Masiva
    protected $guarded = ['id', 'created_at', 'update_at'];

    // URL Amigable
    /* public function getRouteKeyName()
    {
        return 'slug';
    } */

    // Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relacion de uno a muchos
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    // Relacion Muchos A Muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function likeUsers(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion Uno A uno

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
