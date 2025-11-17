<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class PageShow extends Component
{
    public Page $page;

    public function mount($slug)
    {
        $this->page = Page::where('slug', $slug)->where('is_published', true)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.page-show')->layout('layouts.app', [
            'title' => $this->page->title,
            'description' => strip_tags(substr($this->page->content, 0, 150)),
            'keywords' => 'Pondok Pesantren',
        ]);
    }
}
