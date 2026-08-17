@extends('layouts.app')

@section('title', 'Wecodely | Grow Your Business Online With Confidence')

@section('meta_description',
    'Wecodely helps businesses grow online through performance marketing and websites
    that convert. Clear strategy, honest advice, and work built around your business.')

@section('og_title', 'Wecodely | Grow Your Business Online With Confidence')

@section('og_description',
    'Performance marketing and websites that convert. Everything a business needs to grow
    online, in one place.')

    @php
        $faqs = [
            [
                'question' => 'I am not sure if I need marketing help or a website. Where do I start?',
                'answer' =>
                    'Message us on WhatsApp and tell us about your business. We\'ll tell you honestly which one to prioritise, or if you need both.',
            ],
            [
                'question' => 'Do you work with businesses outside major cities?',
                'answer' =>
                    'Yes. Most of our work happens remotely over WhatsApp and calls, so location isn\'t a barrier.',
            ],
            [
                'question' => 'Do you offer both marketing and websites together?',
                'answer' =>
                    'Yes. Many clients start with one and add the other once they see the value, since ads and websites work best together.',
            ],

            [
                'question' => 'Do you guarantee results?',
                'answer' =>
                    'No. Results depend on your market, offer, pricing and other factors outside anyone\'s full control. We focus on honest, data backed work instead of empty promises.',
            ],
        ];

        $feedbacks = [
            [
                'name' => 'Hassan',
                'business' => 'Retail Business',
                'message' =>
                    'Humein website banwani thi lekin samajh nahi aa raha tha ke kis type ki website hamaray business ke liye sahi rahegi. Wecodely ne pehle hamari requirements samjhi aur phir simple terms mein options explain kiye.',
            ],
            [
                'name' => 'Usman',
                'business' => 'Real Estate Business',
                'message' =>
                    'Humein enquiries to mil rahi thin lekin har lead relevant nahi thi. Wecodely ne targeting aur enquiry process dekh kar bataya ke kahan improvement ki zarurat hai.',
            ],
            [
                'name' => 'Ahmed',
                'business' => 'Service Business',
                'message' =>
                    'I liked that they first took time to understand our business instead of immediately suggesting changes. The communication was clear and easy to follow.',
            ],
        ];
    @endphp

@section('content')

    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}

    <section class="py-16 lg:py-24">

        <div class="mx-auto max-w-4xl px-6 text-center">

            <div
                class="border-primary/20 bg-primary/5 text-primary mx-auto inline-flex items-center rounded-full border px-4 py-1.5 text-xs font-semibold">

                Wecodely

            </div>

            <h1 class="mt-6 text-4xl font-bold leading-[1.1] tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">

                Grow Your Business Online
                <span class="text-primary">
                    With Confidence
                </span>

            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-700">

                From ads that actually bring customers, to websites that convert
                them, we help businesses stop guessing and start growing online.

            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                <a href="{{ route('performance-marketing') }}"
                    class="bg-primary hover:bg-primary-700 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                    I Need More Leads & Sales

                </a>

                <a href="{{ route('web-development') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-gray-300 bg-white px-7 py-3.5 text-sm font-semibold text-gray-900 transition hover:bg-gray-50">

                    I Need A Website Built

                </a>

            </div>

            <p class="mt-4 text-xs text-gray-500">
                Free consultation. We understand your business before recommending anything.
            </p>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- WHAT WE DO --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="What We Do" title="Two Ways We Help You Grow"
                description="Pick what fits where you are right now. Not sure? We'll help you figure it out on a free call." />

            <div class="mx-auto mt-10 grid max-w-4xl gap-5 lg:grid-cols-2">

                {{-- PERFORMANCE MARKETING --}}
                <a href="{{ route('performance-marketing') }}"
                    class="hover:border-primary group rounded-3xl border-2 border-gray-200 bg-white p-7 transition sm:p-8">

                    <span class="bg-primary/10 text-primary flex h-11 w-11 items-center justify-center rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 3L4 14h7l-1 7 9-11h-7l1-7z" />
                        </svg>
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">Performance Marketing</h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We find where your ad budget is leaking and fix it, so more
                        of your traffic turns into real customers.
                    </p>

                    <ul class="mt-5 space-y-2">
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            Paid advertising on Meta, Google, TikTok and more
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            Fixing what stops clicks from becoming customers
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            Tracking so you know what's actually working
                        </li>
                    </ul>

                    <span class="text-primary mt-6 inline-flex items-center gap-1.5 text-sm font-semibold">
                        Explore Marketing
                        <span class="transition group-hover:translate-x-1">→</span>
                    </span>

                </a>

                {{-- WEB DEVELOPMENT --}}
                <a href="{{ route('web-development') }}"
                    class="hover:border-primary group rounded-3xl border-2 border-gray-200 bg-white p-7 transition sm:p-8">

                    <span class="bg-primary/10 text-primary flex h-11 w-11 items-center justify-center rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </span>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">Website Development</h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Websites that clearly explain your business and make it
                        easy for the right customer to take action.
                    </p>

                    <ul class="mt-5 space-y-2">
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            Shopify stores for selling products online
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            WordPress for business and service websites
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <span class="text-primary mt-0.5">✓</span>
                            Custom code when standard platforms aren't enough
                        </li>
                    </ul>

                    <span class="text-primary mt-6 inline-flex items-center gap-1.5 text-sm font-semibold">
                        Explore Websites
                        <span class="transition group-hover:translate-x-1">→</span>
                    </span>

                </a>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- TRUST STRIP --}}
    {{-- ========================================================= --}}

    <section class="py-12">

        <div class="mx-auto grid max-w-4xl grid-cols-3 gap-4 px-6 text-center">

            <div>
                <p class="text-2xl font-bold text-gray-900 sm:text-3xl">15+</p>
                <p class="mt-1 text-xs text-gray-500 sm:text-sm">Businesses Helped</p>
            </div>

            <div>
                <p class="text-2xl font-bold text-gray-900 sm:text-3xl">100%</p>
                <p class="mt-1 text-xs text-gray-500 sm:text-sm">Honest Recommendations</p>
            </div>

            <div>
                <p class="text-2xl font-bold text-gray-900 sm:text-3xl">1 Hr</p>
                <p class="mt-1 text-xs text-gray-500 sm:text-sm">Typical Reply Time</p>
            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- WHY WECODELY --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="Why Wecodely" title="We Understand Before We Recommend"
                description="We don't sell you what's easiest for us. We figure out what your business actually needs first." />

            <div class="mx-auto mt-10 grid max-w-5xl gap-5 sm:grid-cols-2">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">Clear Communication</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">No confusing technical jargon. You always know what's
                        happening and why.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">No Unnecessary Services</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">If you don't need something, we won't recommend it to
                        make the project bigger.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">Honest, Not Hype</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We don't promise guaranteed results. We promise clear
                        work and honest updates.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <h3 class="text-base font-semibold text-gray-900">One Team, Full Picture</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">Your ads and your website working together, not two
                        disconnected vendors.</p>
                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- CLIENT FEEDBACK --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">
        <div class="mx-auto max-w-7xl px-6">
            <x-section-heading label="Client Feedback" title="What Clients Say About Working With Us"
                description="Real feedback from businesses we have worked with." />
            <x-client-feedback :feedbacks="$feedbacks" />
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- FAQ --}}
    {{-- ========================================================= --}}

    <section id="faq" class="py-14 lg:py-20">
        <div class="mx-auto max-w-4xl px-6">
            <x-section-heading label="FAQ" title="Common Questions"
                description="Still unsure? Message us and we'll walk you through it." />
            <x-faq :faqs="$faqs" />
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- LIVE TRAINING PROGRAMS --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-4xl px-6">

            <div class="border-primary/20 bg-primary/5 rounded-3xl border p-7 text-center sm:p-10">

                <p class="text-primary text-sm font-semibold">
                    Live Training Programs
                </p>

                <h2 class="mt-3 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">
                    Want To Understand How Online Marketing And Sales Actually Work?
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-gray-600">

                    We're putting together live training sessions that break down
                    how businesses actually grow online, from attracting the
                    right audience to turning interest into sales. Useful whether
                    you run a business or simply want to learn the skill.

                </p>

                <a href="https://wa.me/923185421345?text={{ urlencode('Hi, I would like to know more about your live training programs.') }}"
                    target="_blank" rel="noopener noreferrer"
                    class="bg-primary hover:bg-primary-700 mt-7 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                    Contact Us On WhatsApp

                </a>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FINAL CTA --}}
    {{-- ========================================================= --}}

    <x-cta title="Not Sure Where To Start?"
        description="Tell us about your business and what you're trying to achieve. We'll point you in the right direction, honestly, even if that means less work for us."
        button-text="Message Us On WhatsApp"
        button-url="https://wa.me/923185421345?text={{ urlencode('Hi, I want to grow my business online but am not sure where to start.') }}"
        note="Free consultation. No pressure, no guaranteed results, just an honest conversation." />

@endsection

@push('schema')
    <x-schema.faq :faqs="$faqs" />
@endpush
