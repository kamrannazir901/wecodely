<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Wecodely | Performance Marketing & Websites')</title>

        <meta name="description" content="@yield('meta_description', 'Wecodely runs performance marketing campaigns and builds websites that convert for businesses across Pakistan.')">

        <link rel="canonical" href="@yield('canonical', url()->current())">

        <!-- Favicons -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">

        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/android-chrome-512x512.png') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

        <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">

        <!-- Theme color (mobile browser UI) -->
        <meta name="theme-color" content="#1E40AF">

        <!-- Open Graph -->
        <meta property="og:title" content="@yield('og_title', 'Wecodely | Performance Marketing & Websites')">

        <meta property="og:description" content="@yield('og_description', 'Performance marketing and websites that convert, for businesses across Pakistan.')">

        <meta property="og:type" content="website">

        <meta property="og:url" content="@yield('og_url', url()->current())">

        <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">

        <meta property="og:site_name" content="Wecodely">

        <meta property="og:locale" content="en_PK">

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image">

        <meta name="twitter:title" content="@yield('twitter_title', 'Wecodely | Performance Marketing & Websites')">

        <meta name="twitter:description" content="@yield('twitter_description', 'Performance marketing and websites that convert, for businesses across Pakistan.')">

        <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.png'))">

        <!-- Global Structured Data -->
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',

                '@graph' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Website
                    |--------------------------------------------------------------------------
                    */
                    [
                        '@type' => 'WebSite',
                        '@id' => url('/') . '#website',

                        'url' => url('/'),
                        'name' => 'Wecodely',

                        'publisher' => [
                            '@id' => url('/') . '#organization',
                        ],
                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Organization
                    |--------------------------------------------------------------------------
                    */
                    [
                        '@type' => 'Organization',
                        '@id' => url('/') . '#organization',

                        'name' => 'Wecodely',

                        'url' => url('/'),

                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => asset('images/logo.png'),
                        ],

                        'image' => asset('images/logo.png'),

                        'description' =>
                            'Wecodely provides performance marketing and website development services for businesses.',

                        'areaServed' => [
                            '@type' => 'Country',
                            'name' => 'Pakistan',
                        ],

                        'founder' => [
                            '@id' => url('/') . '#founder',
                        ],

                        'sameAs' => [
                            'https://www.facebook.com/wecodely',
                            'https://www.instagram.com/wecodely',
                            'https://www.tiktok.com/@wecodely',
                            'https://www.youtube.com/@wecodely',
                        ],

                        'contactPoint' => [
                            '@type' => 'ContactPoint',
                            'telephone' => '+923185421345',
                            'contactType' => 'customer service',
                            'areaServed' => 'PK',
                            'availableLanguage' => [
                                'English',
                                'Urdu',
                            ],
                        ],
                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Founder
                    |--------------------------------------------------------------------------
                    */
                    [
                        '@type' => 'Person',
                        '@id' => url('/') . '#founder',

                        'name' => 'Kamran Nazir',

                        'image' => [
                            '@type' => 'ImageObject',
                            'url' => asset('images/founder.png'),
                        ],

                        'jobTitle' => 'Founder',
                        'description' => 'Founder of Wecodely, working with businesses on performance marketing and website development.',

                        'worksFor' => [
                            '@id' => url('/') . '#organization',
                        ],
                    ],

                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>

        {{-- Page Specific Structured Data --}}
        @stack('schema')

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#1E40AF',
                            'primary-700': '#1E3A8A',
                            dark: '#111827',
                            light: '#F9FAFB',
                        }
                    }
                }
            }
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>

    <body class="bg-white text-gray-900">

        @include('partials.header')

        <main>
            @yield('content')

            <!-- Floating WhatsApp -->
            <a href="https://wa.me/923185421345?text={{ urlencode('Hi Wecodely, I would like to discuss my requirements.') }}"
                target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"
                class="fixed bottom-5 right-5 z-50 flex items-center gap-3 rounded-full bg-green-600 px-5 py-3.5 text-base font-semibold text-white shadow-lg transition duration-300 hover:bg-green-700 hover:shadow-xl">

                <!-- WhatsApp Symbol -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="white" class="h-8 w-8 shrink-0">
                    <path
                        d="M16.001 2.667c-7.363 0-13.334 5.97-13.334 13.333 0 2.353.617 4.646 1.788 6.667L2.667 29.333l6.83-1.787a13.27 13.27 0 0 0 6.504 1.72h.006c7.363 0 13.333-5.97 13.333-13.333 0-3.56-1.387-6.907-3.906-9.427a13.244 13.244 0 0 0-9.433-3.906zm0 24.4h-.005a11.05 11.05 0 0 1-5.634-1.542l-.404-.24-4.053 1.061 1.082-3.953-.264-.406a11.06 11.06 0 0 1-1.695-5.892c0-6.11 4.972-11.083 11.079-11.083 2.96 0 5.742 1.153 7.836 3.247a11.006 11.006 0 0 1 3.244 7.842c0 6.11-4.973 11.083-11.086 11.083zm6.076-8.302c-.333-.166-1.966-.97-2.27-1.08-.305-.111-.527-.166-.748.167s-.858 1.079-1.052 1.301c-.194.222-.388.25-.72.083-.334-.166-1.409-.519-2.684-1.655-.992-.884-1.662-1.977-1.856-2.31-.194-.334-.021-.514.146-.68.15-.15.334-.389.5-.583.167-.194.222-.333.334-.555.111-.223.055-.417-.028-.583-.083-.167-.748-1.803-1.026-2.469-.27-.648-.545-.56-.748-.57l-.637-.012c-.222 0-.583.083-.888.416s-1.164 1.138-1.164 2.775 1.192 3.22 1.358 3.442c.167.222 2.345 3.581 5.683 5.021.794.343 1.414.548 1.897.7.797.253 1.522.217 2.096.132.64-.095 1.966-.804 2.244-1.581.278-.777.278-1.443.194-1.581-.083-.139-.305-.222-.638-.389z" />
                </svg>

                <!-- Desktop Text -->
                <span class="hidden sm:inline">
                    Chat on WhatsApp
                </span>

                <!-- Mobile Text -->
                <span class="sm:hidden">
                    Chat
                </span>

            </a>
        </main>

        @include('partials.footer')

    </body>

</html>
