<div class="w-full md:w-1/3">
    <div class="bg-white shadow-sm sm:rounded-lg p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Search</h3>
        <form action="{{ route('search') }}" method="GET">
            <input type="search" name="q" placeholder="Search..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" class="sr-only">Search</button>
        </form>
    </div>

    <div class="bg-white shadow-sm sm:rounded-lg p-6 mb-6">
        <h3 class="text-xl font-semibold mb-4">Categories</h3>
        <ul>
            @foreach ($categories as $category)
                <li class="mb-2">
                    <a href="{{ route('articles', ['category' => $category->slug]) }}"
                        class="text-blue-600 hover:text-blue-800">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="bg-white shadow-sm sm:rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Tags</h3>
        <div class="flex flex-wrap gap-2">
            @foreach ($tags as $tag)
                <a href="{{ route('articles', ['tag' => $tag->slug]) }}"
                    class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded-full hover:bg-blue-200">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>
    </div>
</div>