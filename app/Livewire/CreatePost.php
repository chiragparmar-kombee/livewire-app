<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Title;

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();

        return redirect()->to('/posts');
    }

    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.create-post');
    }
}
