@extends('layouts.admin')

@section('title', 'Lead Details | Wecodely')

@section('page_header')

    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <div class="mb-2">

                <a href="{{ route('admin.leads') }}"
                    class="hover:text-primary inline-flex items-center gap-1.5 text-sm font-medium text-gray-500 transition">

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 19l-7-7 7-7" />
                    </svg>

                    Back to Leads

                </a>

            </div>

            <h1 class="text-2xl font-bold tracking-tight text-gray-900">
                {{ $lead->name ?: 'Lead Details' }}
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Manage contact information, qualification and follow up.
            </p>

        </div>

        <div class="text-sm text-gray-400">
            Lead #{{ $lead->id }}
        </div>

    </div>

@endsection

@section('content')

    {{-- ========================================================= --}}
    {{-- ALERTS --}}
    {{-- ========================================================= --}}

    @if (session('success'))
        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())

        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">

            <ul class="list-inside list-disc space-y-1">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <div class="grid gap-6 lg:grid-cols-[1fr_320px]">

        {{-- ========================================================= --}}
        {{-- MAIN CONTENT --}}
        {{-- ========================================================= --}}

        <div class="space-y-6">

            {{-- ========================================================= --}}
            {{-- CLIENT INFORMATION --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Client Information
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Information collected after contacting the lead.
                    </p>

                </div>

                <form action="{{ route('admin.leads.update', $lead) }}" method="POST">

                    @csrf
                    @method('PATCH')

                    <div class="grid gap-5 px-6 py-6 sm:grid-cols-2">

                        {{-- Name --}}
                        <div>

                            <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                Name
                            </label>

                            <input type="text" id="name" name="name" value="{{ old('name', $lead->name) }}"
                                placeholder="Client name"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- WhatsApp --}}
                        <div>

                            <label for="whatsapp" class="mb-2 block text-sm font-medium text-gray-700">
                                WhatsApp
                            </label>

                            <input type="text" id="whatsapp" name="whatsapp"
                                value="{{ old('whatsapp', $lead->whatsapp) }}" placeholder="03XX XXXXXXX"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- Email --}}
                        <div>

                            <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                Email
                            </label>

                            <input type="email" id="email" name="email" value="{{ old('email', $lead->email) }}"
                                placeholder="client@example.com"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- Company --}}
                        <div>

                            <label for="company" class="mb-2 block text-sm font-medium text-gray-700">
                                Company
                            </label>

                            <input type="text" id="company" name="company"
                                value="{{ old('company', $lead->company) }}" placeholder="Company or business name"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- City --}}
                        <div>

                            <label for="city" class="mb-2 block text-sm font-medium text-gray-700">
                                City
                            </label>

                            <input type="text" id="city" name="city" value="{{ old('city', $lead->city) }}"
                                placeholder="City"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- Business Address --}}
                        <div>

                            <label for="business_address" class="mb-2 block text-sm font-medium text-gray-700">
                                Business Address
                            </label>

                            <input type="text" id="business_address" name="business_address"
                                value="{{ old('business_address', $lead->business_address) }}"
                                placeholder="Business address"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                    </div>

                    <div class="border-t border-gray-200 px-6 py-4">

                        <button type="submit"
                            class="bg-primary hover:bg-primary-700 rounded-xl px-5 py-2.5 text-sm font-semibold text-white transition">

                            Save Client Information

                        </button>

                    </div>

                </form>

            </div>

            {{-- ========================================================= --}}
            {{-- ORIGINAL ENQUIRY --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Original Enquiry
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Information submitted directly through the website.
                    </p>

                </div>

                <div class="grid gap-6 px-6 py-6 sm:grid-cols-2">

                    {{-- Intent --}}
                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Intent
                        </p>

                        <p class="mt-2 text-sm font-semibold text-gray-900">
                            {{ $lead->intent === 'service' ? 'I need a service' : 'I need information' }}
                        </p>

                    </div>

                    {{-- Received --}}
                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Received
                        </p>

                        <p class="mt-2 text-sm font-medium text-gray-900">
                            {{ $lead->created_at->format('d M Y, h:i A') }}
                        </p>

                    </div>

                    {{-- Message --}}
                    <div class="sm:col-span-2">

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Message
                        </p>

                        <div class="mt-2">

                            @if ($lead->message)
                                <p class="whitespace-pre-line text-sm leading-7 text-gray-700">
                                    {{ $lead->message }}
                                </p>
                            @else
                                <p class="text-sm text-gray-400">
                                    No message was provided.
                                </p>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

            {{-- ========================================================= --}}
            {{-- QUALIFICATION --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Qualification
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Add information collected during your conversation with the lead.
                    </p>

                </div>

                <form action="{{ route('admin.leads.update', $lead) }}" method="POST">

                    @csrf
                    @method('PATCH')

                    <div class="grid gap-5 px-6 py-6 sm:grid-cols-2">

                        {{-- Service --}}
                        <div>

                            <label for="service" class="mb-2 block text-sm font-medium text-gray-700">
                                Service
                            </label>

                            <input type="text" id="service" name="service"
                                value="{{ old('service', $lead->service) }}" placeholder="e.g. Performance Marketing"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- Budget --}}
                        <div>

                            <label for="client_budget" class="mb-2 block text-sm font-medium text-gray-700">
                                Client Budget
                            </label>

                            <input type="number" step="0.01" min="0" id="client_budget" name="client_budget"
                                value="{{ old('client_budget', $lead->client_budget) }}" placeholder="e.g. 100000"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        </div>

                        {{-- Budget Frequency --}}
                        <div>

                            <label for="budget_frequency" class="mb-2 block text-sm font-medium text-gray-700">
                                Budget Frequency
                            </label>

                            <select id="budget_frequency" name="budget_frequency"
                                class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                                <option value="">
                                    Select frequency
                                </option>

                                <option value="one_time" @selected($lead->budget_frequency === 'one_time')>
                                    One time
                                </option>

                                <option value="monthly" @selected($lead->budget_frequency === 'monthly')>
                                    Monthly
                                </option>

                            </select>

                        </div>

                        {{-- Notes --}}
                        <div class="sm:col-span-2">

                            <label for="notes" class="mb-2 block text-sm font-medium text-gray-700">
                                Internal Notes
                            </label>

                            <textarea id="notes" name="notes" rows="5"
                                placeholder="Add notes from calls, discussions, requirements, objections, etc."
                                class="focus:border-primary focus:ring-primary w-full resize-none rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm leading-6 text-gray-900 outline-none transition">{{ old('notes', $lead->notes) }}</textarea>

                        </div>

                    </div>

                    <div class="border-t border-gray-200 px-6 py-4">

                        <button type="submit"
                            class="bg-primary hover:bg-primary-700 rounded-xl px-5 py-2.5 text-sm font-semibold text-white transition">

                            Save Qualification

                        </button>

                    </div>

                </form>

            </div>

            {{-- ========================================================= --}}
            {{-- MARKETING ATTRIBUTION --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Marketing Attribution
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Information captured from the visitor's original visit.
                    </p>

                </div>

                <div class="grid gap-6 px-6 py-6 sm:grid-cols-2">

                    @php
                        $attribution = [
                            'utm_source' => 'UTM Source',
                            'utm_medium' => 'UTM Medium',
                            'utm_campaign' => 'UTM Campaign',
                            'utm_term' => 'UTM Term',
                            'utm_content' => 'UTM Content',
                            'fbclid' => 'Facebook Click ID',
                            'gclid' => 'Google Click ID',
                        ];
                    @endphp

                    @foreach ($attribution as $field => $label)
                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                                {{ $label }}
                            </p>

                            <p class="mt-2 break-all text-sm text-gray-900">
                                {{ $lead->{$field} ?: 'Not available' }}
                            </p>

                        </div>
                    @endforeach

                    {{-- Landing Page --}}
                    <div class="sm:col-span-2">

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Landing Page
                        </p>

                        @if ($lead->landing_page)
                            <a href="{{ $lead->landing_page }}" target="_blank" rel="noopener noreferrer"
                                class="text-primary mt-2 block break-all text-sm hover:underline">

                                {{ $lead->landing_page }}

                            </a>
                        @else
                            <p class="mt-2 text-sm text-gray-400">
                                Not available
                            </p>
                        @endif

                    </div>

                    {{-- Referrer --}}
                    <div class="sm:col-span-2">

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Referrer
                        </p>

                        @if ($lead->landing_referrer)
                            <p class="mt-2 break-all text-sm text-gray-900">
                                {{ $lead->landing_referrer }}
                            </p>
                        @else
                            <p class="mt-2 text-sm text-gray-400">
                                Direct / Not available
                            </p>
                        @endif

                    </div>

                </div>

            </div>

            {{-- ========================================================= --}}
            {{-- TIMESTAMPS --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Record Information
                    </h2>

                </div>

                <div class="grid gap-6 px-6 py-6 sm:grid-cols-2">

                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Created
                        </p>

                        <p class="mt-2 text-sm font-medium text-gray-900">
                            {{ $lead->created_at->format('d M Y, h:i A') }}
                        </p>

                    </div>

                    <div>

                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                            Last Updated
                        </p>

                        <p class="mt-2 text-sm font-medium text-gray-900">
                            {{ $lead->updated_at->format('d M Y, h:i A') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

        {{-- ========================================================= --}}
        {{-- SIDEBAR --}}
        {{-- ========================================================= --}}

        <div class="space-y-6">

            {{-- ========================================================= --}}
            {{-- LEAD STAGE --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Lead Stage
                    </h2>

                </div>

                <div class="px-6 py-6">

                    <form action="{{ route('admin.leads.status', $lead) }}" method="POST">

                        @csrf
                        @method('PATCH')

                        <label for="status" class="mb-2 block text-sm font-medium text-gray-700">
                            Current stage
                        </label>

                        <select id="status" name="status"
                            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                            @foreach (config('contacts.lead_statuses', []) as $key => $stage)
                                <option value="{{ $key }}" @selected($lead->status === $key)>
                                    {{ $stage['label'] }}
                                </option>
                            @endforeach

                        </select>

                        <button type="submit"
                            class="bg-primary hover:bg-primary-700 mt-4 w-full rounded-xl px-5 py-3 text-sm font-semibold text-white transition">

                            Update Stage

                        </button>

                    </form>

                </div>

            </div>

            {{-- ========================================================= --}}
            {{-- FOLLOW UP --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Follow Up
                    </h2>

                </div>

                <form action="{{ route('admin.leads.update', $lead) }}" method="POST">

                    @csrf
                    @method('PATCH')

                    <div class="px-6 py-6">

                        <label for="next_follow_up_at" class="mb-2 block text-sm font-medium text-gray-700">

                            Next Follow Up

                        </label>

                        <input type="datetime-local" id="next_follow_up_at" name="next_follow_up_at"
                            value="{{ $lead->next_follow_up_at?->format('Y-m-d\TH:i') }}"
                            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 outline-none transition">

                        <button type="submit"
                            class="bg-primary hover:bg-primary-700 mt-4 w-full rounded-xl px-5 py-3 text-sm font-semibold text-white transition">

                            Save Follow Up

                        </button>

                    </div>

                </form>

            </div>

            {{-- ========================================================= --}}
            {{-- QUICK ACTIONS --}}
            {{-- ========================================================= --}}

            <div class="rounded-2xl border border-gray-200 bg-white">

                <div class="border-b border-gray-200 px-6 py-5">

                    <h2 class="text-base font-semibold text-gray-900">
                        Quick Actions
                    </h2>

                </div>

                <div class="space-y-3 px-6 py-6">

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/92{{ ltrim($lead->whatsapp, '0') }}" target="_blank"
                        rel="noopener noreferrer"
                        class="flex w-full items-center justify-center rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700">

                        Contact on WhatsApp

                    </a>

                    {{-- Email --}}
                    @if ($lead->email)
                        <a href="mailto:{{ $lead->email }}"
                            class="flex w-full items-center justify-center rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">

                            Send Email

                        </a>
                    @endif

                    {{-- Delete --}}
                    <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this lead? This action cannot be undone.')">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-xl border border-red-200 bg-white px-5 py-3 text-sm font-semibold text-red-600 transition hover:bg-red-50">

                            Delete Lead

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
