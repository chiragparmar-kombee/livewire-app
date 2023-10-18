<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required|min:5|max:100')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function store()
    {
        $this->validate();
        Post::create($this->all());
    }
}
