<nav class="flex-1 px-4 py-6">

    <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-white/40">
        Main
    </p>

    {{-- Dashboard --}}
    <a href="{{ route('admin.dashboard') }}"
        class="{{ request()->routeIs('admin.dashboard')
            ? 'bg-primary text-white'
            : 'text-white/70 hover:bg-white/10 hover:text-white' }} flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition">

        <svg class="h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10" />
        </svg>

        <span>Dashboard</span>

    </a>

    {{-- Leads --}}
    <a href="{{ route('admin.leads') }}"
        class="{{ request()->routeIs('admin.leads*')
            ? 'bg-primary text-white'
            : 'text-white/70 hover:bg-white/10 hover:text-white' }} mt-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition">

        <svg class="h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a3 3 0 006 0M9 5h6" />
        </svg>

        <span>Leads</span>

    </a>

</nav>
