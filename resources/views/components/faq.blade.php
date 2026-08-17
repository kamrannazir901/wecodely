@props([
    'faqs' => [],
])

<div class="mt-10 space-y-4">

    @foreach ($faqs as $faq)
        <details class="group rounded-2xl border border-gray-200 bg-white">

            <summary
                class="flex cursor-pointer list-none items-center justify-between gap-6 px-6 py-5 text-left text-base font-semibold text-gray-900">

                <span>
                    {{ $faq['question'] }}
                </span>

                <span
                    class="text-primary shrink-0 text-2xl font-normal leading-none transition-transform duration-200 group-open:rotate-45">

                    +

                </span>

            </summary>

            <div class="px-6 pb-5">

                <p class="text-sm leading-6 text-gray-600">

                    {{ $faq['answer'] }}

                </p>

            </div>

        </details>
    @endforeach

</div>
