<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => { localStorage.setItem('darkMode', val); document.documentElement.classList.toggle('dark', val) })" :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GCC Forums') }} - @yield('title', 'Global Cybersecurity Community')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            // Check for saved theme preference, otherwise use system preference
            if (localStorage.getItem('darkMode') === null) {
                localStorage.setItem('darkMode', window.matchMedia('(prefers-color-scheme: dark)').matches);
            }
            // Apply the theme on page load
            if (localStorage.getItem('darkMode') === 'true') {
                document.documentElement.classList.add('dark');
            }
        </script>

        <style>
            .nav-link {
                @apply inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 transition-colors duration-200;
            }
            .nav-link.active {
                @apply border-indigo-500 text-indigo-600 dark:text-indigo-300 dark:border-indigo-400;
            }
            .nav-link:not(.active) {
                @apply border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 
                       dark:text-gray-300 dark:hover:text-white dark:hover:border-gray-500;
            }

            /* Dark mode text styles */
            .dark .text-gray-900 {
                @apply text-white;
            }
            .dark .text-gray-800 {
                @apply text-gray-100;
            }
            .dark .text-gray-700 {
                @apply text-gray-200;
            }
            .dark .text-gray-600 {
                @apply text-gray-300;
            }
            .dark .text-gray-500 {
                @apply text-gray-400;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-200">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 shadow-sm transition-colors duration-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-25">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">

                                <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600 dark:text-indigo-300 hover:text-indigo-700 dark:hover:text-indigo-200 transition-colors duration-200">
                                    <img src="{{ asset('storage/logo.png') }}"  style="height: 85px; width: 230px;">
                                </a>


                                {{-- <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600 dark:text-indigo-300 hover:text-indigo-700 dark:hover:text-indigo-200 transition-colors duration-200">
                                    GCC Forums
                                </a> --}}
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-10 sm:-my-px sm:ml-10 sm:flex pt-10">
                                <a href="{{ route('home') }}" 
                                   class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                    Home
                                </a>
                                <a href="{{ route('forums') }}" 
                                   class="nav-link {{ request()->routeIs('forums*') ? 'active' : '' }}">
                                    Forums
                                </a>
                                <a href="{{ route('resources') }}" 
                                   class="nav-link {{ request()->routeIs('resources*') ? 'active' : '' }}">
                                    Resources
                                </a>
                                <a href="{{ route('news') }}" 
                                   class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">
                                    News
                                </a>
                                <a href="{{ route('events') }}" 
                                   class="nav-link {{ request()->routeIs('events') ? 'active' : '' }}">
                                    Events
                                </a>
                                <a href="{{ route('contact') }}" 
                                   class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                    Contact
                                </a>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                            <!-- Theme Toggle -->
                          <button 
                    @click="darkMode = !darkMode" 
                    x-html="darkMode 
                        ? `<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-moon-fill' viewBox='0 0 16 16'>
                                <path d='M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278'/>
                        </svg>` 
                        : `<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-brightness-high' viewBox='0 0 16 16'>
                                <path d='M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708'/>
                        </svg>`"
                    class="p-2 rounded-lg text-gray-500 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition-colors duration-200"
                    aria-label="Toggle dark mode">
                </button>



                            @auth
                                <div class="ml-3 relative">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-300 bg-white dark:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-300 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>
                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content" class="bg-white dark:bg-gray-800">
                                            <x-dropdown-link :href="route('dashboard')" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                                {{ __('Dashboard') }}
                                            </x-dropdown-link>
                                            <x-dropdown-link :href="route('profile.edit')" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                        class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="flex-grow py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    @if (session('success'))
                        <div class="mb-4 bg-green-100 dark:bg-green-900/50 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mb-4 bg-red-100 dark:bg-red-900/50 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-300 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700 shadow-sm mt-auto transition-colors duration-200">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Brand Section -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">GCC Forums</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                Building a stronger, more secure digital world through collaboration and knowledge sharing.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Links</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="{{ route('home') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('forums') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Forums</a>
                                </li>
                                <li>
                                    <a href="{{ route('resources') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Resources</a>
                                </li>
                                <li>
                                    <a href="{{ route('news') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">News</a>
                                </li>
                                <li>
                                    <a href="{{ route('events') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Events</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Legal Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Legal</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300">Cookie Policy</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter Subscription -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Stay Updated</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                Subscribe to our newsletter for the latest updates, security insights, and community news.
                            </p>
                            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-4 space-y-3">
                                @csrf
                                <div class="relative">
                                    <input type="email" 
                                           name="email" 
                                           placeholder="Enter your email" 
                                           required
                                           class="w-full px-4 py-2 text-sm text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 focus:border-indigo-500 dark:focus:border-indigo-400 transition-colors duration-200"
                                           :class="{ 'dark:bg-gray-700': darkMode }">
                                </div>
                                <button type="submit" 
                                        class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Subscribe
                                </button>
                                @error('email')
                                    <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                                @if (session('newsletter-success'))
                                    <p class="text-sm text-green-600 dark:text-green-400">{{ session('newsletter-success') }}</p>
                                @endif
                            </form>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="mt-8 pt-8 border-t border-gray-100 dark:border-gray-700">
                        <p class="text-sm text-gray-500 dark:text-gray-400 text-center">
                            &copy; {{ date('Y') }} GCC Forums. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

{{--  --}}