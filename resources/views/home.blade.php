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
                    <source src="{{ asset('storage/video21.mp4') }}" type="video/mp4">
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
    <div class="py-12 bg-gray-50 dark:bg-gray-800">
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
    <div class="py-12 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Cybersecurity Projects</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Explore cutting-edge cybersecurity initiatives and collaborative projects that are shaping the future of digital security.
                </p>
            </div>
            
            <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- Project Card 1: Threat Intelligence Platform -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/90 to-purple-700/90 z-0">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <!-- Abstract cybersecurity pattern overlay -->
                        <div class="absolute inset-0 opacity-20">
                            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                                    </pattern>
                                </defs>
                                <rect width="100" height="100" fill="url(#grid)"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="relative z-10 p-8 h-80 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white">Threat Intelligence Platform</h3>
                            </div>
                            <p class="text-gray-200 text-lg leading-relaxed">
                                Advanced threat detection and analysis system that leverages machine learning to identify and respond to emerging cyber threats in real-time.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">AI/ML</span>
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Real-time</span>
                            </div>
                            <a href="#" class="inline-flex items-center text-white hover:text-blue-200 transition-colors">
                                Learn More
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2: Zero Trust Architecture -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-gradient-to-br from-green-600/90 to-teal-700/90 z-0">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <!-- Abstract cybersecurity pattern overlay -->
                        <div class="absolute inset-0 opacity-20">
                            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="circles" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <circle cx="10" cy="10" r="2" fill="white"/>
                                    </pattern>
                                </defs>
                                <rect width="100" height="100" fill="url(#circles)"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="relative z-10 p-8 h-80 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white">Zero Trust Architecture</h3>
                            </div>
                            <p class="text-gray-200 text-lg leading-relaxed">
                                Comprehensive security framework implementing "never trust, always verify" principles across all network resources and user access points.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Security</span>
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Framework</span>
                            </div>
                            <a href="#" class="inline-flex items-center text-white hover:text-green-200 transition-colors">
                                Learn More
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3: Incident Response System -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-600/90 to-orange-700/90 z-0">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <!-- Abstract cybersecurity pattern overlay -->
                        <div class="absolute inset-0 opacity-20">
                            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="hexagons" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <polygon points="10,1 19,6 19,14 10,19 1,14 1,6" fill="none" stroke="white" stroke-width="0.5"/>
                                    </pattern>
                                </defs>
                                <rect width="100" height="100" fill="url(#hexagons)"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="relative z-10 p-8 h-80 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white">Incident Response System</h3>
                            </div>
                            <p class="text-gray-200 text-lg leading-relaxed">
                                Automated incident detection and response platform that orchestrates security workflows and enables rapid threat containment and recovery.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Automation</span>
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Response</span>
                            </div>
                            <a href="#" class="inline-flex items-center text-white hover:text-red-200 transition-colors">
                                Learn More
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 4: Blockchain Security -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/90 to-indigo-700/90 z-0">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <!-- Abstract cybersecurity pattern overlay -->
                        <div class="absolute inset-0 opacity-20">
                            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="blocks" width="15" height="15" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="15" height="15" fill="none" stroke="white" stroke-width="0.5"/>
                                    </pattern>
                                </defs>
                                <rect width="100" height="100" fill="url(#blocks)"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="relative z-10 p-8 h-80 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white">Blockchain Security</h3>
                            </div>
                            <p class="text-gray-200 text-lg leading-relaxed">
                                Decentralized security solutions leveraging blockchain technology for immutable audit trails, secure identity management, and tamper-proof data integrity.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Blockchain</span>
                                <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full">Decentralized</span>
                            </div>
                            <a href="#" class="inline-flex items-center text-white hover:text-purple-200 transition-colors">
                                Learn More
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <a href="{{ route('forums') }}" class="inline-flex items-center px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                    Explore All Projects
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
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
