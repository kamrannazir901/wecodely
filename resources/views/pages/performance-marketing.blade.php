@extends('layouts.app')

@section('title', 'Performance Marketing Services for Businesses | Wecodely')

@section('meta_description',
    'Improve your online advertising with better targeting, tracking and campaign decisions.
    Wecodely helps businesses find what is wasting budget and what needs fixing.')

@section('og_title', 'Performance Marketing Services for Businesses | Wecodely')

@section('og_description',
    'Not getting enough from your advertising? We review your campaigns, targeting, tracking and
    customer journey to find what needs improvement.')

    @php

        $faqs = [
            [
                'question' => 'Do you work with both sales and lead generation businesses?',
                'answer' =>
                    'Yes. We work with businesses that want more online purchases as well as businesses that need more relevant enquiries, calls or messages. The approach depends on how your business gets customers.',
            ],

            [
                'question' => 'What exactly is included in the free audit?',
                'answer' =>
                    'We review your current advertising, targeting, landing page or website, and tracking setup, then tell you what we find and what we\'d recommend fixing first. There\'s no cost or commitment to have this conversation.',
            ],

            [
                'question' => 'Do I need to already be running ads?',
                'answer' =>
                    'No. We can work with businesses starting from scratch as well as businesses that already have campaigns running.',
            ],

            [
                'question' => 'Which advertising platforms do you use?',
                'answer' =>
                    'Depending on your business and customers, we may recommend platforms such as Meta, Google, TikTok, Snapchat or YouTube. We choose based on what makes sense for your business rather than using the same platform for everyone.',
            ],

            [
                'question' => 'Can you work with my existing website and campaigns?',
                'answer' =>
                    'Yes. If you already have a website, advertising campaigns or tracking setup, we can review what is already there and identify what may need improvement.',
            ],

            [
                'question' => 'Am I locked into a contract?',
                'answer' =>
                    'No. We work month to month with no long term lock-in. If it is not working for you, you can stop without an exit fee.',
            ],

            [
                'question' => 'Do you guarantee sales or leads?',
                'answer' =>
                    'No. We do not make promises about a specific number of sales or leads. Results depend on factors such as your offer, pricing, market, competition, budget, customer demand and sales process. Our focus is on improving the parts we can control and making decisions based on the available data.',
            ],

            [
                'question' => 'How much should I spend on advertising?',
                'answer' =>
                    'There is no fixed budget that works for every business. We look at your business, customer value, market and goals before suggesting a realistic starting point.',
            ],
        ];

        $feedbacks = [
            [
                'name' => 'Ali',
                'business' => 'Ecommerce Brand',
                'message' =>
                    'Hum ads chala rahay thay lekin sales utni nahi aa rahi thi. Wecodely ne sirf ads ko nahi dekha, website aur customer journey ko bhi check kiya. Humein samajh aya ke problem sirf ads ki nahi thi.',
            ],

            [
                'name' => 'Usman',
                'business' => 'Real Estate Business',
                'message' =>
                    'Humein enquiries to mil rahi thin lekin har lead relevant nahi thi. Wecodely ne targeting, ad message aur enquiry process ko dekh kar bataya ke kahan improvement ki zarurat hai. Discussion simple aur easy to understand thi.',
            ],

            [
                'name' => 'Ahmed',
                'business' => 'Service Business',
                'message' =>
                    'I liked that they first took time to understand our business instead of immediately suggesting changes. They explained what could be improved and why. The communication was clear and easy to follow.',
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

                        20% Off Your First Month

                    </p>

                    {{-- HOOK (Problem) --}}
                    <h1
                        class="mt-4 max-w-3xl text-4xl font-bold leading-[1.08] tracking-tight text-gray-900 sm:text-5xl lg:text-[3.7rem]">

                        Your Ads Are Running.
                        <span class="text-primary">
                            So Why Aren't The Sales?
                        </span>

                    </h1>

                    {{-- AGITATE --}}
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-700">

                        Every rupee spent on ads that don't convert is a rupee
                        you can't spend on the ones that would. Most businesses
                        never find out where exactly that money is leaking.

                    </p>

                    <p class="mt-4 max-w-2xl text-base leading-7 text-gray-600">

                        Clicks with no sales. Enquiries that go nowhere. Numbers
                        on a report that don't tell you what's actually working.
                        We find the real problem before you spend another rupee
                        guessing.

                    </p>

                    <a href="#contact"
                        class="bg-primary hover:bg-primary-700 mt-8 inline-flex items-center justify-center rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                        Get Your Free Marketing Audit

                    </a>

                    <p class="mt-4 text-xs text-gray-500">
                        We understand your business first. No commitment required to talk to us.
                    </p>

                </div>

                {{-- FORM --}}
                <div id="contact">

                    <div class="rounded-3xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

                        <p class="text-primary text-sm font-semibold">
                            Free Marketing Audit
                        </p>

                        <h2 class="mt-2 text-2xl font-bold text-gray-900">
                            Find Out Where You're Losing Customers
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Tell us about your business and current marketing.
                            We'll review it and tell you honestly what we find.
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
    {{-- PROBLEM (expanded) --}}
    {{-- ========================================================= --}}

    <section class="lg:py-18 bg-gray-50 py-14">

        <div class="mx-auto max-w-5xl px-6">

            <div class="max-w-3xl">

                <p class="text-primary text-sm font-semibold">
                    The Problem
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">

                    More clicks doesn't mean more business. It just means more spend.

                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">

                    You can watch the ad spend go out every day and still have
                    no real answer for where it's actually landing.

                </p>

            </div>

            <div class="mt-8 grid gap-6 md:grid-cols-2">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Traffic, but not enough sales
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">

                        People click, look around, leave. The issue could be
                        the ad, the offer, the product page, the checkout, or
                        somewhere else entirely, and right now, you don't know which.

                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Enquiries, but not enough customers
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">

                        Messages come in, but too many aren't serious, aren't
                        the right fit, or go quiet after the first reply.

                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Spend, with no idea what's working
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">

                        Clicks and reach look fine on a report. They don't tell
                        you if any of it is actually growing your business.

                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <h3 class="text-lg font-semibold text-gray-900">
                        Tired of guessing with your budget
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">

                        Spending more isn't always the answer. Sometimes the
                        smarter move is fixing what's already broken first.

                    </p>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- SOLUTION --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-6xl px-6">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-primary text-sm font-semibold">
                    How We Fix It
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">

                    We look at what happens before, during and after the click.

                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">

                    A great ad still fails against a weak offer, a confusing
                    website, or no follow up. We fix the whole path, not just the ad.

                </p>

            </div>

            <div class="mx-auto mt-10 max-w-5xl">

                <div class="divide-y divide-gray-200 rounded-3xl border border-gray-200 bg-white">

                    <div class="grid gap-4 p-6 sm:grid-cols-[210px_1fr] sm:p-8">

                        <h3 class="font-semibold text-gray-900">
                            Reach the right people
                        </h3>

                        <p class="text-sm leading-7 text-gray-600">
                            We fix targeting and messaging so your budget goes
                            toward people who are actually likely to buy from you.
                        </p>

                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[210px_1fr] sm:p-8">

                        <h3 class="font-semibold text-gray-900">
                            Give them a reason to act
                        </h3>

                        <p class="text-sm leading-7 text-gray-600">
                            We review your offer, landing page, product page or
                            enquiry process and fix whatever's stopping people
                            from taking the next step.
                        </p>

                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[210px_1fr] sm:p-8">

                        <h3 class="font-semibold text-gray-900">
                            Know what's actually working
                        </h3>

                        <p class="text-sm leading-7 text-gray-600">
                            We set up proper tracking so you can see, in real
                            numbers, what's driving results and what's just spend.
                        </p>

                    </div>

                    <div class="grid gap-4 p-6 sm:grid-cols-[210px_1fr] sm:p-8">

                        <h3 class="font-semibold text-gray-900">
                            Keep improving
                        </h3>

                        <p class="text-sm leading-7 text-gray-600">
                            We review the data, test changes, and shift budget
                            toward what's actually earning it.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- HOW WE WORK --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-5xl px-6">

            <div class="max-w-3xl">

                <p class="text-primary text-sm font-semibold">
                    What Happens After You Contact Us
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">

                    We don't start by telling you to spend more.

                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">

                    First we need to understand what you sell, how customers
                    find you, and where you think things are breaking down.

                </p>

            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <span
                        class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">
                        01
                    </span>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                        Understand
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We learn about your business, customers, offer and
                        current marketing.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <span
                        class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">
                        02
                    </span>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                        Find the leak
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We identify exactly where people are dropping off
                        and what needs fixing first.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6">

                    <span
                        class="bg-primary/10 text-primary flex h-10 w-10 items-center justify-center rounded-xl text-sm font-bold">
                        03
                    </span>

                    <h3 class="mt-5 text-lg font-semibold text-gray-900">
                        Fix & improve
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We make the agreed changes, measure the results,
                        and keep improving from there.
                    </p>

                </div>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- RISK FREE COMMITMENT --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-5xl px-6">

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-primary text-sm font-semibold">
                    Why This Is Low Risk
                </p>

                <h2 class="mt-2 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">

                    You Don't Have To Trust Us Blindly

                </h2>

                <p class="mt-4 text-base leading-7 text-gray-600">

                    We know asking a stranger to touch your marketing feels
                    risky. Here's exactly what we commit to before you pay us anything.

                </p>

            </div>

            <div class="mx-auto mt-10 grid max-w-4xl gap-5 sm:grid-cols-3">

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">

                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.5-3.5a9 9 0 11-15 6.5A9 9 0 0116.5 5.5z" />
                        </svg>

                    </span>

                    <h3 class="mt-4 text-base font-semibold text-gray-900">
                        Free Audit First
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We review your current marketing and tell you what
                        we find, before you pay us a single rupee.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">

                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h6m-6 4h6M5 6h14a1 1 0 011 1v11a2 2 0 01-2 2H6a2 2 0 01-2-2V7a1 1 0 011-1z" />
                        </svg>

                    </span>

                    <h3 class="mt-4 text-base font-semibold text-gray-900">
                        No Long Contracts
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        We work month to month. You're never locked into
                        something that isn't working for you.
                    </p>

                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 text-center">

                    <span class="bg-primary/10 text-primary mx-auto flex h-11 w-11 items-center justify-center rounded-xl">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </span>

                    <h3 class="mt-4 text-base font-semibold text-gray-900">
                        Cancel Anytime
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        No exit fees, no awkward conversations. If it's not
                        working for you, you can stop.
                    </p>

                </div>

            </div>

            <p class="mx-auto mt-6 max-w-2xl text-center text-xs leading-5 text-gray-500">
                We can't guarantee a specific number of sales or leads, no
                honest agency can. What we can guarantee is that you'll know
                exactly what we're doing, why, and what it's producing, before
                you decide to continue.
            </p>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- OFFER --}}
    {{-- ========================================================= --}}

    <section class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-4xl px-6">

            <div class="border-primary/20 bg-primary/5 rounded-3xl border p-7 text-center sm:p-10">

                <p class="text-primary text-sm font-semibold">
                    Start Here
                </p>

                <h2 class="mt-3 text-3xl font-bold leading-tight text-gray-900 sm:text-4xl">

                    Get Your Free Marketing Audit

                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-gray-600">

                    We'll review your current advertising, website and tracking,
                    and tell you honestly what we find. No commitment needed
                    to have this conversation.

                </p>

                <div class="mx-auto mt-7 max-w-xl rounded-2xl bg-white p-5 text-left">

                    <p class="text-sm font-semibold text-gray-900">
                        New client offer
                    </p>

                    <p class="text-primary mt-1 text-2xl font-bold">
                        20% Off Your First Month
                    </p>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Available for eligible new Wecodely clients, applied
                        after your audit if you decide to move forward.
                        We'll explain pricing and scope clearly before you decide.
                    </p>

                </div>

                <a href="#contact"
                    class="bg-primary hover:bg-primary-700 mt-7 inline-flex rounded-xl px-7 py-3.5 text-sm font-semibold text-white transition">

                    Get Your Free Marketing Audit

                </a>

                <p class="mt-4 text-xs leading-5 text-gray-500">
                    No guaranteed sales or leads. Results depend on your offer,
                    market, budget, competition and sales process.
                </p>

            </div>

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- CLIENT FEEDBACK --}}
    {{-- ========================================================= --}}

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-7xl px-6">

            <x-section-heading label="Client Feedback" title="What Clients Say About Working With Us"
                description="Feedback from businesses we have worked with." />

            <x-client-feedback :feedbacks="$feedbacks" />

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FAQ --}}
    {{-- ========================================================= --}}

    <section id="faq" class="bg-gray-50 py-14 lg:py-20">

        <div class="mx-auto max-w-4xl px-6">

            <x-section-heading label="FAQ" title="Before You Get Started"
                description="A few common questions about working with us." />

            <x-faq :faqs="$faqs" />

        </div>

    </section>

    {{-- ========================================================= --}}
    {{-- FINAL CTA --}}
    {{-- ========================================================= --}}

    <x-cta title="Not Sure What's Holding Your Marketing Back?"
        description="Get a free audit first. Tell us about your business and what you're trying to achieve, and we'll tell you honestly what we find before you spend anything."
        button-text="Get Your Free Marketing Audit" button-url="#contact"
        note="No pressure. No guaranteed results. Just a clear, honest look at your marketing." />

@endsection

@push('schema')
    <x-schema.service name="Performance Marketing"
        description="Performance marketing services for businesses that want to improve their advertising, website, tracking, and customer journey."
        url="{{ route('performance-marketing') }}" />

    <x-schema.faq :faqs="$faqs" />
@endpush
