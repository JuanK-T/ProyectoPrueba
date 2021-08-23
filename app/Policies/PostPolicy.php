<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // Regla de Autorizacion
    public function author(?User $user, Post $post){
        if($user->id == $post->idUserFK){
            return true;
        }else{
            return false;
        }
    }

    // Esto no me permite ver los Blos en estado inactivo
    public function published(User $user, Post $post){
        if($post->status == 2){
            return true;
        }else{
            return false;
        }
    }
}
