@props([
    'title',
    'description',
    'buttonText' => 'Book a Free Consultation',
    'buttonUrl' => '#contact',
    'note' => null,
])

<section class="py-12 lg:py-16">

    <div class="mx-auto max-w-5xl px-6">

        <div class="bg-primary rounded-3xl px-6 py-9 text-center sm:px-10">

            <h2 class="text-2xl font-bold leading-tight text-white sm:text-3xl">
                {{ $title }}
            </h2>

            <p class="mx-auto mt-3 max-w-2xl text-sm leading-6 text-white/80 sm:text-base">
                {{ $description }}
            </p>

            <div class="mt-6">

                <a href="{{ $buttonUrl }}"
                    class="inline-flex items-center justify-center rounded-xl bg-white px-7 py-3.5 text-sm font-semibold text-gray-900 transition hover:bg-gray-100">

                    {{ $buttonText }}

                </a>

            </div>

            @if ($note)
                <p class="mt-4 text-xs text-white/60">
                    {{ $note }}
                </p>
            @endif

        </div>

    </div>

</section>
```
