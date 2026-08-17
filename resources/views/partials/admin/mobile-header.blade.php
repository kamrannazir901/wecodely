<header class="flex h-16 items-center justify-between border-b border-gray-200 bg-white px-5 lg:hidden">

    <a href="{{ route('admin.dashboard') }}">

        <img src="{{ asset('images/logo.png') }}" alt="Wecodely" class="h-8 w-auto">

    </a>

    <button type="button" id="admin-menu-button" aria-label="Open admin menu"
        class="rounded-lg p-2 text-gray-600 transition hover:bg-gray-100">

        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />

        </svg>

    </button>

</header>
