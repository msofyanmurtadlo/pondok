<div>
    <div class="relative py-20 md:py-32 text-white text-center bg-cover bg-center"
        @if ($akademik->image) style="background-image: url('{{ asset('storage/' . $akademik->image) }}');" @else style="background-color: #1a202c;" @endif>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative container mx-auto px-6 z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">{{ $akademik->title }}</h1>

        </div>
    </div>

    {{-- akademik Content --}}
    <div class="max-w-screen-xl mx-auto px-4 py-12 flex flex-wrap">
        <div class="w-full">
            <section class="bg-white py-8 lg:py-16 antialiased">
                <div class="max-w-4xl px-4 mx-auto">
                    <div class="text-gray-700 leading-relaxed text-lg prose">
                        {!! $akademik->content !!}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
