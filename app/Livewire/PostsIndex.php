<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    public $category = null;
    public $tag = null;
    public $title = 'Semua Artikel';

    protected $queryString = [
        'category' => ['except' => ''],
        'tag' => ['except' => ''],
    ];

    public function mount()
    {
        if (request()->has('category')) {
            $this->category = request()->query('category');
            $categoryModel = Category::where('slug', $this->category)->first();
            if ($categoryModel) {
                $this->title = 'Artikel Kategori: ' . $categoryModel->name;
            }
        }

        if (request()->has('tag')) {
            $this->tag = request()->query('tag');
            $tagModel = Tag::where('slug', $this->tag)->first();
            if ($tagModel) {
                $this->title = 'Artikel Tag: ' . $tagModel->name;
            }
        }
    }

    public function render()
    {
        $posts = Post::with('user', 'category', 'tags')
            ->when($this->category, function ($query) {
                $query->whereHas('category', function ($query) {
                    $query->where('slug', $this->category);
                });
            })
            ->when($this->tag, function ($query) {
                $query->whereHas('tags', function ($query) {
                    $query->where('slug', $this->tag);
                });
            })
            ->latest()
            ->paginate(9);

        return view('livewire.posts-index', [
            'posts' => $posts,
            'title' => $this->title,
        ])->layout('layouts.app', [
            'title' => $this->title,
            'description' => 'Semua artikel terbaru',
            'keywords' => 'artikel, blog, posts',
        ]);
    }
}
