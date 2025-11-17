<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Akademik;

class AkademikShow extends Component
{
    public Akademik $akademik;

     public function mount($slug)
    {
        $this->akademik = Akademik::where('slug', $slug)->where('is_published', true)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.akademik-show')->layout('layouts.app', [
            'title' => $this->akademik->title,
            'description' => strip_tags(substr($this->akademik->content, 0, 150)),
            'keywords' => 'Pondok Pesantren',
        ]);
    }
}
