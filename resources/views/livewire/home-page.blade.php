<div>
    <section class="bg-cover bg-center min-h-[75vh] flex items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('storage/gedung.jpg') }}');">

        <div class="grid max-w-screen-xl px-4 py-16 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">

            <div class="mr-auto place-self-center lg:col-span-7">
                <p class="mb-4 text-sm font-semibold text-white uppercase tracking-wider">
                    Selamat Datang
                </p>

                <h1
                    class="max-w-2xl mb-8 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                    {{ $generalSetting->site_name ?? 'Ma\'had Aly Salafiyah' }}
                </h1>

                <p class="max-w-2xl mb-10 font-light text-gray-200 md:text-lg lg:text-xl">
                    {{ $generalSetting->site_description ?? 'Membangun Generasi Rabbani dengan Ilmu dan Akhlak Mulia' }}
                </p>

                <a href="#pendaftaran"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Info Pendaftaran
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#profil"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:ring-gray-100">
                    Lihat Profil
                </a>
            </div>

            <div class="mt-10 lg:mt-0 lg:col-span-5 flex items-center justify-start lg:justify-center">

                <a href="https://www.youtube.com/@mahadalysalafiyah" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center group" aria-label="Tonton Video di YouTube">

                    <div
                        class="w-20 h-20 bg-white/30 rounded-full flex items-center justify-center
                            text-white backdrop-blur-sm transition
                            group-hover:bg-white/50
                            focus:outline-none focus:ring-4 focus:ring-white/50">

                        <svg class="w-10 h-10 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <p class="ml-4 text-sm font-semibold text-white uppercase tracking-wider">
                        Tonton Video <br>
                        Kami
                    </p>

                </a>

            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-16 lg:py-24">
        <div class="grid max-w-screen-xl px-4 mx-auto lg:grid-cols-12 lg:gap-16 items-center">

            <div class="lg:col-span-5">
                <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 md:text-5xl">
                    <span style="box-shadow: inset 0 -0.4em 0 #FCD34D;">Mahasantri,</span> menjaga tradisi dan memberi
                    solusi.
                </h2>

                <div id="toast-notification" class="w-full max-w-md p-4 text-gray-900 bg-white rounded-lg shadow-lg"
                    role="alert">
                    <div class="flex items-center">
                        <div
                            class="inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-gray-900 bg-yellow-300 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 32.91 32.91 0 0013.484 0 .75.75 0 00.515-1.076A11.44 11.44 0 0116 8a6 6 0 00-6-6zM8.25 15a.75.75 0 01.75-.75h2a.75.75 0 010 1.5h-2a.75.75 0 01-.75-.75z">
                                </path>
                            </svg>
                            <span class="sr-only">Ikon Notifikasi</span>
                        </div>
                        <a href="#pendaftaran" class="ms-3 text-base font-semibold">Ingin jadi mahasantri baru?</a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 mt-12 lg:mt-0">
                <div class="relative w-full" style="padding-top: 66.66%;">
                    <div class="absolute inset-0 grid grid-cols-5 grid-rows-2 gap-4">

                        <img class="w-full h-full object-cover rounded-lg shadow-md col-span-3"
                            src="{{ asset('storage/' . '1.jpeg') }}" alt="Foto seminar atau diskusi">

                        <img class="w-full h-full object-cover rounded-lg shadow-md col-span-2"
                            src="{{ asset('storage/' . '2.jpeg') }}" alt="Foto santri mengaji kitab">

                        <img class="w-full h-full object-cover rounded-lg shadow-md col-span-2"
                            src="{{ asset('storage/' . '3.jpeg') }}" alt="Foto bersama ujian">

                        <img class="w-full h-full object-cover rounded-lg shadow-md col-span-3"
                            src="{{ asset('storage/' . '4.jpeg') }}" alt="Foto forum bahtsul masail">
                    </div>

                    <div class="absolute top-1/2 left-1/2 z-10 w-5/12 aspect-square -translate-x-1/2 -translate-y-1/2">
                        <img class="w-full h-full object-cover rounded-full shadow-xl border-4 border-white"
                            src="{{ asset('storage/' . '5.jpeg') }}" alt="Foto santri membaca di perpustakaan">
                    </div>

                    <div class="absolute bottom-0 right-0 -mb-4 -mr-4 w-24 h-24" style="z-index: -1;">
                        <svg class="text-blue-100" fill="currentColor" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" />
                            <circle cx="14" cy="2" r="2" />
                            <circle cx="26" cy="2" r="2" />
                            <circle cx="38" cy="2" r="2" />
                            <circle cx="50" cy="2" r="2" />
                            <circle cx="62" cy="2" r="2" />
                            <circle cx="74" cy="2" r="2" />
                            <circle cx="86" cy="2" r="2" />
                            <circle cx="98" cy="2" r="2" />
                            <circle cx="2" cy="14" r="2" />
                            <circle cx="14" cy="14" r="2" />
                            <circle cx="26" cy="14" r="2" />
                            <circle cx="38" cy="14" r="2" />
                            <circle cx="50" cy="14" r="2" />
                            <circle cx="62" cy="14" r="2" />
                            <circle cx="74" cy="14" r="2" />
                            <circle cx="86" cy="14" r="2" />
                            <circle cx="98" cy="14" r="2" />
                            <circle cx="2" cy="26" r="2" />
                            <circle cx="14" cy="26" r="2" />
                            <circle cx="26" cy="26" r="2" />
                            <circle cx="38"cy="26" r="2" />
                            <circle cx="50" cy="26" r="2" />
                            <circle cx="62" cy="26" r="2" />
                            <circle cx="74" cy="26" r="2" />
                            <circle cx="86" cy="26" r="2" />
                            <circle cx="98" cy="26" r="2" />
                            <circle cx="2" cy="38" r="2" />
                            <circle cx="14" cy="38" r="2" />
                            <circle cx="26" cy="38" r="2" />
                            <circle cx="38" cy="38" r="2" />
                            <circle cx="50" cy="38" r="2" />
                            <circle cx="62" cy="38" r="2" />
                            <circle cx="74" cy="38" r="2" />
                            <circle cx="86" cy="38" r="2" />
                            <circle cx="98" cy="38" r="2" />
                            <circle cx="2" cy="50" r="2" />
                            <circle cx="14" cy="50" r="2" />
                            <circle cx="26" cy="50" r="2" />
                            <circle cx="38" cy="50" r="2" />
                            <circle cx="50" cy="50" r="2" />
                            <circle cx="62" cy="50" r="2" />
                            <circle cx="74" cy="50" r="2" />
                            <circle cx="86" cy="50" r="2" />
                            <circle cx="98" cy="50" r="2" />
                            <circle cx="2" cy="62" r="2" />
                            <circle cx="14" cy="62" r="2" />
                            <circle cx="26" cy="62" r="2" />
                            <circle cx="38" cy="62" r="2" />
                            <circle cx="50" cy="62" r="2" />
                            <circle cx="62" cy="62" r="2" />
                            <circle cx="74" cy="62" r="2" />
                            <circle cx="86" cy="62" r="2" />
                            <circle cx="98" cy="62" r="2" />
                            <circle cx="2" cy="74" r="2" />
                            <circle cx="14" cy="74" r="2" />
                            <circle cx="26" cy="74" r="2" />
                            <circle cx="38" cy="74" r="2" />
                            <circle cx="50" cy="74" r="2" />
                            <circle cx="62" cy="74" r="2" />
                            <circle cx="74" cy="74" r="2" />
                            <circle cx="86" cy="74" r="2" />
                            <circle cx="98" cy="74" r="2" />
                            <circle cx="2" cy="86" r="2" />
                            <circle cx="14" cy="86" r="2" />
                            <circle cx="26" cy="86" r="2" />
                            <circle cx="38" cy="86" r="2" />
                            <circle cx="50" cy="86" r="2" />
                            <circle cx="62" cy="86" r="2" />
                            <circle cx="74" cy="86" r="2" />
                            <circle cx="86" cy="86" r="2" />
                            <circle cx="98" cy="86" r="2" />
                            <circle cx="2" cy="98" r="2" />
                            <circle cx="14" cy="98" r="2" />
                            <circle cx="26" cy="98" r="2" />
                            <circle cx="38" cy="98" r="2" />
                            <circle cx="50" cy="98" r="2" />
                            <circle cx="62" cy="98" r="2" />
                            <circle cx="74" cy="98" r="2" />
                            <circle cx="86" cy="98" r="2" />
                            <circle cx="98" cy="98" r="2" />
                        </svg>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="bg-white" id="profil">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">

            <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Kenapa Memilih Ma'had Aly
                    Salafiyah?</h2>
                <p class="text-gray-500 sm:text-xl">
                    Komitmen kamialah menyediakan lingkungan belajar yang Islami (bi'ah shalihah) dan kurikulum yang
                    autentik.
                </p>
            </div>

            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Manhaj Salafus Shalih</h3>
                    <p class="text-gray-500">Pendidikan akidah dan ibadah berasaskan Al-Qur'an dan Sunnah sesuai dengan
                        pemahaman Salafus Shalih.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 005.5 16c1.255 0 2.443-.29 3.5-.804v-10A7.968 7.968 0 009 4.804z">
                            </path>
                            <path
                                d="M15 4.804A7.968 7.968 0 0011.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 0011.5 16c1.255 0 2.443-.29 3.5-.804v-10A7.968 7.968 0 0015 4.804z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Kurikulum Diniyah Intensif</h3>
                    <p class="text-gray-500">Fokus pada penguasaan ilmu alat (Bahasa Arab), hafalan Al-Qur'an, dan
                        kajian kitab-kitab turats (klasik).</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-gray-900">Asatidz Kompeten</h3>
                    <p class="text-gray-500">Dibimbing langsung oleh para asatidz (ustadz) yang memiliki sanad keilmuan
                        yang jelas dan kompeten di bidangnya.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50" id="tentang">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Tentang
                    {{ $generalSetting->site_name ?? 'Ma\'had Aly Salafiyah' }}</h2>
                <p class="mb-4">
                    {{ $generalSetting->site_name ?? 'Ma\'had Aly Salafiyah' }} adalah lembaga pendidikan tinggi Islam
                    yang berfokus pada
                    pengkaderan ulama dan
                    da'i. Kami berdedikasi untuk membekali para santri (thullab) dengan pemahaman Islam yang
                    komprehensif dan murni, langsung dari sumber otentiknya.
                </p>
                <p>
                    Dengan bimbingan asatidz yang ahli di bidangnya, kami menerapkan kurikulum yang ketat, menggabungkan
                    antara hafalan matan-matan ilmiyah, penguasaan bahasa Arab, dan pendalaman kitab-kitab para ulama
                    salaf. Visi kami adalah melahirkan generasi rabbani yang kokoh dalam ilmu dan mulia dalam akhlak.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="{{ asset('storage/' . 'f1.jpeg') ?? 'https://placehold.co/500x600/e2e8f0/64748b?text=Foto+Kegiatan+1' }}"
                    alt="Kegiatan Santri 1">
                <img class="w-full mt-4 rounded-lg lg:mt-10"
                    src="{{ asset('storage/' . 'f2.jpeg') ?? 'https://placehold.co/500x600/e2e8f0/64748b?text=Foto+Kegiatan+2' }}"
                    alt="Kegiatan Santri 2">
            </div>
        </div>
    </section>

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

                @forelse ($akademikHome as $akademik)
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
                    <p class="text-center text-gray-500 md:col-span-3">Belum ada program akademik untuk ditampilkan.
                    </p>
                @endforelse

            </div>



        </div>
    </section>

    <section class="bg-White" id="artikel">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

            <div class="max-w-screen-lg text-gray-500 sm:text-lg text-center mx-auto mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Artikel & Publikasi Terbaru</h2>
                <p class="font-light">
                    Kumpulan nasehat, faedah ilmiyah, dan informasi kegiatan dari
                    {{ $generalSetting->site_name ?? 'Ma\'had Aly Salafiyah' }}.
                </p>
            </div>

            <div class="grid gap-8 lg:grid-cols-3">

                @forelse ($latestPosts as $post)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            @if ($post->category)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                    {{ $post->category->name }}
                                </span>
                            @endif
                            <span class="text-sm">{{ $post->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><a
                                href="{{ route('article.show', $post->slug) }}">{{ $post->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500">{{ $post->excerpt }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                @if ($post->user)
                                    <img class="w-7 h-7 rounded-full"
                                        src="{{ $post->user->avatar ? asset('storage/' . $post->user->avatar) : 'https://placehold.co/28x28/e2e8f0/64748b?text=U' }}"
                                        alt="{{ $post->user->name }}" />
                                    <span class="font-medium text-gray-900">
                                        {{ $post->user->name }}
                                    </span>
                                @else
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://placehold.co/28x28/e2e8f0/64748b?text=U" alt="Penulis" />
                                    <span class="font-medium text-gray-900">
                                        Penulis
                                    </span>
                                @endif
                            </div>
                            <a href="{{ route('article.show', $post->slug) }}"
                                class="inline-flex items-center font-medium text-blue-600 hover:underline">
                                Baca selengkapnya
                            </a>
                        </div>
                    </article>
                @empty
                    <p class="text-center text-gray-500 lg:col-span-3">Belum ada artikel untuk ditampilkan.</p>
                @endforelse

            </div>
        </div>
    </section>

    <section class="bg-gray-50" id="pendaftaran">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Hubungi Kami</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 sm:text-xl">
                Untuk informasi kurikulum, biaya, atau pendaftaran, silakan hubungi kami melalui kontak di bawah atau
                kunjungi kami di lokasi.
            </p>

            <div class="lg:grid lg:grid-cols-2 lg:gap-16">

                <div>
                    <h3 class="mb-4 text-2xl font-bold text-gray-900">Informasi Kontak</h3>
                    <p class="mb-6 text-gray-500">
                        Anda juga dapat mengunjungi kami langsung di alamat berikut (dengan perjanjian).
                    </p>

                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 text-blue-600 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>
                                <strong class="text-gray-900">Alamat:</strong><br>
                                Jl. KH. Abdul Hamid VIII/14 Kebonsari Kota Pasuruan, Jawa Timur,
                                Indonesia
                            </span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-blue-600 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                </path>
                            </svg>
                            <span>
                                <strong class="text-gray-900">WhatsApp (PSB) :</strong>
                                {{ $generalSetting->support_phone ?? '(021) 123-4567' }}
                            </span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-blue-600 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.003 5.884l7.882 4.148a1 1 0 001.106 0l7.882-4.148A1 1 0 0017.602 5H2.398a1 1 0 00-.395.884z">
                                </path>
                                <path d="M18 8.118l-8 4.211L2 8.118V14a1 1 0 001 1h14a1 1 0 001-1V8.118z"></path>
                            </svg>
                            <span>
                                <strong class="text-gray-900">Email:</strong>
                                {{ $generalSetting->support_email ?? 'info@mahadalysalafiyah.id' }}
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="mt-8 lg:mt-0">
                    <h3 class="mb-4 text-2xl font-bold text-gray-900">Lokasi Kami</h3>
                    <div class="w-full h-96 rounded-lg shadow-md overflow-hidden border border-gray-200">
                        <iframe class="w-full h-full border-0"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.3731156578065!2d112.89985737500348!3d-7.6429647923730455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzgnMzQuNyJTIDExMsKwNTQnMDguOCJF!5e0!3m2!1sid!2sid!4v1763298655948!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
