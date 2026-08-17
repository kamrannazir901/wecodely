@php
    $isLandingPage = request()->routeIs(['performance-marketing', 'web-development']);
@endphp

<header class="border-b border-gray-100 bg-white">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        {{-- Left Side: Logo + Desktop Navigation --}}
        <div class="flex items-center gap-8">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex shrink-0 items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Wecodely"
                    class="h-14 w-auto transition duration-300 hover:scale-105">
            </a>

            {{-- Desktop Navigation --}}
            @if (!$isLandingPage)
                <nav class="hidden items-center gap-6 lg:flex">

                    <a href="{{ route('performance-marketing') }}"
                        class="{{ request()->routeIs('performance-marketing') ? 'text-primary' : 'text-gray-700' }} hover:text-primary text-sm font-medium transition">
                        Performance Marketing
                    </a>

                    <a href="{{ route('web-development') }}"
                        class="{{ request()->routeIs('web-development') ? 'text-primary' : 'text-gray-700' }} hover:text-primary text-sm font-medium transition">
                        Web Development
                    </a>

                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-primary' : 'text-gray-700' }} hover:text-primary text-sm font-medium transition">
                        About
                    </a>

                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-primary' : 'text-gray-700' }} hover:text-primary text-sm font-medium transition">
                        Contact
                    </a>

                </nav>
            @endif

        </div>

        {{-- Right Side --}}
        <div class="flex items-center gap-3">

            {{-- CTA --}}
            <a href="{{ route('contact') }}"
                class="bg-primary hover:bg-primary-700 rounded-xl px-4 py-2.5 text-xs font-semibold text-white transition sm:px-6 sm:py-3 sm:text-sm">
                Book Free Consultation
            </a>

            {{-- Mobile Menu Button --}}
            @if (!$isLandingPage)
                <button type="button" aria-label="Open menu" aria-controls="mobile-menu" aria-expanded="false"
                    onclick="
                        const menu = document.getElementById('mobile-menu');
                        const expanded = this.getAttribute('aria-expanded') === 'true';

                        menu.classList.toggle('hidden');
                        this.setAttribute('aria-expanded', !expanded);
                    "
                    class="hover:text-primary rounded-lg px-2 py-2 text-sm font-semibold text-gray-800 transition lg:hidden">

                    MENU

                </button>
            @endif

        </div>

    </div>

    {{-- Mobile Menu --}}
    @if (!$isLandingPage)
        <div id="mobile-menu" class="hidden border-t border-gray-100 bg-white lg:hidden">

            <nav class="mx-auto max-w-7xl px-6 py-4">

                <div class="flex flex-col">

                    <a href="{{ route('performance-marketing') }}"
                        class="{{ request()->routeIs('performance-marketing') ? 'text-primary' : 'text-gray-800' }} hover:text-primary border-b border-gray-100 py-4 text-sm font-medium transition"
                        onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                        Performance Marketing
                    </a>

                    <a href="{{ route('web-development') }}"
                        class="{{ request()->routeIs('web-development') ? 'text-primary' : 'text-gray-800' }} hover:text-primary border-b border-gray-100 py-4 text-sm font-medium transition"
                        onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                        Web Development
                    </a>

                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-primary' : 'text-gray-800' }} hover:text-primary border-b border-gray-100 py-4 text-sm font-medium transition"
                        onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                        About
                    </a>

                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-primary' : 'text-gray-800' }} hover:text-primary border-b border-gray-100 py-4 text-sm font-medium transition"
                        onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                        Contact
                    </a>

                    <a href="{{ route('contact') }}"
                        class="bg-primary hover:bg-primary-700 mt-5 rounded-xl px-6 py-3.5 text-center text-sm font-semibold text-white transition"
                        onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                        Book Free Consultation
                    </a>

                </div>

            </nav>

        </div>
    @endif

</header>
