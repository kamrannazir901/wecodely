@props([
    'code' => '404',
    'title' => 'Page Not Found',
    'message' => 'The page you are looking for does not exist or may have been moved.',
])

<section class="flex min-h-[70vh] items-center justify-center px-6 py-16">

    <div class="mx-auto max-w-xl text-center">

        {{-- Error Code --}}
        <p class="text-primary text-7xl font-bold tracking-tight sm:text-8xl">
            {{ $code }}
        </p>

        {{-- Heading --}}
        <h1 class="mt-5 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            {{ $title }}
        </h1>

        {{-- Message --}}
        <p class="mx-auto mt-4 max-w-lg text-base leading-7 text-gray-600">
            {{ $message }}
        </p>

        {{-- Actions --}}
        <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

            <a href="{{ url('/') }}"
                class="bg-primary hover:bg-primary-700 inline-flex items-center justify-center rounded-xl px-6 py-3.5 text-sm font-semibold text-white transition">

                Back to Home

            </a>

            <a href="{{ url('/contact') }}"
                class="inline-flex items-center justify-center rounded-xl border border-gray-300 bg-white px-6 py-3.5 text-sm font-semibold text-gray-900 transition hover:bg-gray-50">

                Contact Us

            </a>

        </div>

    </div>

</section>
