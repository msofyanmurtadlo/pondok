<div>
    <div class="max-w-screen-xl mx-auto px-4 py-12 flex flex-wrap">
        <div class="w-full md:w-2/3 md:pr-8 mb-12">
            <section class="bg-white py-8 lg:py-16 antialiased">
                <div class="max-w-3xl px-4 mx-auto">
                    <header class="mb-4 lg:mb-6">
                        <div class="flex justify-between items-center mb-4 lg:mb-6">
                            @if ($post->category)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                        </path>
                                    </svg>
                                    {{ $post->category->name }}
                                </span>
                            @endif
                            @if ($post->created_at)
                                <p class="text-sm text-gray-500">
                                    <time pubdate datetime="{{ $post->created_at->toDateString() }}">
                                        {{ $post->created_at->format('d F Y') }}
                                    </time>
                                </p>
                            @endif
                        </div>

                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">
                            {{ $post->title }}
                        </h1>


                        <div class="flex items-center mb-6">
                            @if ($post->user && $post->user->avatar)
                                <img class="w-10 h-10 rounded-full mr-3"
                                    src="{{ asset('storage/' . $post->user->avatar) }}" alt="{{ $post->user->name }}">
                            @else
                                <img class="w-10 h-10 rounded-full mr-3"
                                    src="https://placehold.co/100x100/e2e8f0/64748b?text=Ustadz" alt="Ustadz Fulan">
                            @endif
                            <div>
                                <p class="font-medium text-gray-900 text-lg">{{ $post->user->name ?? 'Ustadz Fulan' }}
                                </p>
                            </div>
                        </div>
                    </header>

                    @if ($post->image)
                        <figure class="mb-6">
                            <img class="w-full rounded-lg shadow-lg" src="{{ asset('storage/' . $post->image) }}"
                                alt="{{ $post->title }}">
                            @if ($post->image_caption)
                                <figcaption class="text-center mt-2 text-sm text-gray-500">{{ $post->image_caption }}
                                </figcaption>
                            @endif
                        </figure>
                    @endif


                    <article class="format format-lg  prose">
                        {!! $post->content !!}
                    </article>

                    @if ($post->tags->isNotEmpty())
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <span class="font-semibold text-gray-900 mr-2">Tags:</span>
                            <div class="inline-flex flex-wrap gap-2">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('articles', ['tag' => $tag->slug]) }}"
                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded hover:bg-gray-200">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </div>
        <x-partials.sidebar />
    </div>
</div>
