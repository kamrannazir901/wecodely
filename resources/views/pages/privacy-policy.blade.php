@extends('layouts.app')

@section('title', 'Privacy Policy | Wecodely')

@section('meta_description',
    'Read Wecodely\'s privacy policy to understand how we collect, use, and protect
    your information.')

@section('content')

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-3xl px-6">

            <div
                class="border-primary/20 bg-primary/5 text-primary inline-flex items-center rounded-full border px-4 py-1.5 text-xs font-semibold">

                Privacy Policy

            </div>

            <h1 class="mt-5 text-4xl font-bold leading-[1.1] tracking-tight text-gray-900">
                Privacy Policy
            </h1>

            <p class="mt-4 text-sm text-gray-500">
                Last updated: {{ now()->format('F j, Y') }}
            </p>

            <div class="prose prose-gray mt-10 max-w-none">

                <p class="text-base leading-7 text-gray-700">
                    This Privacy Policy explains how Wecodely ("we", "us", "our") collects, uses, and protects
                    information when you visit our website or contact us for our services.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Information We Collect</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    When you fill out a contact form, message us on WhatsApp, or email us, we may collect
                    information such as your name, phone number, email address, business details, and any
                    message you send us. We may also collect basic technical information such as your browser
                    type, device, and pages visited, through standard analytics and advertising tools.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">How We Use Your Information</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">We use the information we collect to:</p>
                <ul class="mt-3 list-disc space-y-2 pl-6 text-base leading-7 text-gray-700">
                    <li>Respond to your enquiries and provide the services you request</li>
                    <li>Communicate with you about your project or account</li>
                    <li>Improve our website and services</li>
                    <li>Understand how visitors use our website</li>
                    <li>Run and measure advertising campaigns</li>
                </ul>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Cookies & Tracking Technologies</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Our website may use cookies and similar technologies, including tools such as Meta Pixel and
                    Google Analytics, to understand website traffic and measure the performance of our advertising.
                    You can control or disable cookies through your browser settings, though some features of the
                    website may not work as intended if you do.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Sharing Your Information</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    We do not sell your personal information. We may share information with trusted third party
                    tools we use to run our business, such as hosting providers, communication tools, and
                    advertising platforms, only as needed to operate our services.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Data Retention</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    We keep your information for as long as needed to provide our services, respond to your
                    enquiries, and meet any legal or accounting requirements.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Your Rights</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    You can ask us to access, correct, or delete the personal information we hold about you at
                    any time by contacting us using the details below.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Changes To This Policy</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    We may update this Privacy Policy from time to time. Any changes will be posted on this page
                    with an updated revision date.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Contact Us</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    If you have any questions about this Privacy Policy, you can reach us at:
                </p>
                <ul class="mt-3 list-none space-y-1 pl-0 text-base leading-7 text-gray-700">
                    <li>Email: <a href="mailto:wecodelyteam@gmail.com"
                            class="text-primary font-medium">wecodelyteam@gmail.com</a></li>
                    <li>WhatsApp: <a href="https://wa.me/923185421345" class="text-primary font-medium">+92 318 5421345</a>
                    </li>
                </ul>

            </div>

        </div>

    </section>

@endsection
