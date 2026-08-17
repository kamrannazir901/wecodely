<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="robots" content="noindex, nofollow, noarchive">

        <title>
            @yield('title', 'Admin Dashboard | Wecodely')
        </title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">

        <meta name="theme-color" content="#1E40AF">

        {{-- Tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#1E40AF',
                            'primary-700': '#1E3A8A',
                            dark: '#111827',
                            sidebar: '#111111',
                            light: '#F9FAFB',
                        }
                    }
                }
            }
        </script>

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>

    </head>

    <body class="bg-gray-50 text-gray-900">

        {{-- Desktop Sidebar --}}
        @include('partials.admin.sidebar')

        {{-- Main Area --}}
        <div class="min-h-screen lg:pl-64">

            {{-- Mobile Header --}}
            @include('partials.admin.mobile-header')

            <main class="min-h-screen">

                {{-- Page Header --}}
                @hasSection('page_header')
                    <div class="border-b border-gray-200 bg-white">

                        <div class="mx-auto max-w-7xl px-6 py-6 lg:px-8">

                            @yield('page_header')

                        </div>

                    </div>
                @endif

                {{-- Page Content --}}
                <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">

                    @yield('content')

                </div>

            </main>

        </div>

        {{-- Mobile Sidebar --}}
        @include('partials.admin.mobile-sidebar')

        {{-- Mobile Menu --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const menuButton = document.getElementById('admin-menu-button');
                const menu = document.getElementById('admin-mobile-menu');
                const menuClose = document.getElementById('admin-menu-close');
                const menuOverlay = document.getElementById('admin-menu-overlay');


                function openMenu() {

                    menu?.classList.remove('hidden');

                    document.body.classList.add('overflow-hidden');

                }


                function closeMenu() {

                    menu?.classList.add('hidden');

                    document.body.classList.remove('overflow-hidden');

                }


                menuButton?.addEventListener('click', openMenu);

                menuClose?.addEventListener('click', closeMenu);

                menuOverlay?.addEventListener('click', closeMenu);


                menu?.querySelectorAll('a').forEach(function(link) {

                    link.addEventListener('click', closeMenu);

                });

            });
        </script>

    </body>

</html>
