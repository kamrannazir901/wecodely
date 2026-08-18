@extends('layouts.app')

@section('title', 'About Wecodely | How We Help Businesses Online')

@section('meta_description',
    'Learn about Wecodely, how we work with businesses, and why we focus on practical
    performance marketing, clear websites and honest recommendations.')

@section('og_title', 'About Wecodely | How We Work With Businesses')

@section('og_description',
    'Learn how Wecodely approaches marketing and website projects, from understanding the
    business first to recommending only what actually makes sense.')

@section('content')

    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <div class="grid items-center gap-12 lg:grid-cols-[45%_55%] lg:gap-16">

                {{-- FOUNDER IMAGE --}}
                <div>

                    <div class="overflow-hidden rounded-3xl bg-gray-100">
                        <img src="{{ asset('images/founder.png') }}" alt="Kamran Nazir, Founder of Wecodely"
                            class="h-full w-full object-cover">
                    </div>

                </div>

                {{-- RIGHT --}}
                <div>

                    <div
                        class="border-primary/20 bg-primary/5 text-primary inline-flex items-center rounded-full border px-4 py-1.5 text-xs font-semibold">

                        About Wecodely

                    </div>

                    <h1 class="mt-5 text-4xl font-bold leading-[1.1] tracking-tight text-gray-900 sm:text-5xl">

                        We Started Wecodely To Fix A Simple Problem

                    </h1>

                    <p class="mt-6 text-lg leading-8 text-gray-700">

                        Too many businesses were paying for ads and websites
                        that looked fine but didn't actually bring customers.
                        Nobody was explaining why, or what to do about it.

                    </p>

                    <p class="mt-4 text-base leading-7 text-gray-600">

                        Wecodely exists to change that. We look at your whole
                        customer journey, from the first ad to the final sale,
                        and fix what's actually holding your business back.

                    </p>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- HOW WE THINK --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="How We Think" title="A Few Things We Believe In"
                description="These shape how we work with every client, no matter the size of the project." />

            <div class="mx-auto mt-10 grid max-w-5xl gap-5 sm:grid-cols-2">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">Understand First</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We don't recommend anything before we understand your
                        business and your customers.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">Honest Over Impressive</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We'd rather tell you the truth than tell you what sounds
                        good.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">No Guaranteed Hype</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We don't promise results we can't control. We promise
                        clear, careful work.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">The Whole Picture Matters</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">Ads, websites, and tracking work together. We don't
                        treat them separately.</p>
                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FINAL CTA --}}
    {{-- ========================================================= --}}

    <x-cta title="Want To Work With Us?"
        description="Tell us about your business and what you're trying to achieve. We'll understand your situation before recommending anything."
        button-text="Get In Touch" button-url="{{ route('contact') }}"
        note="Free consultation. No pressure, no guaranteed results." />

@endsection

@push('schema')
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            '@id' => url()->current() . '#aboutpage',

            'url' => url()->current(),

            'name' => 'About Wecodely',

            'description' =>
                'Learn about Wecodely, its founder Kamran Nazir, how we work, and our approach to performance marketing and website development.',

            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],

            'about' => [
                '@id' => url('/') . '#organization',
            ],

            'mainEntity' => [
                '@id' => url('/') . '#founder',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
