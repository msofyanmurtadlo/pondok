<section class="bg-gray-50 py-16 lg:py-24">
    <div class="max-w-screen-xl px-4 mx-auto">

        <div class="text-center max-w-2xl mx-auto mb-12 lg:mb-16">
            <h2 class="inline-block text-4xl font-extrabold tracking-tight text-gray-900 md:text-5xl">
                <span style="box-shadow: inset 0 -0.3em 0 #FCD34D;">Akademik</span>
            </h2>
            <p class="mt-4 text-lg font-light text-gray-500">
                Perpaduan pendidikan pesantren dan perguruan tinggi yang bermutu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">

            @forelse ($akademiks as $akademik)
                <div>
                    <a href="{{ route('akademik.show', $akademik->slug) }}"
                        class="block relative w-full aspect-square overflow-hidden rounded-lg shadow-lg group">
                        <div class="absolute inset-0 ">
                            <img src="{{ asset('storage/' . $akademik->image) }}" alt="{{ $akademik->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end transition-all">
                            <h3 class="p-6 text-2xl font-semibold text-white tracking-tight">
                                {{ $akademik->title }}
                            </h3>
                        </div>
                    </a>
                    <p class="mt-6 text-base text-gray-700">
                        {{ Str::limit(strip_tags($akademik->excerpt), 150, '...') }}
                    </p>
                </div>
            @empty
                <div class="md:col-span-3 text-center text-gray-500">
                    <p>Belum ada informasi akademik yang tersedia saat ini.</p>
                </div>
            @endforelse

        </div>

        <div class="mt-12 lg:mt-16">
            {{ $akademiks->links() }}
        </div>

    </div>
</section>
