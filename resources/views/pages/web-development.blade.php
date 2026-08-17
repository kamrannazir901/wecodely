@extends('layouts.app')

@section('title', 'Website Development for Businesses | Wecodely')

@section('meta_description',
    'Get a professional website that helps people understand your business, trust you, and
    take the next step. Free revisions until you are happy. Starting Rs 25,000.')

@section('og_title', 'A Website That Helps Your Business Get Chosen | Wecodely')

@section('og_description',
    'Professional websites for businesses, ecommerce stores and professionals. Clear, easy to
    use, and built around what your customers need.')

    @php
        $faqs = [
            [
                'question' => 'I am not sure what type of website my business needs. Can you help?',
                'answer' =>
                    'Yes. Tell us about your business and what you want the website to achieve, we will recommend a suitable approach. You don\'t need to know the technical details.',
            ],
            [
                'question' => 'How much does a website cost?',
                'answer' =>
                    'Personal websites start from Rs. 25,000, business websites from Rs. 50,000, ecommerce stores from Rs. 75,000. Final price depends on requirements, confirmed before we start.',
            ],
            [
                'question' => 'What happens if I am not happy with the website?',
                'answer' =>
                    'We include free revisions within the agreed scope. If we fail to deliver what was agreed on, your advance payment is refunded.',
            ],
            [
                'question' => 'Do you provide domain and hosting?',
                'answer' =>
                    'No, these stay under your ownership. We recommend suitable hosting based on your website requirements.',
            ],
            [
                'question' => 'What technology do you use?',
                'answer' =>
                    'It depends on the project, Shopify or WordPress for many businesses, or custom development using Laravel, MERN or Next.js for others. We recommend based on your actual requirements.',
            ],
            [
                'question' => 'Can you guarantee my website will bring customers?',
                'answer' =>
                    'No. Results also depend on your offer, market, pricing and marketing. Our job is to make your website clear, professional, and easy for the right people to act on.',
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
                'business' => 'Service Business',
                'message' =>
                    'We needed a proper website because most of our customers were finding us through social media. Wecodely focused on making our services clear and making it easier for people to contact us.',
            ],
            [
                'name' => 'Ahmed',
                'business' => 'Online Store',
                'message' =>
                    'We wanted to start selling online but were confused about what the website actually needed. The discussion helped us understand what was important for our customers instead of just adding unnecessary features.',
            ],
        ];
    @endphp

@section('content')

    {{-- ========================================================= --}}
    {{-- HERO (HOOK + OFFER) --}}
    {{-- ========================================================= --}}

    <section class="py-12 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_.95fr] lg:gap-16">

                {{-- LEFT --}}
                <div>

                    <div
                        class="bg-primary/5 text-primary border-primary/20 inline-flex items-center rounded-full border px-4 py-2 text-xs font-semibold">

                        New Business Offer: 15% Off Your Website

                    </div>

                    <h1
                        class="mt-5 max-w-3xl text-4xl font-bold leading-[1.08] tracking-tight text-gray-900 sm:text-5xl lg:text-[3.7rem]">

                        Someone Is Checking Your Business Online
                        <span class="text-primary">
                            Right Now. What Do They See?
                        </span>

                    </h1>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-700">

                        A confusing website, or no website, and they can't tell
                        what you offer or how to reach you. So they leave and
                        check your competitor instead.

                    </p>

                    <p class="mt-3 max-w-2xl text-base leading-7 text-gray-600">

                        We build websites that make your business easy to
                        understand and easy to trust, starting from Rs 25,000.

                    </p>

                    {{-- CTA --}}
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                        <a href="#contact"
                            class="bg-primary hover:bg-primary-700 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                            Discuss My Website

                        </a>

                        <a href="#pricing"
                            class="inline-flex items-center justify-center rounded-xl border border-gray-300 bg-white px-7 py-3.5 text-sm font-semibold text-gray-900 transition hover:bg-gray-50">

                            See Starting Prices

                        </a>

                    </div>

                    <p class="mt-4 text-xs text-gray-500">
                        15% offer is for new businesses and selected new website projects.
                    </p>

                </div>

                {{-- RIGHT: CONTACT FORM --}}
                <div>

                    <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

                        <div id="contact">

                            <p class="text-primary text-sm font-semibold">
                                Start with a conversation
                            </p>

                            <h2 class="mt-2 text-2xl font-bold text-gray-900">
                                Tell Us About Your Business
                            </h2>

                            <p class="mt-2 text-sm leading-6 text-gray-600">
                                Tell us what you do and what you want your
                                website to help you achieve.
                            </p>

                        </div>

                        <div class="mt-6">

                            @include('partials.contact-form')

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- AGITATE --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="The Problem" title="A Social Media Page Alone Doesn't Close The Deal"
                description="People find you, then quietly decide whether to trust you. Here's where most businesses lose them." />

            <div class="mx-auto mt-10 max-w-5xl">

                <div class="grid gap-5 md:grid-cols-3">

                    <div class="rounded-2xl border border-gray-200 bg-white p-6">
                        <span
                            class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">01</span>
                        <h3 class="mt-5 text-lg font-semibold text-gray-900">They Can't Tell What You Do</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">Products, prices, services, how to order, all left
                            unanswered until they message you first, so most never do.</p>
                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-6">
                        <span
                            class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">02</span>
                        <h3 class="mt-5 text-lg font-semibold text-gray-900">Your Business Looks Smaller Than It Is</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">A good product with a weak online presence still
                            loses to a worse product that looks more trustworthy.</p>
                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-6">
                        <span
                            class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">03</span>
                        <h3 class="mt-5 text-lg font-semibold text-gray-900">Interested People Don't Know What To Do Next
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">Searching for your number, guessing how to order,
                            that friction is enough to lose them, quietly and permanently.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- HOW WE HELP --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="How We Help" title="A Website Built To Answer, Not Just Impress"
                description="We don't add pages for the sake of having a website. Every part exists to help your customer understand, trust, or act." />

            <div class="mx-auto mt-10 max-w-5xl">

                <div class="divide-y divide-gray-200 rounded-3xl border border-gray-200 bg-white">

                    <div class="grid gap-4 p-6 sm:grid-cols-[220px_1fr] sm:p-8">
                        <h3 class="font-semibold text-gray-900">Answer their real questions</h3>
                        <p class="text-sm leading-7 text-gray-600">What you sell, who it's for, why you're the right choice,
                            how to reach you, all answered before they leave.</p>
                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[220px_1fr] sm:p-8">
                        <h3 class="font-semibold text-gray-900">Make you look trustworthy</h3>
                        <p class="text-sm leading-7 text-gray-600">One clear place to understand your business, instead of
                            piecing it together from scattered social posts.</p>
                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[220px_1fr] sm:p-8">
                        <h3 class="font-semibold text-gray-900">Make the next step obvious</h3>
                        <p class="text-sm leading-7 text-gray-600">Order, enquire, book, or call, whatever the action is, we
                            make it impossible to miss.</p>
                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[220px_1fr] sm:p-8">
                        <h3 class="font-semibold text-gray-900">Built around your business</h3>
                        <p class="text-sm leading-7 text-gray-600">A retail shop, service company, or professional don't
                            need the same website. We build what your customers actually need.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- PRICING --}}
    {{-- ========================================================= --}}

    <section id="pricing" class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="Starting Prices" title="Choose A Website That Fits Your Business"
                description="These are starting prices. Final cost depends on the pages and features your business actually needs, confirmed before we start." />

            <div class="mx-auto mt-10 grid max-w-5xl gap-5 md:grid-cols-3">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <p class="text-sm font-semibold text-gray-500">Personal Website</p>
                    <div class="mt-4"><span class="text-3xl font-bold text-gray-900">Rs. 25,000</span><span
                            class="text-sm text-gray-500"> starting</span></div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">A professional place to present yourself, your work, or
                        your expertise online.</p>
                    <div class="bg-primary/5 mt-5 rounded-xl p-4">
                        <p class="text-primary text-sm font-semibold">New Project Offer</p>
                        <p class="mt-1 text-xs leading-5 text-gray-600">10% off selected personal website projects.</p>
                    </div>
                </div>

                <div class="border-primary rounded-2xl border-2 bg-white p-6 shadow-sm">
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-sm font-semibold text-gray-500">Business Website</p>
                        <span class="bg-primary rounded-full px-3 py-1 text-xs font-semibold text-white">Popular</span>
                    </div>
                    <div class="mt-4"><span class="text-3xl font-bold text-gray-900">Rs. 50,000</span><span
                            class="text-sm text-gray-500"> starting</span></div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">A professional online presence that explains your
                        services and generates enquiries.</p>
                    <div class="bg-primary/5 mt-5 rounded-xl p-4">
                        <p class="text-primary text-sm font-semibold">New Business Offer</p>
                        <p class="mt-1 text-xs leading-5 text-gray-600">15% off selected new business website projects.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">
                    <p class="text-sm font-semibold text-gray-500">Ecommerce Store</p>
                    <div class="mt-4"><span class="text-3xl font-bold text-gray-900">Rs. 75,000</span><span
                            class="text-sm text-gray-500"> starting</span></div>
                    <p class="mt-4 text-sm leading-6 text-gray-600">A clear path from product discovery to purchase for
                        businesses selling online.</p>
                    <div class="bg-primary/5 mt-5 rounded-xl p-4">
                        <p class="text-primary text-sm font-semibold">New Store Offer</p>
                        <p class="mt-1 text-xs leading-5 text-gray-600">20% off selected new ecommerce projects.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- NO RISK --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-5xl px-6">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-primary text-sm font-semibold">Why This Is Low Risk</p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">
                    You Know Exactly What You're Paying For
                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">
                    A website is a real investment. Here's exactly what we commit to before and during the project.
                </p>

            </div>

            <div class="mx-auto mt-10 grid max-w-4xl gap-5 sm:grid-cols-3">

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">
                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h6m-6 4h6M5 6h14a1 1 0 011 1v11a2 2 0 01-2 2H6a2 2 0 01-2-2V7a1 1 0 011-1z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Fixed Scope, No Surprises</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We agree on price and scope before starting. What we
                        quote is what you pay.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">
                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.5-3.5a9 9 0 11-15 6.5A9 9 0 0116.5 5.5z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Free Revisions Until You're Happy</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">We refine the design and content within the agreed
                        scope until you approve it.</p>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">
                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Money Back If We Don't Deliver</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">If we fail to deliver what we agreed on, your advance
                        payment is refunded.</p>
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
            <x-section-heading label="FAQ" title="Questions You May Have Before Starting"
                description="Still unsure? Tell us about your business and we'll discuss it with you directly." />
            <x-faq :faqs="$faqs" />
        </div>
    </section>

    {{-- ========================================================= --}}
    {{-- FINAL CTA --}}
    {{-- ========================================================= --}}

    <x-cta title="What Are Visitors Seeing When They Check You Right Now?"
        description="Tell us what your business does and what you want your website to help you achieve. We will discuss what makes sense for your situation."
        button-text="Discuss My Website" button-url="#contact"
        note="New business projects may qualify for our current website discount." />

@endsection

@push('schema')
    <x-schema.service name="Website Development"
        description="Website development for businesses that need a clear, professional online presence."
        url="{{ route('web-development') }}" min-price="25000" price-currency="PKR" />

    <x-schema.faq :faqs="$faqs" />
@endpush
