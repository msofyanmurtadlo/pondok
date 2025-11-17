<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Page;
use App\Models\Post;
use Livewire\Component;
use App\Models\Akademik;
use App\Models\Category;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination;

    public string $q = '';

    public function mount()
    {
        $this->q = request()->query('q', '');
    }

    public function updatingQ()
    {
        $this->resetPage('postsPage');
        $this->resetPage('pagesPage');
        $this->resetPage('akademiksPage');
        $this->resetPage('categoriesPage');
        $this->resetPage('tagsPage');
    }

    public function render()
    {
        $posts = Post::whereNull('id')->paginate(10, ['*'], 'postsPage');
        $pages = Page::whereNull('id')->paginate(10, ['*'], 'pagesPage');
        $categories = Category::whereNull('id')->paginate(10, ['*'], 'categoriesPage');
        $tags = Tag::whereNull('id')->paginate(10, ['*'], 'tagsPage');
        $akademiks = Akademik::whereNull('id')->paginate(10, ['*'], 'akademiksPage');


        if (!empty($this->q)) {
            $posts = Post::with(['tags', 'category'])
                ->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->q . '%')
                          ->orWhere('content', 'like', '%' . $this->q . '%');
                })
                ->paginate(10, ['*'], 'postsPage');

            $pages = Page::where(function ($query) {
                    $query->where('title', 'like', '%' . $this->q . '%')
                          ->orWhere('content', 'like', '%' . $this->q . '%');
                })
                ->paginate(10, ['*'], 'pagesPage');

            $categories = Category::where('name', 'like', '%' . $this->q . '%')
                ->paginate(10, ['*'], 'categoriesPage');

            $tags = Tag::where('name', 'like', '%' . $this->q . '%')
                ->paginate(10, ['*'], 'tagsPage');
            $akademiks = Akademik::where('title', 'like', '%' . $this->q . '%')
                ->paginate(10, ['*'], 'akademiksPage');
        }

        return view('livewire.search-page', [
            'posts' => $posts,
            'pages' => $pages,
            'akademiks' => $akademiks,
            'categories' => $categories,
            'tags' => $tags,
        ])->layout('layouts.app');
    }
}
