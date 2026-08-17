@extends('layouts.admin')

@section('title', 'Dashboard | Wecodely')

@section('page_header')

    <div>

        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Dashboard
        </h1>

        <p class="mt-1 text-sm text-gray-500">
            Overview of your leads and recent activity.
        </p>

    </div>

@endsection

@section('content')

    {{-- ========================================================= --}}
    {{-- OVERVIEW --}}
    {{-- ========================================================= --}}

    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        {{-- Total Leads --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6">

            <p class="text-sm font-medium text-gray-500">
                Total Leads
            </p>

            <p class="mt-2 text-3xl font-bold text-gray-900">
                {{ $totalLeads }}
            </p>

        </div>

        {{-- Today's Leads --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6">

            <p class="text-sm font-medium text-gray-500">
                Today's Leads
            </p>

            <p class="mt-2 text-3xl font-bold text-gray-900">
                {{ $todayLeads }}
            </p>

        </div>

        {{-- Follow Ups Today --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6">

            <p class="text-sm font-medium text-gray-500">
                Follow Ups Today
            </p>

            <p class="mt-2 text-3xl font-bold text-gray-900">
                {{ $followUpsToday }}
            </p>

        </div>

        {{-- Overdue Follow Ups --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6">

            <p class="text-sm font-medium text-gray-500">
                Overdue Follow Ups
            </p>

            <p class="mt-2 text-3xl font-bold text-red-600">
                {{ $overdueFollowUps }}
            </p>

        </div>

    </div>

    {{-- ========================================================= --}}
    {{-- LEAD STAGES --}}
    {{-- ========================================================= --}}

    <div class="mt-8">

        <div class="mb-4">

            <h2 class="text-base font-semibold text-gray-900">
                Lead Stages
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Current distribution of your leads.
            </p>

        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($statuses as $key => $status)
                <a href="{{ route('admin.leads', ['status' => $key]) }}"
                    class="group rounded-2xl border border-gray-200 bg-white p-6 transition hover:border-gray-300 hover:shadow-sm">

                    <div class="flex items-center justify-between gap-4">

                        <span class="{{ $status['classes'] }} inline-flex rounded-full px-3 py-1 text-xs font-semibold">

                            {{ $status['label'] }}

                        </span>

                        <svg class="h-4 w-4 text-gray-300 transition group-hover:text-gray-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5l7 7-7 7" />

                        </svg>

                    </div>

                    <p class="mt-4 text-3xl font-bold text-gray-900">
                        {{ $statusCounts[$key] ?? 0 }}
                    </p>

                    <p class="mt-1 text-xs text-gray-500">
                        leads
                    </p>

                </a>
            @endforeach

        </div>

    </div>

    {{-- ========================================================= --}}
    {{-- FOLLOW UPS REQUIRING ATTENTION --}}
    {{-- ========================================================= --}}

    <div class="mt-8 rounded-2xl border border-gray-200 bg-white">

        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-5">

            <div>

                <h2 class="text-base font-semibold text-gray-900">
                    Follow Ups Requiring Attention
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Leads that need follow up today or are overdue.
                </p>

            </div>

            <a href="{{ route('admin.leads', ['follow_up' => 'overdue']) }}"
                class="text-primary hover:text-primary-700 text-sm font-semibold transition">

                View Overdue

            </a>

        </div>

        @if ($followUpLeads->count())

            <div class="overflow-x-auto">

                <table class="w-full text-left">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Lead
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Service
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Status
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Follow Up
                            </th>

                            <th class="px-6 py-3"></th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @foreach ($followUpLeads as $lead)
                            @php

                                $status = $statuses[$lead->status] ?? [
                                    'label' => ucfirst(str_replace('_', ' ', $lead->status)),
                                    'classes' => 'bg-gray-100 text-gray-600',
                                ];

                            @endphp

                            <tr class="transition hover:bg-gray-50">

                                {{-- Lead --}}
                                <td class="px-6 py-4">

                                    <div>

                                        <p class="text-sm font-semibold text-gray-900">

                                            {{ $lead->name ?: $lead->whatsapp }}

                                        </p>

                                        @if ($lead->name)
                                            <p class="mt-0.5 text-xs text-gray-500">
                                                {{ $lead->whatsapp }}
                                            </p>
                                        @endif

                                    </div>

                                </td>

                                {{-- Service --}}
                                <td class="px-6 py-4">

                                    @if ($lead->service)
                                        <span class="text-sm text-gray-700">
                                            {{ $lead->service }}
                                        </span>
                                    @else
                                        <span class="text-sm text-gray-400">
                                            Not specified
                                        </span>
                                    @endif

                                </td>

                                {{-- Status --}}
                                <td class="px-6 py-4">

                                    <span
                                        class="{{ $status['classes'] }} inline-flex rounded-full px-3 py-1 text-xs font-semibold">

                                        {{ $status['label'] }}

                                    </span>

                                </td>

                                {{-- Follow Up --}}
                                <td class="whitespace-nowrap px-6 py-4">

                                    @if ($lead->next_follow_up_at->isPast())
                                        <span class="text-sm font-semibold text-red-600">

                                            {{ $lead->next_follow_up_at->format('d M Y, h:i A') }}

                                        </span>
                                    @else
                                        <span class="text-sm font-medium text-gray-700">

                                            {{ $lead->next_follow_up_at->format('d M Y, h:i A') }}

                                        </span>
                                    @endif

                                </td>

                                {{-- View --}}
                                <td class="px-6 py-4 text-right">

                                    <a href="{{ route('admin.leads.show', $lead) }}"
                                        class="text-primary hover:text-primary-700 text-sm font-semibold">

                                        View

                                    </a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        @else
            <div class="px-6 py-12 text-center">

                <p class="text-sm text-gray-500">
                    No follow ups require attention.
                </p>

            </div>

        @endif

    </div>

    {{-- ========================================================= --}}
    {{-- RECENT LEADS --}}
    {{-- ========================================================= --}}

    <div class="mt-8 rounded-2xl border border-gray-200 bg-white">

        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-5">

            <div>

                <h2 class="text-base font-semibold text-gray-900">
                    Recent Leads
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Your latest enquiries.
                </p>

            </div>

            <a href="{{ route('admin.leads') }}"
                class="text-primary hover:text-primary-700 text-sm font-semibold transition">

                View All

            </a>

        </div>

        @if ($recentLeads->count())

            <div class="overflow-x-auto">

                <table class="w-full text-left">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Lead
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Intent
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Status
                            </th>

                            <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">
                                Date
                            </th>

                            <th class="px-6 py-3"></th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @foreach ($recentLeads as $lead)
                            @php

                                $status = $statuses[$lead->status] ?? [
                                    'label' => ucfirst(str_replace('_', ' ', $lead->status)),
                                    'classes' => 'bg-gray-100 text-gray-600',
                                ];

                                $intentLabel = match ($lead->intent) {
                                    'service' => 'Needs a service',
                                    'information' => 'Needs information',
                                    default => ucfirst($lead->intent),
                                };

                            @endphp

                            <tr class="transition hover:bg-gray-50">

                                {{-- Lead --}}
                                <td class="px-6 py-4">

                                    <div>

                                        <p class="text-sm font-semibold text-gray-900">

                                            {{ $lead->name ?: $lead->whatsapp }}

                                        </p>

                                        @if ($lead->name)
                                            <p class="mt-0.5 text-xs text-gray-500">
                                                {{ $lead->whatsapp }}
                                            </p>
                                        @endif

                                    </div>

                                </td>

                                {{-- Intent --}}
                                <td class="px-6 py-4">

                                    <span
                                        class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">

                                        {{ $intentLabel }}

                                    </span>

                                </td>

                                {{-- Status --}}
                                <td class="px-6 py-4">

                                    <span
                                        class="{{ $status['classes'] }} inline-flex rounded-full px-3 py-1 text-xs font-semibold">

                                        {{ $status['label'] }}

                                    </span>

                                </td>

                                {{-- Date --}}
                                <td class="whitespace-nowrap px-6 py-4">

                                    <span class="text-sm text-gray-600">

                                        {{ $lead->created_at->format('d M Y') }}

                                    </span>

                                </td>

                                {{-- View --}}
                                <td class="px-6 py-4 text-right">

                                    <a href="{{ route('admin.leads.show', $lead) }}"
                                        class="text-primary hover:text-primary-700 text-sm font-semibold">

                                        View

                                    </a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        @else
            <div class="px-6 py-12 text-center">

                <p class="text-sm text-gray-500">
                    No leads yet.
                </p>

            </div>

        @endif

    </div>

    {{-- ========================================================= --}}
    {{-- QUICK SUMMARY --}}
    {{-- ========================================================= --}}

    <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Upcoming --}}
        <a href="{{ route('admin.leads', ['follow_up' => 'upcoming']) }}"
            class="rounded-2xl border border-gray-200 bg-white p-6 transition hover:border-gray-300 hover:shadow-sm">

            <p class="text-sm font-medium text-gray-500">
                Upcoming Follow Ups
            </p>

            <p class="mt-2 text-3xl font-bold text-gray-900">
                {{ $upcomingFollowUps }}
            </p>

            <p class="mt-2 text-xs text-gray-500">
                Scheduled for the future
            </p>

        </a>

        {{-- Today's Follow Ups --}}
        <a href="{{ route('admin.leads', ['follow_up' => 'today']) }}"
            class="rounded-2xl border border-gray-200 bg-white p-6 transition hover:border-gray-300 hover:shadow-sm">

            <p class="text-sm font-medium text-gray-500">
                Follow Ups Today
            </p>

            <p class="mt-2 text-3xl font-bold text-gray-900">
                {{ $followUpsToday }}
            </p>

            <p class="mt-2 text-xs text-gray-500">
                Need attention today
            </p>

        </a>

        {{-- View All --}}
        <a href="{{ route('admin.leads') }}"
            class="rounded-2xl border border-gray-200 bg-white p-6 transition hover:border-gray-300 hover:shadow-sm">

            <p class="text-sm font-medium text-gray-500">
                Manage Leads
            </p>

            <p class="mt-2 text-base font-semibold text-gray-900">
                Open lead management
            </p>

            <p class="mt-2 text-xs text-gray-500">
                Search, filter and manage all leads
            </p>

        </a>

    </div>

@endsection
