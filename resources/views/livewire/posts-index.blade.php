<div>
    <div class="max-w-screen-xl mx-auto px-4 py-12 flex flex-wrap">
        <div class="w-full md:w-2/3 md:pr-8">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">{{ $title }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                @forelse($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                        <a href="{{ route('article.show', $post->slug) }}">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="text-xl font-bold mb-2">
                                <a href="{{ route('article.show', $post->slug) }}"
                                    class="hover:text-green-600">{{ $post->title }}</a>
                            </h2>
                            <p class="text-gray-600 mb-4 flex-grow">{{ Str::limit($post->excerpt, 120) }}</p>
                            <div class="text-sm text-gray-500 mt-auto">
                                <span>Oleh: {{ $post->user->name ?? 'Admin' }}</span> |
                                <span>{{ $post->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center col-span-3 text-gray-500 text-lg">Belum ada artikel untuk ditampilkan.</p>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>

        <x-partials.sidebar />
    </div>
</div>
