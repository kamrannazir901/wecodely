@extends('layouts.admin')

@section('title', 'Leads | Wecodely')

@section('page_header')

    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <h1 class="text-2xl font-bold tracking-tight text-gray-900">
                Leads
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Manage and follow up with your business enquiries.
            </p>

        </div>

        <div class="text-sm text-gray-500">
            {{ $leads->total() }} total leads
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

    {{-- ========================================================= --}}
    {{-- LEADS TABLE --}}
    {{-- ========================================================= --}}

    <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white">

        {{-- Table Header --}}
        <div class="border-b border-gray-200 px-6 py-4">

            <div class="flex items-center justify-between">

                <h2 class="text-base font-semibold text-gray-900">
                    All Leads
                </h2>

                <span class="text-sm text-gray-500">
                    {{ $leads->firstItem() ?? 0 }}
                    –
                    {{ $leads->lastItem() ?? 0 }}
                    of
                    {{ $leads->total() }}
                </span>

            </div>

        </div>

        {{-- Filters --}}
        @include('admin.leads.partials.filters')

        @if ($leads->count())

            {{-- ========================================================= --}}
            {{-- DESKTOP TABLE --}}
            {{-- ========================================================= --}}

            <div class="hidden overflow-x-auto md:block">

                <table class="w-full text-left">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                WhatsApp
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Intent
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Message
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Status
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Received
                            </th>

                            <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @foreach ($leads as $lead)
                            @php
                                $status = config('contacts.lead_statuses.' . $lead->status);

                                $statusLabel = $status['label'] ?? ucfirst(str_replace('_', ' ', $lead->status));

                                $statusClasses = $status['classes'] ?? 'bg-gray-100 text-gray-700';

                                $intentLabel = match ($lead->intent) {
                                    'service' => 'I need a service',
                                    'information' => 'I need information',
                                    default => ucfirst($lead->intent),
                                };
                            @endphp

                            <tr class="transition hover:bg-gray-50">

                                {{-- WhatsApp --}}
                                <td class="whitespace-nowrap px-6 py-4">

                                    <p class="text-sm font-semibold text-gray-900">
                                        {{ $lead->whatsapp }}
                                    </p>

                                </td>

                                {{-- Intent --}}
                                <td class="px-6 py-4">

                                    <span
                                        class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">

                                        {{ $intentLabel }}

                                    </span>

                                </td>

                                {{-- Message --}}
                                <td class="max-w-xs px-6 py-4">

                                    @if ($lead->message)
                                        <p class="truncate text-sm text-gray-600">
                                            {{ $lead->message }}
                                        </p>
                                    @else
                                        <span class="text-sm text-gray-400">
                                            No message
                                        </span>
                                    @endif

                                </td>

                                {{-- Status --}}
                                <td class="px-6 py-4">

                                    <span
                                        class="{{ $statusClasses }} inline-flex rounded-full px-3 py-1 text-xs font-semibold">

                                        {{ $statusLabel }}

                                    </span>

                                </td>

                                {{-- Date --}}
                                <td class="whitespace-nowrap px-6 py-4">

                                    <p class="text-sm text-gray-600">
                                        {{ $lead->created_at->format('d M Y') }}
                                    </p>

                                    <p class="mt-0.5 text-xs text-gray-400">
                                        {{ $lead->created_at->format('h:i A') }}
                                    </p>

                                </td>

                                {{-- Action --}}
                                <td class="whitespace-nowrap px-6 py-4 text-right">

                                    <a href="{{ route('admin.leads.show', $lead) }}"
                                        class="hover:border-primary hover:text-primary inline-flex items-center rounded-lg border border-gray-200 px-3 py-2 text-sm font-medium text-gray-700 transition">

                                        View

                                    </a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

            {{-- ========================================================= --}}
            {{-- MOBILE CARDS --}}
            {{-- ========================================================= --}}

            <div class="divide-y divide-gray-100 md:hidden">

                @foreach ($leads as $lead)
                    @php
                        $status = config('contacts.lead_statuses.' . $lead->status);

                        $statusLabel = $status['label'] ?? ucfirst(str_replace('_', ' ', $lead->status));

                        $statusClasses = $status['classes'] ?? 'bg-gray-100 text-gray-700';

                        $intentLabel = match ($lead->intent) {
                            'service' => 'I need a service',
                            'information' => 'I need information',
                            default => ucfirst($lead->intent),
                        };
                    @endphp

                    <div class="p-5">

                        <div class="flex items-start justify-between gap-4">

                            <div>

                                <p class="text-sm font-semibold text-gray-900">
                                    {{ $lead->whatsapp }}
                                </p>

                                <p class="mt-1 text-xs text-gray-400">
                                    {{ $lead->created_at->format('d M Y, h:i A') }}
                                </p>

                            </div>

                            <span
                                class="{{ $statusClasses }} inline-flex shrink-0 rounded-full px-3 py-1 text-xs font-semibold">

                                {{ $statusLabel }}

                            </span>

                        </div>

                        {{-- Intent --}}
                        <div class="mt-4">

                            <span class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">

                                {{ $intentLabel }}

                            </span>

                        </div>

                        {{-- Message --}}
                        @if ($lead->message)
                            <p class="mt-3 text-sm leading-6 text-gray-600">
                                {{ $lead->message }}
                            </p>
                        @else
                            <p class="mt-3 text-sm text-gray-400">
                                No message provided.
                            </p>
                        @endif

                        {{-- Action --}}
                        <div class="mt-4">

                            <a href="{{ route('admin.leads.show', $lead) }}"
                                class="hover:border-primary hover:text-primary inline-flex w-full items-center justify-center rounded-xl border border-gray-200 px-4 py-2.5 text-sm font-semibold text-gray-700 transition">

                                View Lead

                            </a>

                        </div>

                    </div>
                @endforeach

            </div>
        @else
            {{-- ========================================================= --}}
            {{-- EMPTY STATE --}}
            {{-- ========================================================= --}}

            <div class="px-6 py-16 text-center">

                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100">

                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M20 13V7a2 2 0 00-2-2h-3.5a2 2 0 01-1.7-.95l-.6-.9A2 2 0 0010.54 2H6a2 2 0 00-2 2v9m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4" />

                    </svg>

                </div>

                <h3 class="mt-4 text-base font-semibold text-gray-900">
                    No leads found
                </h3>

                <p class="mt-1 text-sm text-gray-500">
                    Try changing your filters or wait for new enquiries.
                </p>

            </div>

        @endif

    </div>

    {{-- ========================================================= --}}
    {{-- PAGINATION --}}
    {{-- ========================================================= --}}

    @if ($leads->hasPages())
        <div class="mt-6">

            {{ $leads->links() }}

        </div>
    @endif

@endsection
