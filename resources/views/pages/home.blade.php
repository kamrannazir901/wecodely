@extends('layouts.app')

@section('title', 'Performance Marketing & Business Websites | Wecodely')

@section('meta_description',
    'Wecodely helps businesses improve their online marketing and websites. We fix advertising,
    tracking and website problems that can cost you customers.')

@section('og_title', 'Performance Marketing & Business Websites | Wecodely')

@section('og_description',
    'Improve your advertising and website with practical, business focused help from Wecodely.
    Start with a free audit and no commitment.')

    @php

        $services = [
            [
                'label' => 'Performance Marketing',
                'title' => 'When you are spending on marketing but the results do not make sense.',
                'description' =>
                    'We look at your ads, targeting, tracking, website and customer journey to find what needs fixing.',
                'link' => route('performance-marketing'),
                'link_text' => 'Explore Performance Marketing',
            ],

            [
                'label' => 'Business Websites',
                'title' => 'When your business needs a website people can actually understand.',
                'description' =>
                    'We build clear, professional websites that explain what you offer and make the next step obvious.',
                'link' => route('web-development'),
                'link_text' => 'Explore Website Development',
            ],

            [
                'label' => 'Existing Website or Marketing',
                'title' => 'When you already have something, but it is not doing its job.',
                'description' =>
                    'We can review what you already have and help identify what should be improved before you spend more.',
                'link' => '#contact',
                'link_text' => 'Discuss Your Situation',
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

        $faqs = [
            [
                'question' => 'I am not sure whether I need marketing or a website. Can you help?',
                'answer' =>
                    'Yes. Tell us about your business, what you are currently doing and what you are trying to achieve. We will help you figure out what makes sense to prioritise.',
            ],

            [
                'question' => 'Do I need to already be running ads?',
                'answer' =>
                    'No. We can work with businesses that are starting from scratch as well as businesses that already have campaigns running.',
            ],

            [
                'question' => 'Can you work with my existing website or campaigns?',
                'answer' =>
                    'Yes. We can review what you already have and identify what may need improvement before recommending that you replace or rebuild anything.',
            ],

            [
                'question' => 'Do you guarantee sales or leads?',
                'answer' =>
                    'No. We do not promise a specific number of sales or leads. Results depend on factors such as your offer, pricing, market, competition, budget and sales process.',
            ],

            [
                'question' => 'How does the free consultation work?',
                'answer' =>
                    'You tell us about your business and what you are struggling with. We discuss the situation with you and explain what we think should be done next. There is no payment required for the initial conversation.',
            ],

            [
                'question' => 'How does the 20% offer work?',
                'answer' =>
                    'The 20% discount is available to eligible new Wecodely clients. If you decide to work with us after the initial discussion, we will explain the scope, pricing and discount before you commit.',
            ],
        ];

    @endphp

@section('content')

    {{-- ========================================================= --}}
    {{-- HERO --}}
    {{-- ========================================================= --}}

    <section class="py-12 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_.95fr] lg:gap-16">

                {{-- LEFT --}}
                <div>

                    <p
                        class="bg-primary/5 text-primary border-primary/20 inline-flex items-center rounded-full border px-4 py-2 text-xs font-semibold">

                        Is Your Marketing Actually Working?

                    </p>

                    <h1
                        class="mt-4 max-w-3xl text-4xl font-bold leading-[1.08] tracking-tight text-gray-900 sm:text-5xl lg:text-[3.7rem]">

                        Your Business Is Getting Attention.
                        <span class="text-primary">
                            But Is It Turning Into Customers?
                        </span>

                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-gray-700">

                        We help businesses fix the gaps between their
                        advertising, website and customers.

                    </p>

                    <div class="border-primary/20 bg-primary/5 mt-6 rounded-2xl border p-5">

                        <p class="text-sm font-semibold text-gray-900">
                            New Business Offer
                        </p>

                        <p class="text-primary mt-1 text-xl font-bold md:text-2xl">
                            20% Off Your First Month
                        </p>

                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Available for eligible new clients who decide to work with us.
                        </p>

                    </div>

                    <a href="#contact"
                        class="bg-primary hover:bg-primary-700 mt-7 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                        Get Free Audit

                    </a>

                    <p class="mt-3 text-xs text-gray-500">
                        Free website or campaign audit. No commitment.
                    </p>

                </div>

                {{-- RIGHT --}}
                <div id="contact">

                    <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

                        <p class="text-primary text-sm font-semibold">
                            Start With A Free Audit
                        </p>

                        <h2 class="mt-2 text-2xl font-bold text-gray-900">
                            Let's See What's Actually Going On
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Tell us about your business. We'll review your website,
                            campaigns or both and tell you what we would look at first.
                        </p>

                        <div class="mt-6">

                            @include('partials.contact-form')

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- SERVICES --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <div class="max-w-2xl">

                <p class="text-primary text-sm font-semibold">
                    Our Services
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">
                    What Can We Help You Improve?
                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">
                    Whether you want more customers from online advertising or need a better
                    website for your business, we can help.
                </p>

            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-2">

                {{-- PERFORMANCE MARKETING --}}
                <a href="{{ route('performance-marketing') }}"
                    class="hover:border-primary group rounded-3xl border border-gray-200 bg-white p-7 transition sm:p-8">

                    <p class="text-primary text-sm font-semibold">
                        Performance Marketing
                    </p>

                    <h3 class="mt-3 text-2xl font-bold text-gray-900">
                        Want more from your online advertising?
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        We help businesses run and improve advertising on platforms like
                        Meta, Google, TikTok and Snapchat.
                    </p>

                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        We also look at what happens after someone clicks, so your
                        advertising and website work together.
                    </p>

                    <span class="text-primary mt-6 inline-flex items-center gap-1.5 text-sm font-semibold">
                        Explore Performance Marketing
                        <span class="transition group-hover:translate-x-1">→</span>
                    </span>

                </a>

                {{-- WEBSITE DEVELOPMENT --}}
                <a href="{{ route('web-development') }}"
                    class="hover:border-primary group rounded-3xl border border-gray-200 bg-white p-7 transition sm:p-8">

                    <p class="text-primary text-sm font-semibold">
                        Business Websites
                    </p>

                    <h3 class="mt-3 text-2xl font-bold text-gray-900">
                        Need a website for your business?
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-gray-600">
                        We build websites for businesses, online stores and service
                        providers that clearly explain what you offer.
                    </p>

                    <p class="mt-4 text-sm leading-6 text-gray-600">
                        We work with platforms like Shopify and WordPress, and can also
                        build custom websites when needed.
                    </p>

                    <span class="text-primary mt-6 inline-flex items-center gap-1.5 text-sm font-semibold">
                        Explore Website Development
                        <span class="transition group-hover:translate-x-1">→</span>
                    </span>

                </a>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- NO RISK / FREE AUDIT --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-5xl px-6">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-primary text-sm font-semibold">
                    Not Ready To Commit?
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">
                    See What Could Be Improved First.
                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">
                    Get a free review of your website or campaigns before deciding anything.
                </p>

            </div>

            <div class="mx-auto mt-10 grid max-w-4xl gap-5 sm:grid-cols-3">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-base font-semibold text-gray-900">
                        Free Review
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We'll look at your website, campaigns or both and point out what could be improved.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-base font-semibold text-gray-900">
                        No Obligation
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        You can review our suggestions and decide for yourself what to do next.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-base font-semibold text-gray-900">
                        Honest Feedback
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        If we don't think you need our help, we'll tell you.
                    </p>

                </div>

            </div>

            <div class="mt-8 text-center">

                <a href="#contact"
                    class="bg-primary hover:bg-primary-700 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                    Get My Free Review

                </a>

                <p class="mt-3 text-xs text-gray-500">
                    Free. No payment. No commitment.
                </p>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- TESTIMONIALS --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="Client Feedback" title="What Clients Say"
                description="A few words from businesses we have worked with." />

            <x-client-feedback :feedbacks="$feedbacks" />

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FAQ --}}
    {{-- ========================================================= --}}

    <section id="faq" class="py-14 lg:py-20">

        <div class="mx-auto max-w-4xl px-6">

            <x-section-heading label="FAQ" title="Before You Get Started"
                description="A few things you may want to know first." />

            <x-faq :faqs="$faqs" />

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FINAL CTA --}}
    {{-- ========================================================= --}}

    <x-cta title="Not Sure What Your Business Needs Right Now?"
        description="Tell us what you are trying to achieve and what is not working. We will help you figure out what to prioritise."
        button-text="Get Free Consultation" button-url="#contact"
        note="Free initial consultation. No pressure and no guaranteed-results promises." />

@endsection

@push('schema')
    <x-schema.faq :faqs="$faqs" />
@endpush
