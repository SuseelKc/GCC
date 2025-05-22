@extends('layouts.app')

@section('title', 'Home - Global Cybersecurity Community')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <!-- Hero Section -->
        {{-- <div class="relative bg-gray-900 text-white">

                <video autoplay loop muted>
                    <source src="{{ asset('storage/video1.mp4') }}"  type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                        Empowering Global Cybersecurity Collaboration
                    </h1>
                    <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto">
                        The Global Cybersecurity Community Forum (GCCF) is an international platform dedicated to fostering collaboration, knowledge sharing, and innovation in cybersecurity. As cyber threats continue to evolve, the need for a collective approach to securing digital infrastructures has never been more critical. GCCF brings together cybersecurity professionals, researchers, policymakers, and industry leaders to discuss emerging trends, share best practices, and drive the global cybersecurity agenda forward.
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
        </div> --}}

        <div class="relative bg-gray-100 text-white overflow-hidden">

                <!-- Background Video -->
                <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
                    <source src="{{ asset('storage/video1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Overlay to darken video slightly for better text readability -->
                <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

                <!-- Foreground Content -->
                <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            Empowering Global Cybersecurity Collaboration
                        </h1>
                        <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto">
                            The Global Cybersecurity Community Forum (GCCF) is an international platform dedicated to fostering collaboration, knowledge sharing, and innovation in cybersecurity. As cyber threats continue to evolve, the need for a collective approach to securing digital infrastructures has never been more critical. GCCF brings together cybersecurity professionals, researchers, policymakers, and industry leaders to discuss emerging trends, share best practices, and drive the global cybersecurity agenda forward.
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

    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Forums Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Vision</div>
                    <p class="text-gray-600 mb-4">To create a globally connected and resilient cybersecurity community that empowers individuals and organizations with the knowledge, tools, and strategies to combat cyber threats effectively.</p>
                    <a href="{{ route('forums') }}" class="text-indigo-600 hover:text-indigo-500">Browse Forums →</a>
                </div>

                <!-- Resources Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Knowledge Sharing</div>
                    <p class="text-gray-600 mb-4">Access insights and resources to enhance your understanding of contemporary cybersecurity challenges and solutions.</p>
                    <a href="{{ route('resources') }}" class="text-indigo-600 hover:text-indigo-500">Explore Resources →</a>
                </div>

                <!-- Community Feature -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Expert Discussions</div>
                    <p class="text-gray-600 mb-4">Engage with professionals on trends, technology advancements, and policy frameworks shaping the cybersecurity landscape.</p>
                    <a href="{{ route('about') }}" class="text-indigo-600 hover:text-indigo-500">Learn More →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Discussions -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Cybersecurity Projects</h2>
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
