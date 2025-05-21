<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <style>
            .nav-link {
                @apply inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 transition-colors duration-200;
            }
            .nav-link.active {
                @apply border-indigo-500 text-indigo-600;
            }
            .nav-link:not(.active) {
                @apply border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-white border-b border-gray-100 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600 hover:text-indigo-700 transition-colors duration-200">
                                    GCC Forums
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex pt-5">
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
                                <a href="{{ route('about') }}" 
                                   class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                    About
                                </a>
                                <a href="{{ route('contact') }}" 
                                   class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">
                                    Contact
                                </a>
                            </div>
                        </div>

                        <!-- Right Side - Only show for authenticated users -->
                        @auth
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <div class="ml-3 relative">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-indigo-600 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>
                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('dashboard')" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                                                {{ __('Dashboard') }}
                                            </x-dropdown-link>
                                            <x-dropdown-link :href="route('profile.edit')" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                        class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="flex-grow py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-100 shadow-sm mt-auto">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Brand Section -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900">GCC Forums</h3>
                            <p class="text-sm text-gray-600">
                                Building a stronger, more secure digital world through collaboration and knowledge sharing.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900">Quick Links</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-indigo-600">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('forums') }}" class="text-sm text-gray-600 hover:text-indigo-600">Forums</a>
                                </li>
                                <li>
                                    <a href="{{ route('resources') }}" class="text-sm text-gray-600 hover:text-indigo-600">Resources</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-indigo-600">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-sm text-gray-600 hover:text-indigo-600">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Legal Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900">Legal</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="text-sm text-gray-600 hover:text-indigo-600">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-gray-600 hover:text-indigo-600">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm text-gray-600 hover:text-indigo-600">Cookie Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="mt-8 pt-8 border-t border-gray-100">
                        <p class="text-sm text-gray-500 text-center">
                            &copy; {{ date('Y') }} GCC Forums. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

{{--  --}}