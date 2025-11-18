@props(['generalSetting', 'pages', 'categories', 'akademiks'])

<nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default sticky">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <div class="flex items-center justify-between w-full md:pb-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/' . $generalSetting->site_logo) }}"
                    alt="{{ $generalSetting->site_name ?? 'Logo' }}" class="h-7">
                <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">
                    {{ $generalSetting->site_name }}
                </span>
            </a>

            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                @livewire('navigation-search')
            </div>

            <button data-collapse-toggle="navbar-menu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="hidden md:block w-full border-t border-default"></div>

        <div class="items-center hidden w-full md:flex md:justify-center" id="navbar-menu">

            <div class="relative mt-4 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                @livewire('navigation-search')
            </div>

            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-4 md:border-0 md:bg-neutral-primary">

                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 {{ request()->routeIs('home') ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0"
                        aria-current="page">Beranda</a>
                </li>

                <li>
                    <button id="dropdownProfilLink" data-dropdown-toggle="dropdownProfil"
                        class="flex items-center justify-between w-full py-2 px-3 {{ $pages->where('menu', 'profil')->contains(fn($page) => request()->url() == route('page.show', $page->slug)) ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Profil
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownProfil"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownProfilLink">
                            @foreach ($pages->where('menu', 'profil') as $page)
                                <li>
                                    <a href="{{ route('page.show', $page->slug) }}"
                                        class="block px-4 py-2 {{ request()->url() == route('page.show', $page->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownAkademikLink" data-dropdown-toggle="dropdownAkademik"
                        class="flex items-center justify-between w-full py-2 px-3 {{ request()->routeIs('akademik*') ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Akademik
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownAkademik"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownAkademikLink">
                            <li>
                                <a href="{{ route('akademik') }}"
                                    class="block px-4 py-2 {{ request()->routeIs('akademik') && !request()->query() ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">Semua
                                    Akademik</a>
                            </li>
                            @foreach ($akademiks as $akademik)
                                <li>
                                    <a href="{{ route('akademik.show', $akademik->slug) }}"
                                        class="block px-4 py-2 {{ request()->is('akademik/' . $akademik->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $akademik->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownPenelitianLink" data-dropdown-toggle="dropdownPenelitian"
                        class="flex items-center justify-between w-full py-2 px-3 {{ $pages->where('menu', 'penelitian')->contains(fn($page) => request()->url() == route('page.show', $page->slug)) ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Penelitian
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownPenelitian"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownPenelitianLink">
                            @foreach ($pages->where('menu', 'penelitian') as $page)
                                <li>
                                    <a href="{{ route('page.show', $page->slug) }}"
                                        class="block px-4 py-2 {{ request()->url() == route('page.show', $page->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownArticleLink" data-dropdown-toggle="dropdownArticle"
                        class="flex items-center justify-between w-full py-2 px-3 {{ request()->is('artikel*') ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Artikel
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownArticle"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownArticleLink">
                            <li>
                                <a href="{{ route('articles') }}"
                                    class="block px-4 py-2 {{ request()->routeIs('articles') && !request()->query('category') ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">Semua
                                    Artikel</a>
                            </li>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('articles', ['category' => $category->slug]) }}"
                                        class="block px-4 py-2 {{ request()->query('category') == $category->slug ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownPengabdianLink" data-dropdown-toggle="dropdownPengabdian"
                        class="flex items-center justify-between w-full py-2 px-3 {{ $pages->where('menu', 'pengabdian')->contains(fn($page) => request()->url() == route('page.show', $page->slug)) ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Pengabdian
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownPengabdian"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownPengabdianLink">
                            @foreach ($pages->where('menu', 'pengabdian') as $page)
                                <li>
                                    <a href="{{ route('page.show', $page->slug) }}"
                                        class="block px-4 py-2 {{ request()->url() == route('page.show', $page->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownKemahasantrianLink" data-dropdown-toggle="dropdownKemahasantrian"
                        class="flex items-center justify-between w-full py-2 px-3 {{ $pages->where('menu', 'kemahasantrian')->contains(fn($page) => request()->url() == route('page.show', $page->slug)) ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Kemahasantrian
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownKemahasantrian"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownKemahasantrianLink">
                            @foreach ($pages->where('menu', 'kemahasantrian') as $page)
                                <li>
                                    <a href="{{ route('page.show', $page->slug) }}"
                                        class="block px-4 py-2 {{ request()->url() == route('page.show', $page->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 {{ $pages->where('menu', 'informasi')->contains(fn($page) => request()->url() == route('page.show', $page->slug)) ? 'text-fg-brand' : 'text-heading' }} rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:w-auto">
                        Informasi
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink">
                            @foreach ($pages->where('menu', 'informasi') as $page)
                                <li>
                                    <a href="{{ route('page.show', $page->slug) }}"
                                        class="block px-4 py-2 {{ request()->url() == route('page.show', $page->slug) ? 'font-bold text-fg-brand' : 'hover:bg-gray-100' }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/#pendaftaran"
                        class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
