{{-- ========================================================= --}}
{{-- CLIENT FEEDBACK COMPONENT --}}
{{-- ========================================================= --}}

<section class="py-14 lg:py-20">

    <div class="mx-auto max-w-7xl px-6">

        {{-- Feedback Cards --}}
        <div class="mx-auto grid max-w-6xl gap-6 md:grid-cols-3">

            @foreach ($feedbacks as $feedback)
                <div class="flex h-full flex-col rounded-2xl border border-gray-200 bg-white p-7">

                    {{-- Rating --}}
                    <div class="text-primary text-sm">
                        ★★★★★
                    </div>

                    {{-- Feedback --}}
                    <p class="mt-5 text-base leading-7 text-gray-700">
                        “{{ $feedback['message'] }}”
                    </p>

                    {{-- Author --}}
                    <div class="mt-auto border-t border-gray-100 pt-5">

                        <p class="font-semibold text-gray-900">
                            {{ $feedback['name'] }}
                        </p>

                        <p class="mt-1 text-sm text-gray-500">
                            {{ $feedback['business'] }}
                        </p>

                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>
