<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
    protected $listeners = [
        'postCreated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post', [
            'posts' => Post::latest()->get()
        ]);
    }
}
