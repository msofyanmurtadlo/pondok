<footer class="bg-gray-800 text-white py-8">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                @if ($generalSetting->site_logo)
                    <img src="{{ asset('storage/' . $generalSetting->site_logo) }}"
                        alt="{{ $generalSetting->site_name ?? 'Logo' }}" class="h-12 mb-4">
                @endif
                <p class="text-gray-400">
                    {{ $generalSetting->site_description ?? 'Pesantren adalah lembaga pendidikan Islam yang berdedikasi untuk mencetak generasi Qur\'ani yang berakhlak mulia dan berwawasan luas.' }}
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    @if (isset($pages) && $pages->count() > 0)
                        @foreach ($pages->where('menu', 'profil') as $page)
                            <li><a href="{{ route('page.show', $page->slug) }}"
                                    class="hover:text-green-400">{{ $page->title }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#" class="hover:text-green-400">Profil</a></li>
                        <li><a href="#" class="hover:text-green-400">Program</a></li>
                        <li><a href="#" class="hover:text-green-400">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-green-400">Berita</a></li>
                    @endif
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                @if ($generalSetting->more_configs && isset(json_decode($generalSetting->more_configs)->address))
                    <p class="text-gray-400 mb-2">{{ json_decode($generalSetting->more_configs)->address }}</p>
                @else
                    <p class="text-gray-400 mb-2">Jl. KH. Abdul Hamid VIII/14 Kebonsari Kota Pasuruan, Jawa Timur,
                        Indonesia</p>
                @endif
                @if ($generalSetting->support_email)
                    <p class="text-gray-400 mb-2">Email: {{ $generalSetting->support_email }}</p>
                @else
                    <p class="text-gray-400 mb-2">Email: info@pesantren.sch.id</p>
                @endif
                @if ($generalSetting->support_phone)
                    <p class="text-gray-400">Telp: {{ $generalSetting->support_phone }}</p>
                @else
                    <p class="text-gray-400">Telp: (021) 123-4567</p>
                @endif

                @if ($generalSetting->social_network)
                    <div class="flex space-x-4 mt-4">
                        @foreach (json_decode($generalSetting->social_network) as $platform => $url)
                            @if ($url)
                                <a href="{{ $url }}" target="_blank"
                                    class="text-gray-400 hover:text-green-400 capitalize">
                                    @if ($platform === 'facebook')
                                        <i class="fab fa-facebook-f"></i>
                                    @elseif ($platform === 'twitter')
                                        <i class="fab fa-twitter"></i>
                                    @elseif ($platform === 'instagram')
                                        <i class="fab fa-instagram"></i>
                                    @elseif ($platform === 'youtube')
                                        <i class="fab fa-youtube"></i>
                                    @elseif ($platform === 'linkedin')
                                        <i class="fab fa-linkedin-in"></i>
                                    @else
                                        <i class="fas fa-link"></i>
                                    @endif
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-6 text-center text-gray-500">
            &copy; {{ date('Y') }} {{ $generalSetting->site_name ?? 'Nama Pesantren' }}. All rights reserved.
        </div>
    </div>
</footer>
