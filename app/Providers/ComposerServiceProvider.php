<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.partials.footer', function ($view) {
            $generalSettings = GeneralSetting::first();
            $pages = Page::where('is_published', true)->orderBy('title')->get();

            $view->with('generalSettings', $generalSettings);
            $view->with('pages', $pages);
        });

        View::share('generalSetting', GeneralSetting::first());
    }
}
