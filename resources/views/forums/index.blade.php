@extends('layouts.app')

@section('title', 'Forums - Global Cybersecurity Community')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-indigo-900 text-white py-16">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Community Forums</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Join discussions, share knowledge, and connect with cybersecurity professionals from around the world.
            </p>
            @auth
                <div class="mt-8">
                    <a href="{{ route('forums.create') }}"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-900 bg-white hover:bg-gray-50 transition-colors duration-200 shadow-lg">
                        Start New Discussion
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </a>
                </div>
            @endauth
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Explore Our Forums</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Dive into specialized discussions across various cybersecurity domains and connect with experts in the field.
            </p>
        </div>

        <!-- Forum Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- General Discussion -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="network" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="10" cy="10" r="1" fill="white"/>
                                    <path d="M10 10 L30 10 M10 10 L10 30 M10 10 L-10 10 M10 10 L10 -10" stroke="white" stroke-width="0.5" opacity="0.5"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#network)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            25 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                        General Discussion
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Open discussions about cybersecurity trends, best practices, and general topics in the field.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 2 hours ago</span>
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Technical Discussion -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-green-600 to-teal-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="code" width="15" height="15" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L15 0 M0 5 L10 5 M0 10 L15 10" stroke="white" stroke-width="1" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#code)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            42 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                        Technical Discussion
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Deep technical discussions about tools, techniques, methodologies, and advanced cybersecurity concepts.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 1 hour ago</span>
                        <a href="#" class="text-green-600 hover:text-green-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- News & Updates -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-red-600 to-orange-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="news" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="25" height="5" fill="white" opacity="0.8"/>
                                    <rect x="0" y="10" width="20" height="3" fill="white" opacity="0.6"/>
                                    <rect x="0" y="17" width="15" height="3" fill="white" opacity="0.4"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#news)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            18 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                        News & Updates
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Latest cybersecurity news, threat intelligence, vulnerability disclosures, and industry updates.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 30 min ago</span>
                        <a href="#" class="text-red-600 hover:text-red-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Threat Intelligence -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-purple-600 to-pink-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="threat" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="10" cy="10" r="2" fill="white"/>
                                    <path d="M10 10 L30 30 M10 10 L-10 -10 M10 10 L30 -10 M10 10 L-10 30" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#threat)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            31 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                        Threat Intelligence
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Share and discuss emerging threats, attack patterns, and intelligence gathering techniques.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 45 min ago</span>
                        <a href="#" class="text-purple-600 hover:text-purple-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Incident Response -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-yellow-600 to-orange-600 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="incident" width="30" height="30" patternUnits="userSpaceOnUse">
                                    <path d="M15 0 L15 30 M0 15 L30 15" stroke="white" stroke-width="1" opacity="0.6"/>
                                    <circle cx="15" cy="15" r="3" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#incident)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            27 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                        Incident Response
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Discuss incident response strategies, case studies, and best practices for handling security breaches.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 1 day ago</span>
                        <a href="#" class="text-yellow-600 hover:text-yellow-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Compliance & Governance -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-gray-600 to-blue-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="compliance" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="25" height="25" fill="none" stroke="white" stroke-width="1"/>
                                    <path d="M5 5 L20 5 M5 10 L20 10 M5 15 L20 15 M5 20 L20 20" stroke="white" stroke-width="1" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#compliance)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            19 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                        Compliance & Governance
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Discussions about regulatory compliance, security frameworks, and governance best practices.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 2 days ago</span>
                        <a href="#" class="text-blue-600 hover:text-blue-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Penetration Testing -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-emerald-600 to-cyan-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="pentest" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L20 20 M20 0 L0 20" stroke="white" stroke-width="0.5" opacity="0.6"/>
                                    <circle cx="10" cy="10" r="1" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#pentest)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            38 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                        Penetration Testing
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Share methodologies, tools, and techniques for ethical hacking and security assessment.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 3 hours ago</span>
                        <a href="#" class="text-emerald-600 hover:text-emerald-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Cloud Security -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-sky-600 to-blue-800 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="cloud" width="30" height="30" patternUnits="userSpaceOnUse">
                                    <path d="M15 10 Q25 5 35 10 Q40 15 35 20 Q25 25 15 20 Q10 15 15 10" fill="white" opacity="0.6"/>
                                    <path d="M45 15 Q55 10 65 15 Q70 20 65 25 Q55 30 45 25 Q40 20 45 15" fill="white" opacity="0.4"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#cloud)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            29 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">
                        Cloud Security
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Discuss cloud security challenges, best practices, and solutions for AWS, Azure, and GCP.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 4 hours ago</span>
                        <a href="#" class="text-sky-600 hover:text-sky-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- IoT Security -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-violet-600 to-purple-800 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="iot" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <circle cx="5" cy="5" r="2" fill="white" opacity="0.8"/>
                                    <circle cx="20" cy="5" r="2" fill="white" opacity="0.6"/>
                                    <circle cx="5" cy="20" r="2" fill="white" opacity="0.6"/>
                                    <circle cx="20" cy="20" r="2" fill="white" opacity="0.8"/>
                                    <path d="M5 5 L20 5 M5 5 L5 20 M20 5 L20 20 M5 20 L20 20" stroke="white" stroke-width="0.5" opacity="0.4"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#iot)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            22 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-violet-600 dark:group-hover:text-violet-400 transition-colors">
                        IoT Security
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Explore security challenges and solutions for Internet of Things devices and networks.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 6 hours ago</span>
                        <a href="#" class="text-violet-600 hover:text-violet-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Cryptography -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-rose-600 to-pink-800 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="crypto" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L20 20 M20 0 L0 20" stroke="white" stroke-width="0.3" opacity="0.5"/>
                                    <text x="10" y="12" text-anchor="middle" fill="white" font-size="8" opacity="0.7">🔐</text>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#crypto)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            16 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors">
                        Cryptography
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Discuss cryptographic algorithms, protocols, and their applications in cybersecurity.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 1 day ago</span>
                        <a href="#" class="text-rose-600 hover:text-rose-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Career & Training -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-amber-600 to-orange-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="career" width="30" height="30" patternUnits="userSpaceOnUse">
                                    <path d="M15 5 L25 15 L15 25 L5 15 Z" fill="white" opacity="0.6"/>
                                    <circle cx="15" cy="15" r="3" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#career)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            34 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                        Career & Training
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Career advice, certification discussions, training resources, and professional development.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 5 hours ago</span>
                        <a href="#" class="text-amber-600 hover:text-amber-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>

            <!-- Research & Academia -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <!-- Background Image -->
                <div class="relative h-64 bg-gradient-to-br from-slate-600 to-gray-800 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="research" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L25 0 M0 5 L20 5 M0 10 L25 10 M0 15 L15 15 M0 20 L25 20" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                    <circle cx="5" cy="12" r="1" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#research)"/>
                        </svg>
                    </div>
                    <!-- Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <!-- Topic Count -->
                    <div class="absolute bottom-4 left-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            13 Topics
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-slate-600 dark:group-hover:text-slate-400 transition-colors">
                        Research & Academia
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Academic research, papers, theoretical discussions, and cutting-edge cybersecurity studies.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Last active 3 days ago</span>
                        <a href="#" class="text-slate-600 hover:text-slate-500 font-medium">Browse →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Ready to Join the Discussion?</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6">
                    Connect with cybersecurity professionals, share your expertise, and stay updated with the latest trends in the industry.
                </p>
                @auth
                    <a href="{{ route('forums.create') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors duration-200 shadow-lg">
                        Start New Discussion
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </a>
                @else
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors duration-200 shadow-lg">
                            Join Community
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 font-semibold rounded-lg transition-colors duration-200">
                            Sign In
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .group:hover .group-hover\:bg-black\/20 {
        background-color: rgba(0, 0, 0, 0.2);
    }
    
    .group:hover .group-hover\:text-indigo-600 {
        color: #4f46e5;
    }
    
    .dark .group:hover .group-hover\:text-indigo-400 {
        color: #818cf8;
    }
</style>
@endpush 