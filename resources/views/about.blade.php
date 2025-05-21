@extends('layouts.app')

@section('title', 'About Us - Global Cybersecurity Community')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <!-- Hero Section -->
    <div class="relative bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    About Our Community
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-500">
                    Building a stronger, more secure digital world through collaboration and knowledge sharing.
                </p>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Our Mission</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Empowering Global Cybersecurity
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We're dedicated to fostering a collaborative environment where cybersecurity professionals can share knowledge, 
                    drive innovation, and work together to combat evolving cyber threats.
                </p>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Our Values</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What We Stand For
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Collaboration -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Collaboration</div>
                    <p class="text-gray-600">
                        We believe in the power of working together. By sharing knowledge and resources, we can achieve more than any individual could alone.
                    </p>
                </div>

                <!-- Innovation -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Innovation</div>
                    <p class="text-gray-600">
                        We encourage creative thinking and the development of new solutions to address emerging cybersecurity challenges.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="relative p-6 bg-white rounded-lg border border-gray-200">
                    <div class="text-lg font-medium text-gray-900 mb-2">Integrity</div>
                    <p class="text-gray-600">
                        We maintain the highest standards of professional ethics and promote responsible cybersecurity practices.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Community Stats -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600">10K+</div>
                    <div class="mt-2 text-lg text-gray-600">Community Members</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600">150+</div>
                    <div class="mt-2 text-lg text-gray-600">Countries Represented</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600">50K+</div>
                    <div class="mt-2 text-lg text-gray-600">Discussions</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                Join Our Community
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Be part of a global network of cybersecurity professionals and enthusiasts.
            </p>
            <div class="mt-8">
                @auth
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection 