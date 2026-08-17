<form id="contact-form" action="{{ route('leads.store') }}" method="POST" class="space-y-5">

    @csrf

    {{-- General Error --}}
    @if (session('error'))
        <div class="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            {{ session('error') }}
        </div>
    @endif

    {{-- Success --}}
    @if (session('success'))
        <div class="rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    {{-- WhatsApp --}}
    <div>

        <label for="whatsapp" class="mb-2 block text-sm font-medium text-gray-700">
            WhatsApp number
        </label>

        <input type="tel" inputmode="numeric" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" required
            maxlength="11" placeholder="03XX XXXXXXX"
            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3.5 text-sm text-gray-900 outline-none transition">

        <p class="mt-1.5 text-xs text-gray-500">
            Enter 11 digits, for example 0312 3456789
        </p>

        @error('whatsapp')
            <p class="mt-1.5 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>

    {{-- Intent --}}
    <div>

        <label for="intent" class="mb-2 block text-sm font-medium text-gray-700">
            What are you looking for?
        </label>

        <select id="intent" name="intent" required
            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3.5 text-sm text-gray-900 outline-none transition">

            <option value="">
                Select one
            </option>

            <option value="service" @selected(old('intent') === 'service')>
                I need a service
            </option>

            <option value="information" @selected(old('intent') === 'information')>
                I need information
            </option>

        </select>

        @error('intent')
            <p class="mt-1.5 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>

    {{-- Optional Message --}}
    <div>

        <label for="message" class="mb-2 block text-sm font-medium text-gray-700">
            Anything you want us to know?
            <span class="font-normal text-gray-400">(Optional)</span>
        </label>

        <textarea id="message" name="message" rows="4"
            placeholder="Tell us briefly about your business or what you need..."
            class="focus:border-primary focus:ring-primary w-full resize-none rounded-xl border border-gray-300 bg-white px-4 py-3.5 text-sm text-gray-900 outline-none transition">{{ old('message') }}</textarea>

        @error('message')
            <p class="mt-1.5 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

    </div>

    {{-- Submit --}}
    <button type="submit"
        class="bg-primary hover:bg-primary-700 w-full rounded-xl px-6 py-4 text-base font-semibold text-white transition">
        Book Free Consultation
    </button>

    <p class="text-center text-xs leading-5 text-gray-500">
        No spam. We will only use your information to respond to your request.
    </p>

</form>

@if ($errors->any())
    <script>
        window.addEventListener('load', function() {

            const fieldName = @json(
                $errors->has('whatsapp')
                    ? 'whatsapp'
                    : ($errors->has('intent')
                        ? 'intent'
                        : ($errors->has('message')
                            ? 'message'
                            : null)));

            if (!fieldName) return;

            const field = document.getElementById(fieldName);

            if (!field) return;

            setTimeout(() => {
                field.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

                field.focus();
            }, 100);

        });
    </script>
@endif
