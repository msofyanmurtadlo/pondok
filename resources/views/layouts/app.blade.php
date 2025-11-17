<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - ' : '' }}{{ $generalSetting->site_name ?? config('app.name', 'Web Pondok') }}
    </title>
    <meta name="description"
        content="{{ $Description ?? ($generalSetting->site_description ?? config('app.name', 'Web Pondok')) }}">
    <meta name="keywords"
        content="{{ $Keywords ?? ($generalSetting->seo_keywords ?? config('app.name', 'Web Pondok')) }}">
    @if ($generalSetting->site_favicon)
        <link rel="icon" href="{{ asset('storage/' . $generalSetting->site_favicon) }}" type="image/x-icon">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @if ($generalSetting->google_analytics_id)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $generalSetting->google_analytics_id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '{{ $generalSetting->google_analytics_id }}');
        </script>
    @endif

    @if ($generalSetting->posthog_html_snippet)
        {!! $generalSetting->posthog_html_snippet !!}
    @endif
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div id="app">
        <x-partials.header :generalSetting="$generalSetting" />

        <main>
            {{ $slot }}
        </main>

        <x-partials.footer :generalSetting="$generalSetting" />
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.0/dist/flowbite.min.js"></script>

</body>

</html>
