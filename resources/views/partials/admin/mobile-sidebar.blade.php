<div id="admin-mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">

    {{-- Overlay --}}
    <div id="admin-menu-overlay" class="absolute inset-0 bg-black/50">
    </div>

    {{-- Sidebar --}}
    <aside class="bg-sidebar absolute inset-y-0 left-0 flex w-72 flex-col shadow-xl">

        {{-- Header --}}
        <div class="flex h-16 items-center justify-between px-5">

            <a href="{{ route('admin.dashboard') }}">

                <img src="{{ asset('images/logo.png') }}" alt="Wecodely" class="h-8 w-auto">

            </a>

            <button type="button" id="admin-menu-close" aria-label="Close admin menu"
                class="rounded-lg p-2 text-white/70 transition hover:bg-white/10 hover:text-white">

                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />

                </svg>

            </button>

        </div>

        {{-- Navigation --}}
        @include('partials.admin.nav')

        {{-- Bottom --}}
        <div class="border-t border-white/10 p-4">

            <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer"
                class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-white/70 transition hover:bg-white/10 hover:text-white">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M15 12H3m0 0l4-4m-4 4l4 4M21 19V5a2 2 0 00-2-2h-6" />

                </svg>

                View Website

            </a>

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button type="submit"
                    class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-white/70 transition hover:bg-red-500/20 hover:text-white">

                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M15 12H3m0 0l4-4m-4 4l4 4M21 19V5a2 2 0 00-2-2h-6" />

                    </svg>

                    Logout

                </button>

            </form>

        </div>

    </aside>

</div>
