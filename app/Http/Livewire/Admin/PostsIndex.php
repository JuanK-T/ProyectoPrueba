<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $posts = Post::where('idUserFK', auth()->user()->id)
            ->where('name', 'LIKE','%' .$this->search. '%')
            ->latest('id')
            ->paginate(5);
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
