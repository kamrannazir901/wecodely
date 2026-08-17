<form action="{{ route('admin.leads') }}" method="GET" class="border-b border-gray-200 bg-gray-50 px-6 py-5">

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

        {{-- ========================================================= --}}
        {{-- SEARCH --}}
        {{-- ========================================================= --}}

        <div>

            <label for="search" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Search
            </label>

            <input type="text" id="search" name="search" value="{{ request('search') }}"
                placeholder="Name, WhatsApp, email..."
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

        </div>

        {{-- ========================================================= --}}
        {{-- STATUS --}}
        {{-- ========================================================= --}}

        <div>

            <label for="status" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Lead Stage
            </label>

            <select id="status" name="status"
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

                <option value="">
                    All stages
                </option>

                @foreach ($statuses as $key => $status)
                    <option value="{{ $key }}" @selected(request('status') === $key)>
                        {{ $status['label'] }}
                    </option>
                @endforeach

            </select>

        </div>

        {{-- ========================================================= --}}
        {{-- INTENT --}}
        {{-- ========================================================= --}}

        <div>

            <label for="intent" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Intent
            </label>

            <select id="intent" name="intent"
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

                <option value="">
                    All intents
                </option>

                <option value="service" @selected(request('intent') === 'service')>
                    Needs a service
                </option>

                <option value="information" @selected(request('intent') === 'information')>
                    Needs information
                </option>

            </select>

        </div>

        {{-- ========================================================= --}}
        {{-- SERVICE --}}
        {{-- ========================================================= --}}

        <div>

            <label for="service" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Service
            </label>

            <input type="text" id="service" name="service" value="{{ request('service') }}"
                placeholder="Search service..."
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

        </div>

    </div>

    {{-- ========================================================= --}}
    {{-- SECONDARY FILTERS --}}
    {{-- ========================================================= --}}

    <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

        {{-- ========================================================= --}}
        {{-- SOURCE --}}
        {{-- ========================================================= --}}

        <div>

            <label for="utm_source" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Source
            </label>

            <select id="utm_source" name="utm_source"
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

                <option value="">
                    All sources
                </option>

                @foreach ($sources as $source)
                    <option value="{{ $source }}" @selected(request('utm_source') === $source)>
                        {{ $source }}
                    </option>
                @endforeach

            </select>

        </div>

        {{-- ========================================================= --}}
        {{-- DATE --}}
        {{-- ========================================================= --}}

        <div>

            <label for="date" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Date
            </label>

            <select id="date" name="date"
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

                <option value="">
                    All time
                </option>

                <option value="today" @selected(request('date') === 'today')>
                    Today
                </option>

                <option value="yesterday" @selected(request('date') === 'yesterday')>
                    Yesterday
                </option>

                <option value="7" @selected(request('date') === '7')>
                    Last 7 days
                </option>

                <option value="30" @selected(request('date') === '30')>
                    Last 30 days
                </option>

                <option value="90" @selected(request('date') === '90')>
                    Last 90 days
                </option>

            </select>

        </div>

        {{-- ========================================================= --}}
        {{-- FOLLOW UP --}}
        {{-- ========================================================= --}}

        <div>

            <label for="follow_up" class="mb-1.5 block text-xs font-semibold text-gray-600">
                Follow Up
            </label>

            <select id="follow_up" name="follow_up"
                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 outline-none transition focus:ring-1">

                <option value="">
                    All follow ups
                </option>

                <option value="today" @selected(request('follow_up') === 'today')>
                    Today
                </option>

                <option value="overdue" @selected(request('follow_up') === 'overdue')>
                    Overdue
                </option>

                <option value="upcoming" @selected(request('follow_up') === 'upcoming')>
                    Upcoming
                </option>

            </select>

        </div>

    </div>

    {{-- ========================================================= --}}
    {{-- BUTTONS --}}
    {{-- ========================================================= --}}

    <div class="mt-4 flex flex-wrap items-center gap-3">

        <button type="submit"
            class="bg-primary hover:bg-primary-700 rounded-xl px-5 py-2.5 text-sm font-semibold text-white transition">

            Apply Filters

        </button>

        @if (request()->filled('search') ||
                request()->filled('status') ||
                request()->filled('intent') ||
                request()->filled('service') ||
                request()->filled('utm_source') ||
                request()->filled('date') ||
                request()->filled('follow_up'))
            <a href="{{ route('admin.leads') }}"
                class="rounded-xl border border-gray-300 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-100">

                Clear Filters

            </a>
        @endif

    </div>

</form>
