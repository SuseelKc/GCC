@extends('layouts.app')

@section('title', 'Home - Global Cybersecurity Community')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Global Cybersecurity Community
                </h1>
                <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto">
                    Join the world's leading cybersecurity community to share knowledge, drive innovation, and combat evolving cyber threats together.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                            Join Community
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700">
                            Sign In
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Forums Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Community Forums</div>
                    <p class="text-gray-600 mb-4">Engage in discussions, share insights, and learn from cybersecurity experts worldwide.</p>
                    <a href="{{ route('forums') }}" class="text-indigo-600 hover:text-indigo-500">Browse Forums →</a>
                </div>

                <!-- Resources Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Learning Resources</div>
                    <p class="text-gray-600 mb-4">Access curated cybersecurity resources, tutorials, and best practices.</p>
                    <a href="{{ route('resources') }}" class="text-indigo-600 hover:text-indigo-500">Explore Resources →</a>
                </div>

                <!-- Community Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Expert Network</div>
                    <p class="text-gray-600 mb-4">Connect with cybersecurity professionals and expand your professional network.</p>
                    <a href="{{ route('about') }}" class="text-indigo-600 hover:text-indigo-500">Learn More →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Discussions -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Latest Discussions</h2>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">
                    <!-- Placeholder for forum posts -->
                    <li class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-indigo-600 truncate">
                                    Getting Started with Cybersecurity
                                </p>
                                <p class="text-sm text-gray-500">
                                    Posted by John Doe • 2 hours ago
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    New
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- Add more forum posts here -->
                </ul>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <a href="{{ route('forums') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        View all discussions →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hero-section {
        margin-top: 76px; /* Adjust based on navbar height */
    }
</style>
@endpush
