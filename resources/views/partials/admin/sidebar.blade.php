<aside class="bg-sidebar fixed inset-y-0 left-0 z-40 hidden w-64 flex-col lg:flex">

    {{-- Logo --}}
    <div class="flex h-20 items-center px-6">

        <a href="{{ route('admin.dashboard') }}" class="inline-flex">

            <img src="{{ asset('images/logo.png') }}" alt="Wecodely" class="h-16 w-auto">

        </a>

    </div>

    {{-- Navigation --}}
    @include('partials.admin.nav')

    {{-- Bottom --}}
    <div class="border-t border-white/10 p-4">

        {{-- View Website --}}
        <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer"
            class="mb-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-white/70 transition hover:bg-white/10 hover:text-white">

            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M15 12H3m0 0l4-4m-4 4l4 4M21 19V5a2 2 0 00-2-2h-6" />

            </svg>

            <span>View Website</span>

        </a>

        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit"
                class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-white/70 transition hover:bg-red-500/20 hover:text-white">

                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M15 12H3m0 0l4-4m-4 4l4 4M21 19V5a2 2 0 00-2-2h-6" />

                </svg>

                <span>Logout</span>

            </button>

        </form>

    </div>

</aside>
