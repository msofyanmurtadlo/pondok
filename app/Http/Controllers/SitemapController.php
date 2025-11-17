<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{

    public function index(Request $request)
    {
        $sitemap = Sitemap::create();

        $sitemap->add(
            Url::create(route('home'))
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
        );

        $sitemap->add(
            Url::create(route('articles'))
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
        );

        $sitemap->add(
            Url::create(route('akademik'))
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
        );

        $akademiks = Akademik::all();
        foreach ($akademiks as $akademik) {
            $sitemap->add(
                Url::create(route('akademik.show', $akademik->slug))
                    ->setLastModificationDate($akademik->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        }

        $posts = Post::all();
        foreach ($posts as $post) {
            $sitemap->add(
                Url::create(route('article.show', $post->slug))
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        }

        $pages = Page::all();
        foreach ($pages as $page) {
            $sitemap->add(
                Url::create(route('page.show', $page->slug))
                    ->setLastModificationDate($page->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.7)
            );
        }

        return $sitemap->toResponse($request);
    }
}
