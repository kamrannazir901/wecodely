<footer class="border-t border-gray-200 bg-white">

    <div class="mx-auto max-w-7xl px-6 py-12 lg:py-14">

        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Column 1: Brand --}}
            <div>

                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Wecodely" class="h-12 w-auto">
                </a>

                <p class="mt-5 max-w-xs text-sm leading-6 text-gray-600">
                    We help businesses get more customers through performance marketing
                    and build websites that support their business goals.
                </p>

            </div>

            {{-- Column 2: Services --}}
            <div>

                <h3 class="text-sm font-semibold text-gray-900">
                    Services
                </h3>

                <ul class="mt-5 space-y-3">

                    <li>
                        <a href="{{ route('performance-marketing') }}"
                            class="hover:text-primary text-sm text-gray-600 transition">
                            Performance Marketing
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('web-development') }}"
                            class="hover:text-primary text-sm text-gray-600 transition">
                            Web Development
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Column 3: Company --}}
            <div>

                <h3 class="text-sm font-semibold text-gray-900">
                    Company
                </h3>

                <ul class="mt-5 space-y-3">

                    <li>
                        <a href="{{ route('about') }}" class="hover:text-primary text-sm text-gray-600 transition">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-primary text-sm text-gray-600 transition">
                            Contact
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('privacy-policy') }}"
                            class="hover:text-primary text-sm text-gray-600 transition">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('terms-and-conditions') }}"
                            class="hover:text-primary text-sm text-gray-600 transition">
                            Terms and Conditions
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Column 4: Contact & Social --}}
            <div>

                <h3 class="text-sm font-semibold text-gray-900">
                    Get in Touch
                </h3>

                <div class="mt-5 space-y-4">

                    {{-- Email --}}
                    <a href="mailto:wecodelyteam@gmail.com" class="group flex items-center gap-3">
                        <span
                            class="group-hover:bg-primary/10 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gray-100 transition">
                            <svg class="group-hover:text-primary h-5 w-5 text-gray-600 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>

                        <span class="group-hover:text-primary break-all text-sm text-gray-600 transition">
                            wecodelyteam@gmail.com
                        </span>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/923185421345" target="_blank" rel="noopener noreferrer"
                        class="group flex items-center gap-3">
                        <span
                            class="group-hover:bg-primary/10 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gray-100 transition">
                            <svg class="group-hover:text-primary h-5 w-5 text-gray-600 transition" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M21 11.5a8.5 8.5 0 01-12.7 7.4L3 20l1.2-5.1A8.5 8.5 0 1121 11.5z" />

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M8.5 8.5c.2-.4.4-.4.7-.4h.5c.2 0 .4.1.5.4l.7 1.6c.1.3.1.5-.1.7l-.6.7c.6 1.1 1.5 2 2.6 2.6l.7-.6c.2-.2.4-.2.7-.1l1.6.7c.3.1.4.3.4.5v.5c0 .3 0 .5-.4.7-.4.2-1.3.3-2.2-.1-1-.4-2.3-1.1-3.5-2.3-1.2-1.2-1.9-2.5-2.3-3.5-.4-.9-.3-1.8-.1-2.2z" />
                            </svg>
                        </span>

                        <span class="group-hover:text-primary text-sm text-gray-600 transition">
                            +92 318 5421345
                        </span>
                    </a>

                </div>

                {{-- Social Media --}}
                <div class="mt-7">

                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                        Follow Us
                    </p>

                    <div class="mt-3 flex items-center gap-2">

                        {{-- Facebook --}}
                        <a href="https://www.facebook.com/wecodely" target="_blank" rel="noopener noreferrer"
                            aria-label="Facebook"
                            class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 transition hover:text-white">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14 8h3V4h-3c-3.3 0-5 1.7-5 5v3H6v4h3v4h4v-4h3l1-4h-4V9c0-.7.3-1 1-1z" />
                            </svg>
                        </a>

                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/wecodely" target="_blank" rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 transition hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect width="18" height="18" x="3" y="3" rx="5" stroke-width="1.8" />

                                <circle cx="12" cy="12" r="4" stroke-width="1.8" />

                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                            </svg>
                        </a>

                        {{-- TikTok --}}
                        <a href="https://www.tiktok.com/@wecodely" target="_blank" rel="noopener noreferrer"
                            aria-label="TikTok"
                            class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 transition hover:text-white">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M15 4h3.1c.3 1.5 1.2 2.7 2.9 3.2V10c-1.1-.1-2.1-.5-3-1v6.2A5.8 5.8 0 1112.2 9v3.1a2.8 2.8 0 102.8 2.8V4z" />
                            </svg>
                        </a>

                        {{-- YouTube --}}
                        <a href="https://www.youtube.com/@wecodely" target="_blank" rel="noopener noreferrer"
                            aria-label="YouTube"
                            class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 transition hover:text-white">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23 12s0-3.4-.4-5a2.9 2.9 0 00-2-2C18.9 4.5 12 4.5 12 4.5s-6.9 0-8.6.5a2.9 2.9 0 00-2 2C1 8.6 1 12 1 12s0 3.4.4 5a2.9 2.9 0 002 2c1.7.5 8.6.5 8.6.5s6.9 0 8.6-.5a2.9 2.9 0 002-2c.4-1.6.4-5 .4-5zM10 15.5v-7l6 3.5-6 3.5z" />
                            </svg>
                        </a>

                    </div>

                </div>

                {{-- CTA --}}
                <a href="{{ route('contact') }}"
                    class="bg-primary hover:bg-primary-700 mt-6 inline-flex w-full items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold text-white transition">
                    Book Free Consultation
                </a>

            </div>

        </div>

        {{-- Bottom Bar --}}
        <div
            class="mt-10 flex flex-col gap-2 border-t border-gray-100 pt-6 text-xs text-gray-500 sm:flex-row sm:items-center sm:justify-between">

            <p>
                © {{ date('Y') }} Wecodely. All rights reserved.
            </p>

            <p>
                Performance Marketing & Web Development
            </p>

        </div>

    </div>

</footer>
