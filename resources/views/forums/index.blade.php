@extends('layouts.app')

@section('title', 'Forums - Global Cybersecurity Community')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="md:flex md:items-center md:justify-between mb-8">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Community Forums
                </h2>
            </div>
            @auth
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ route('forums.create') }}"
                        class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        New Discussion
                    </a>
                </div>
            @endauth
        </div>

        <!-- Categories -->
        <div class="bg-white shadow overflow-hidden sm:rounded-md mb-8">
            <ul role="list" class="divide-y divide-gray-200">
                <!-- General Discussion -->
                <li>
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-indigo-600 truncate">
                                    General Discussion
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    General topics and discussions about cybersecurity
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    25 topics
                                </span>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Technical Discussion -->
                <li>
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-indigo-600 truncate">
                                    Technical Discussion
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Deep technical discussions about cybersecurity tools, techniques, and methodologies
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    42 topics
                                </span>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- News & Updates -->
                <li>
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-indigo-600 truncate">
                                    News & Updates
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Latest news, updates, and announcements in the cybersecurity world
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    18 topics
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Recent Discussions -->
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Recent Discussions
                </h3>
            </div>
            <ul role="list" class="divide-y divide-gray-200">
                <!-- Sample Discussion 1 -->
                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        Best Practices for Network Security in 2024
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Discussion about implementing effective network security measures in modern environments
                                    </p>
                                </div>
                                <div class="ml-4 flex-shrink-0 flex">
                                    <div class="flex flex-col items-end">
                                        <p class="text-sm text-gray-500">
                                            Posted by John Doe
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            2 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 sm:flex sm:justify-between">
                                <div class="sm:flex">
                                    <p class="flex items-center text-sm text-gray-500">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                        </svg>
                                        12 replies
                                    </p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Last updated 2 hours ago
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <!-- Sample Discussion 2 -->
                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                        Emerging Threats: AI-Powered Cyber Attacks
                                    </p>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Discussion about the rise of AI-powered cyber attacks and how to defend against them
                                    </p>
                                </div>
                                <div class="ml-4 flex-shrink-0 flex">
                                    <div class="flex flex-col items-end">
                                        <p class="text-sm text-gray-500">
                                            Posted by Jane Smith
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            5 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 sm:flex sm:justify-between">
                                <div class="sm:flex">
                                    <p class="flex items-center text-sm text-gray-500">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                        </svg>
                                        8 replies
                                    </p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Last updated 1 hour ago
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection 