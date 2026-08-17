@props([
    'label' => null,
    'title',
    'description' => null,
])

<div class="mx-auto max-w-3xl text-center">

    @if ($label)
        <div
            class="border-primary/20 bg-primary/5 text-primary inline-flex items-center rounded-full border px-4 py-1 text-xs font-semibold">

            {{ $label }}

        </div>
    @endif

    <h2 class="{{ $label ? 'mt-5' : '' }} text-3xl font-bold leading-tight tracking-tight text-gray-900 sm:text-4xl">

        {{ $title }}

    </h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 text-gray-600 sm:text-lg">

            {{ $description }}

        </p>
    @endif

</div>
