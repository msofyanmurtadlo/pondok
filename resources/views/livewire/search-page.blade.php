<div>
    <div class="max-w-screen-xl mx-auto px-4 py-12 flex flex-wrap">
        <div class="w-full md:w-2/3 md:pr-8 mb-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="mb-4">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" name="q" id="q" wire:model.debounce.500ms="q"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md"
                                placeholder="Search for anything...">
                        </div>
                    </form>

                    @if (!empty($q))
                        <div class="mt-8">
                            <h2 class="text-2xl font-bold">Search Results for "{{ $q }}"</h2>

                            <div class="mt-6">
                                @if ($posts->count())
                                    <h3 class="text-xl font-semibold">Posts</h3>
                                    <ul class="mt-4 space-y-4">
                                        @foreach ($posts as $post)
                                            <li>
                                                <a href="{{ route('article.show', $post->slug) }}"
                                                    class="text-lg font-semibold text-blue-600 hover:text-blue-800">{{ $post->title }}</a>
                                                <p class="text-gray-600">{{ $post->excerpt }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-4">
                                        {{ $posts->links() }}
                                    </div>
                                @endif

                                @if ($pages->count())
                                    <h3 class="mt-6 text-xl font-semibold">Pages</h3>
                                    <ul class="mt-4 space-y-4">
                                        @foreach ($pages as $page)
                                            <li>
                                                <a href="{{ route('page.show', $page->slug) }}"
                                                    class="text-lg font-semibold text-blue-600 hover:text-blue-800">{{ $page->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-4">
                                        {{ $pages->links() }}
                                    </div>
                                @endif

                                @if ($categories->count())
                                    <h3 class="mt-6 text-xl font-semibold">Categories</h3>
                                    <ul class="mt-4 space-y-4">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('articles', ['category' => $category->slug]) }}"
                                                    class="text-lg font-semibold text-blue-600 hover:text-blue-800">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-4">
                                        {{ $categories->links() }}
                                    </div>
                                @endif

                                @if ($tags->count())
                                    <h3 class="mt-6 text-xl font-semibold">Tags</h3>
                                    <ul class="mt-4 space-y-4">
                                        @foreach ($tags as $tag)
                                            <li>
                                                <a href="{{ route('articles', ['tag' => $tag->slug]) }}"
                                                    class="text-lg font-semibold text-blue-600 hover:text-blue-800">{{ $tag->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-4">
                                        {{ $tags->links() }}
                                    </div>
                                @endif

                                @if (!$posts->count() && !$pages->count() && !$categories->count() && !$tags->count())
                                    <p class="text-gray-600">No results found.</p>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <x-partials.sidebar />
    </div>
</div>
