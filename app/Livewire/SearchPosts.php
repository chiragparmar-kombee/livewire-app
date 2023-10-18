<?php

namespace App\Livewire;

use Livewire\Attributes\Js;
use Livewire\Component;
use App\Models\Post;

class SearchPosts extends Component
{
    public $query = '';

    #[Js]
    public function clear()
    {
        return <<<'JS'
            $wire.query = '';
        JS;
    }

    public function render()
    {
        return view('livewire.search-posts', [
            'posts' => Post::whereTitle($this->query)->get(),
        ]);
    }
}
