<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Page;
use Livewire\Livewire;
use App\Models\Akademik;
use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('general_settings')) {
            $generalSetting = GeneralSetting::first();
            View::share('generalSetting', $generalSetting);
        }

        if (Schema::hasTable('pages')) {
            $pages = Page::where('is_published', true)->get();
            View::share('pages', $pages);
        }

        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share('categories', $categories);
        }

        if (Schema::hasTable('tags')) {
            $tags = Tag::all();
            View::share('tags', $tags);
        }
        if (Schema::hasTable('akademiks')) {
            $akademiks = Akademik::all();
            View::share('akademiks', $akademiks);
        }

    }
}
