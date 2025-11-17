<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public Post $post;

    public function mount($slug)
    {
        $this->post = Post::with('user', 'category', 'tags')->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.post-show')->layout('layouts.app', [
            'title' => $this->post->title,
            'description' => strip_tags(substr($this->post->excerpt, 0, 150)),
            'keywords' => $this->post->tags->pluck('name')->implode(', '),
        ]);
    }
}
