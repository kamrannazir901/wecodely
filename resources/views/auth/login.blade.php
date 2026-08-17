@extends('layouts.app')

@section('title', 'Admin Login | Wecodely')

@section('content')

    <section class="flex min-h-[calc(100vh-80px)] items-center justify-center bg-gray-50 px-6 py-12">

        <div class="w-full max-w-md">

            {{-- Login Card --}}
            <div class="rounded-3xl border border-gray-200 bg-white p-7 shadow-sm sm:p-8">

                {{-- Header --}}
                <div class="text-center">

                    <a href="{{ route('home') }}" class="inline-flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Wecodely" class="h-10 w-auto">
                    </a>

                    <h1 class="mt-7 text-2xl font-bold tracking-tight text-gray-900">
                        Admin Login
                    </h1>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Sign in to access your dashboard.
                    </p>

                </div>

                {{-- General Error --}}
                @if (session('error'))
                    <div class="mt-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Success --}}
                @if (session('success'))
                    <div class="mt-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Login Form --}}
                <form action="{{ route('login.store') }}" method="POST" class="mt-7 space-y-5">

                    @csrf

                    {{-- Email --}}
                    <div>

                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email address
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            autocomplete="email" placeholder="admin@example.com"
                            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3.5 text-sm text-gray-900 outline-none transition">

                        @error('email')
                            <p class="mt-1.5 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Password --}}
                    <div>

                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                            Password
                        </label>

                        <input type="password" id="password" name="password" required autocomplete="current-password"
                            placeholder="Enter your password"
                            class="focus:border-primary focus:ring-primary w-full rounded-xl border border-gray-300 bg-white px-4 py-3.5 text-sm text-gray-900 outline-none transition">

                        @error('password')
                            <p class="mt-1.5 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center">

                        <label class="flex cursor-pointer items-center gap-2">

                            <input type="checkbox" name="remember" value="1" @checked(old('remember'))
                                class="text-primary focus:ring-primary h-4 w-4 rounded border-gray-300">

                            <span class="text-sm text-gray-600">
                                Remember me
                            </span>

                        </label>

                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="bg-primary hover:bg-primary-700 w-full rounded-xl px-6 py-3.5 text-sm font-semibold text-white transition">
                        Sign In
                    </button>

                </form>

            </div>

            {{-- Back to Website --}}
            <div class="mt-5 text-center">

                <a href="{{ route('home') }}" class="text-sm text-gray-500 transition hover:text-gray-900">
                    ← Back to website
                </a>

            </div>

        </div>

    </section>

@endsection
