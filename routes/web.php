<?php

use App\Livewire\HomePage;
use App\Livewire\PageShow;
use App\Livewire\PostShow;
use App\Livewire\PostsIndex;
use App\Livewire\SearchPage;
use App\Livewire\AkademikShow;
use App\Livewire\AkademikIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');

Route::get('/', HomePage::class)->name('home');

Route::get('/search', SearchPage::class)->name('search');

Route::get('/artikel', PostsIndex::class)->name('articles');

Route::get('/artikel/{slug}', PostShow::class)->name('article.show');

Route::get('/akademik', AkademikIndex::class)->name('akademik');

Route::get('/akademik/{slug}', AkademikShow::class)->name('akademik.show');

Route::get('/{slug}', PageShow::class)->name('page.show');
