<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    public function render()
    {
        $posts = Post::paginate(10);
        return view('livewire.post-index',['posts'=>$posts]);
    }

    public function postDelete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        flash()->addSuccess('Post Delete Successfully!');
    }

}
