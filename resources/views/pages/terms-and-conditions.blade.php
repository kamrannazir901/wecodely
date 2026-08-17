@extends('layouts.app')

@section('title', 'Terms and Conditions | Wecodely')

@section('meta_description', 'Read Wecodely\'s terms and conditions for using our website and services.')

@section('content')

    <section class="py-14 lg:py-20">

        <div class="mx-auto max-w-3xl px-6">

            <div
                class="border-primary/20 bg-primary/5 text-primary inline-flex items-center rounded-full border px-4 py-1.5 text-xs font-semibold">

                Terms & Conditions

            </div>

            <h1 class="mt-5 text-4xl font-bold leading-[1.1] tracking-tight text-gray-900">
                Terms and Conditions
            </h1>

            <p class="mt-4 text-sm text-gray-500">
                Last updated: {{ now()->format('F j, Y') }}
            </p>

            <div class="prose prose-gray mt-10 max-w-none">

                <p class="text-base leading-7 text-gray-700">
                    These Terms and Conditions ("Terms") govern your use of the Wecodely website and any
                    services you purchase from us. By using our website or engaging our services, you agree
                    to these Terms.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Our Services</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Wecodely provides performance marketing and website development services. The exact scope,
                    deliverables, timeline, and price for any project will be agreed with you before work begins.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Quotes & Pricing</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Prices shown on our website are starting prices and may change based on your specific
                    requirements. We will confirm the final scope and price with you before starting any paid
                    work. Any discounts or offers mentioned are subject to availability and may be withdrawn
                    at any time.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Payments</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Unless otherwise agreed, projects require an advance payment before work begins, with the
                    remaining balance due as agreed in your project scope. For ongoing marketing services,
                    fees are billed on a recurring basis as agreed with you.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Refunds</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    If we fail to deliver the work agreed upon in your project scope, your advance payment will
                    be refunded. Refunds are not provided simply because a project or campaign did not produce
                    the results you hoped for, since results depend on factors outside our full control, such
                    as your market, offer, pricing, and competition.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">No Guaranteed Results</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    We do not guarantee a specific number of leads, sales, visitors, or any other business
                    outcome. Our commitment is to do the agreed work carefully, transparently, and to keep you
                    informed throughout the process.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Client Responsibilities</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    You agree to provide accurate information, timely feedback, and any content or access
                    needed for us to complete your project. Delays in providing these may affect project
                    timelines.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Intellectual Property</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Once a project is paid in full, ownership of the final deliverables (such as your website)
                    transfers to you. Wecodely retains the right to showcase completed work in our portfolio
                    and marketing materials unless otherwise agreed in writing.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Third Party Services</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    Our services may involve third party platforms such as hosting providers, advertising
                    platforms, or software tools. We are not responsible for outages, policy changes, or
                    issues caused by these third party services.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Limitation of Liability</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    To the extent permitted by law, Wecodely is not liable for any indirect, incidental, or
                    consequential damages arising from the use of our services, including loss of revenue,
                    data, or business opportunities.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Changes To These Terms</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    We may update these Terms from time to time. Continued use of our website or services
                    after changes are posted means you accept the updated Terms.
                </p>

                <h2 class="mt-10 text-xl font-bold text-gray-900">Contact Us</h2>
                <p class="mt-3 text-base leading-7 text-gray-700">
                    If you have any questions about these Terms, you can reach us at:
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
