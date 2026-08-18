@extends('layouts.app')

@section('title', 'Contact Wecodely | Get in Touch')

@section('meta_description', 'Have a question about performance marketing or website development? Contact Wecodely by
    WhatsApp, email or our contact form and tell us what you need.')

@section('og_title', 'Contact Wecodely | Let’s Talk About Your Business')

@section('og_description', 'Have a question or need help with your marketing or website? Get in touch with Wecodely and
    tell us what you are working on.')

@section('content')

    {{-- ========================================================= --}}
    {{-- HERO + CONTACT --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <div class="grid gap-12 lg:grid-cols-[1.05fr_.95fr] lg:gap-16">

                {{-- LEFT: CONTACT DETAILS --}}
                <div>

                    <div
                        class="border-primary/20 bg-primary/5 text-primary inline-flex items-center rounded-full border px-4 py-1.5 text-xs font-semibold">

                        Contact Us

                    </div>

                    <h1 class="mt-5 text-4xl font-bold leading-[1.1] tracking-tight text-gray-900 sm:text-5xl">

                        Let's Talk About Your Business

                    </h1>

                    <p class="mt-5 text-base leading-7 text-gray-600">

                        Whether you have a question or you're ready to get
                        started, reach out however works best for you.

                    </p>

                    {{-- CONTACT METHODS --}}
                    <div class="mt-8 space-y-4">

                        <a href="mailto:wecodelyteam@gmail.com"
                            class="hover:border-primary flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-5 transition">

                            <span
                                class="bg-primary/10 text-primary flex h-11 w-11 shrink-0 items-center justify-center rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.75">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l9 6 9-6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-sm font-semibold text-gray-900">Email</p>
                                <p class="text-sm text-gray-600">wecodelyteam@gmail.com</p>
                            </div>

                        </a>

                        <a href="https://wa.me/923185421345" target="_blank" rel="noopener noreferrer"
                            class="hover:border-primary flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-5 transition">

                            <span
                                class="bg-primary/10 text-primary flex h-11 w-11 shrink-0 items-center justify-center rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                    class="h-5 w-5">
                                    <path
                                        d="M16.001 2.667c-7.363 0-13.334 5.97-13.334 13.333 0 2.353.617 4.646 1.788 6.667L2.667 29.333l6.83-1.787a13.27 13.27 0 0 0 6.504 1.72h.006c7.363 0 13.333-5.97 13.333-13.333 0-3.56-1.387-6.907-3.906-9.427a13.244 13.244 0 0 0-9.433-3.906z" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-sm font-semibold text-gray-900">WhatsApp</p>
                                <p class="text-sm text-gray-600">+92 318 5421345</p>
                            </div>

                        </a>

                    </div>

                    {{-- SOCIAL HANDLES --}}
                    <div class="mt-8">

                        <p class="text-sm font-semibold text-gray-900">
                            Follow Us
                        </p>

                        <div class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-4">

                            <a href="https://facebook.com/wecodely" target="_blank" rel="noopener noreferrer"
                                class="hover:border-primary flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.7-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z" />
                                </svg>
                                Facebook
                            </a>

                            <a href="https://instagram.com/wecodely" target="_blank" rel="noopener noreferrer"
                                class="hover:border-primary flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor"
                                    stroke-width="1.75" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                    <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                                </svg>
                                Instagram
                            </a>

                            <a href="https://tiktok.com/@wecodely" target="_blank" rel="noopener noreferrer"
                                class="hover:border-primary flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16.5 2h-3v13.2a2.8 2.8 0 11-2.3-2.75v-3a5.8 5.8 0 105.3 5.78V8.6a6.9 6.9 0 004 1.27v-3a3.9 3.9 0 01-4-3.87z" />
                                </svg>
                                TikTok
                            </a>

                            <a href="https://youtube.com/@wecodely" target="_blank" rel="noopener noreferrer"
                                class="hover:border-primary flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm text-gray-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22 12s0-3.2-.4-4.7a2.9 2.9 0 00-2-2C17.9 5 12 5 12 5s-5.9 0-7.6.3a2.9 2.9 0 00-2 2C2 8.8 2 12 2 12s0 3.2.4 4.7a2.9 2.9 0 002 2C6.1 19 12 19 12 19s5.9 0 7.6-.3a2.9 2.9 0 002-2c.4-1.5.4-4.7.4-4.7zM10 15V9l5.2 3z" />
                                </svg>
                                YouTube
                            </a>

                        </div>

                    </div>

                </div>

                {{-- RIGHT: CONTACT FORM --}}
                <div>

                    <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

                        <p class="text-primary text-sm font-semibold">
                            Send Us A Message
                        </p>

                        <h2 class="mt-2 text-2xl font-bold text-gray-900">
                            Tell Us About Your Business
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            A few details help us understand what you need
                            before we get back to you.
                        </p>

                        <div class="mt-6">
                            @include('partials.contact-form')
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection

@push('schema')
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            '@id' => url()->current() . '#contactpage',

            'url' => url()->current(),

            'name' => 'Contact Wecodely',

            'description' =>
                'Get in touch with Wecodely for performance marketing, website development, or general questions.',

            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],

            'about' => [
                '@id' => url('/') . '#organization',
            ],

            'mainEntity' => [
                '@id' => url('/') . '#organization',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
