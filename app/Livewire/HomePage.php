<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Akademik;
use App\Models\GeneralSetting;

class HomePage extends Component
{
    public function render()
    {
        $latestPosts = Post::with('user', 'category')->latest()->take(3)->get();
        $akademiks = Akademik::latest()->take(6)->get();
        $settings = GeneralSetting::first();

        return view('livewire.home-page', [
            'latestPosts' => $latestPosts,
            'generalSetting' => $settings,
            'akademiks' => $akademiks,
        ])->layout('layouts.app', ['title' => 'Home']);
    }
}
