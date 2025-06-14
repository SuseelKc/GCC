@extends('layouts.app')

@section('title', 'News Portal - Global Cybersecurity Community')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-indigo-900 text-white py-16">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Cybersecurity News Portal</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Stay informed with the latest cybersecurity news, threat intelligence, and expert insights from around the world.
            </p>
        </div>
    </div>

    <!-- News Grid Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Latest News & Insights</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Discover breaking cybersecurity news, expert analysis, and in-depth articles from our global community.
            </p>
        </div>

        <!-- News Grid - Row 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            
            <!-- News Article 1 -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white dark:bg-gray-800">
                <!-- Featured Image -->
                <div class="relative h-64 bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="news1" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L25 0 M0 5 L20 5 M0 10 L25 10 M0 15 L15 15 M0 20 L25 20" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                    <circle cx="5" cy="12" r="1" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#news1)"/>
                        </svg>
                    </div>
                    <!-- Date -->
                    <div class="absolute bottom-4 right-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            Dec 15, 2024
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                        Major Zero-Day Vulnerability Discovered in Popular Web Framework
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Security researchers have identified a critical zero-day vulnerability affecting millions of websites worldwide. The flaw allows remote code execution and has already been exploited in the wild...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=face" 
                                 alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm text-gray-500 dark:text-gray-400">By John Smith</span>
                        </div>
                        <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">Read More →</a>
                    </div>
                </div>
            </div>

            <!-- News Article 2 -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white dark:bg-gray-800">
                <!-- Featured Image -->
                <div class="relative h-64 bg-gradient-to-br from-green-600 to-teal-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="news2" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="10" cy="10" r="2" fill="white" opacity="0.8"/>
                                    <path d="M10 10 L30 30 M10 10 L-10 -10 M10 10 L30 -10 M10 10 L-10 30" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#news2)"/>
                        </svg>
                    </div>
                    <!-- Date -->
                    <div class="absolute bottom-4 right-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            Dec 14, 2024
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                        New AI-Powered Ransomware Strain Targets Healthcare Sector
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Cybersecurity experts have identified a sophisticated new ransomware variant that uses artificial intelligence to evade detection systems. The malware specifically targets healthcare infrastructure...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=32&h=32&fit=crop&crop=face" 
                                 alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm text-gray-500 dark:text-gray-400">By Sarah Johnson</span>
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-500 font-medium">Read More →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid - Row 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- News Article 3 -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white dark:bg-gray-800">
                <!-- Featured Image -->
                <div class="relative h-64 bg-gradient-to-br from-purple-600 to-pink-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="news3" width="30" height="30" patternUnits="userSpaceOnUse">
                                    <path d="M15 0 L15 30 M0 15 L30 15" stroke="white" stroke-width="1" opacity="0.6"/>
                                    <circle cx="15" cy="15" r="3" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#news3)"/>
                        </svg>
                    </div>
                    <!-- Date -->
                    <div class="absolute bottom-4 right-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            Dec 13, 2024
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                        Quantum Computing Breakthrough: Implications for Cryptography
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        Recent advances in quantum computing have raised concerns about the future of current cryptographic standards. Researchers are developing new quantum-resistant algorithms to secure our digital infrastructure...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=face" 
                                 alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm text-gray-500 dark:text-gray-400">By Dr. Michael Chen</span>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-500 font-medium">Read More →</a>
                    </div>
                </div>
            </div>

            <!-- News Article 4 -->
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 bg-white dark:bg-gray-800">
                <!-- Featured Image -->
                <div class="relative h-64 bg-gradient-to-br from-orange-600 to-red-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="news4" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="25" height="25" fill="none" stroke="white" stroke-width="1"/>
                                    <path d="M5 5 L20 5 M5 10 L20 10 M5 15 L20 15 M5 20 L20 20" stroke="white" stroke-width="1" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#news4)"/>
                        </svg>
                    </div>
                    <!-- Date -->
                    <div class="absolute bottom-4 right-4">
                        <span class="px-3 py-1 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">
                            Dec 12, 2024
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                        New GDPR Guidelines for Cybersecurity Incident Reporting
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                        The European Data Protection Board has released updated guidelines for cybersecurity incident reporting under GDPR. Organizations must now report breaches within 24 hours of discovery...
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=32&h=32&fit=crop&crop=face" 
                                 alt="Author" class="w-8 h-8 rounded-full">
                            <span class="text-sm text-gray-500 dark:text-gray-400">By Emma Wilson</span>
                        </div>
                        <a href="#" class="text-orange-600 hover:text-orange-500 font-medium">Read More →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Subscription -->
        <div class="mt-16">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Stay Updated with Our Newsletter</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Get the latest cybersecurity news, threat intelligence, and expert insights delivered to your inbox weekly.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="Enter your email" 
                               class="flex-1 px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <button class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors duration-200">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .group:hover .group-hover\:bg-black\/10 {
        background-color: rgba(0, 0, 0, 0.1);
    }
    
    .group:hover .group-hover\:text-indigo-600 {
        color: #4f46e5;
    }
    
    .dark .group:hover .group-hover\:text-indigo-400 {
        color: #818cf8;
    }
</style>
@endpush 