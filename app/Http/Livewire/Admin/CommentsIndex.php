<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentsIndex extends Component
{
    public function render()
    {
        $post = Post::all();
        $comments = Comment::all();
        return view('livewire.admin.comments-index', compact('comments'));
    }
}
