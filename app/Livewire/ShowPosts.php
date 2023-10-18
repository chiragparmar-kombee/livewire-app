<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Renderless;

class ShowPosts extends Component
{

    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    #[Renderless]
    public function incrementViewCount()
    {
        $this->post->incrementViewCount();
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        //$this->authorize('delete', $post);

        $post->delete();
    }

    public function getPostCount()
    {
        return Post::count();
    }

    #[Title('Posts')]
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::get(),
            'sortAsc' => NULL
        ]);
    }
}
