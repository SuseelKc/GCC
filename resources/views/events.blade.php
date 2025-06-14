@extends('layouts.app')

@section('title', 'Events - Global Cybersecurity Community')

@section('content')
<div class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-indigo-900 via-purple-900 to-indigo-900 text-white py-16">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Events</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Join our upcoming cybersecurity events and explore highlights from past conferences, workshops, and training programs.
            </p>
        </div>
    </div>

    <!-- Events Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Upcoming Events Section -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Upcoming Events</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Mark your calendar for our upcoming cybersecurity conferences and training programs.
                </p>
            </div>

            <!-- Upcoming Event Card -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <!-- Event Header -->
                <div class="relative h-64 bg-gradient-to-br from-blue-600 to-indigo-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="event-pattern" width="25" height="25" patternUnits="userSpaceOnUse">
                                    <path d="M0 0 L25 0 M0 5 L20 5 M0 10 L25 10 M0 15 L15 15 M0 20 L25 20" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                    <circle cx="5" cy="12" r="1" fill="white" opacity="0.8"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#event-pattern)"/>
                        </svg>
                    </div>
                    <!-- Event Date Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm font-medium">
                            June 22-24, 2025
                        </span>
                    </div>
                    <!-- Event Title -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-2xl font-bold text-white mb-2">
                            International Workshop on Building Leadership for Digital Transformation
                        </h3>
                        <p class="text-gray-200">Strengthening Cyber Resilience, Privacy and Trust</p>
                    </div>
                </div>

                <!-- Event Details -->
                <div class="p-8">
                    <!-- Location -->
                    <div class="flex items-center mb-6">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">AIT Conference Center</p>
                            <p class="text-gray-600 dark:text-gray-300">Asian Institute of Technology</p>
                            <p class="text-gray-600 dark:text-gray-300">Klong Luang, Pathum Thani 12120, Thailand</p>
                            <p class="text-gray-600 dark:text-gray-300">Bangkok, Thailand</p>
                        </div>
                    </div>

                    <!-- Event Description -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Event Overview</h4>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                            The Global Cybersecurity Community Forum is set to host a landmark event titled "Building Leadership for Digital Transformation: Strengthening Cyber Resilience, Privacy, and Trust" from June 22 to 24, 2025, at the AIT Conference Center, Asian Institute of Technology, in Pathum Thani, Bangkok, Thailand. This high-impact forum will bring together global cybersecurity leaders, policy-makers, researchers, and technology professionals to foster strategic dialogue and collaborative innovation.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Participants will explore leadership roles in navigating the evolving digital landscape, while addressing critical challenges in cybersecurity resilience, data privacy, and digital trust. The event promises insightful keynote speeches, expert panels, and hands-on workshops aimed at empowering organizations and governments to build robust, secure, and inclusive digital futures.
                        </p>
                    </div>

                    <!-- Objectives -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Objectives</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Equip organizations with tools to build a robust cyber resilience framework for proactive threat management.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Promote a security-first mindset by integrating cybersecurity awareness into digital initiatives.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Address global cybersecurity challenges through discussions on trends, regulations, and risk mitigation.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Facilitate knowledge sharing and collaboration among experts to strengthen digital resilience.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Strengthen incident response and crisis management capabilities to ensure business continuity.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Raise awareness on data privacy principles and foster a culture of trust and responsible data handling.
                            </li>
                        </ul>
                    </div>

                    <!-- Organizing Committee -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">International Organizing Committee and Resource Persons</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Ramhari Subedi (PhD, USA)</h5>
                                <p class="text-gray-600 dark:text-gray-300">Professor, Cybersecurity</p>
                                <p class="text-gray-600 dark:text-gray-300">ECPI University</p>
                                <p class="text-gray-600 dark:text-gray-300">Virginia, USA</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Chadaporn Keatmanee, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Assistant Professor</p>
                                <p class="text-gray-600 dark:text-gray-300">Ramkhamhaeng University</p>
                                <p class="text-gray-600 dark:text-gray-300">Bangkok, Thailand</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Charles Lim, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Cyber Security Researcher and Lecturer</p>
                                <p class="text-gray-600 dark:text-gray-300">Swiss German University</p>
                                <p class="text-gray-600 dark:text-gray-300">Indonesia</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. John Benedict L. Bernardo, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Consultant, IT and Cybersecurity</p>
                                <p class="text-gray-600 dark:text-gray-300">Manila, Philippines</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Suvil Chomchaiya, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Lecturer, Department of Mathematics</p>
                                <p class="text-gray-600 dark:text-gray-300">King Mongkut's University of Technology Thonburi</p>
                                <p class="text-gray-600 dark:text-gray-300">Bangkok, Thailand</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Mr. Ramamurthi Nagarajan, PMP</h5>
                                <p class="text-gray-600 dark:text-gray-300">Principal Consultant - Digital Transformation</p>
                                <p class="text-gray-600 dark:text-gray-300">The New Gen Infotech</p>
                                <p class="text-gray-600 dark:text-gray-300">Singapore</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Mr. Dedy Hendro</h5>
                                <p class="text-gray-600 dark:text-gray-300">PhD Student in Cybersecurity and AI</p>
                                <p class="text-gray-600 dark:text-gray-300">Victoria University of Wellington</p>
                                <p class="text-gray-600 dark:text-gray-300">Wellington, New Zealand</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Mr. Kumar Pudashine (MEng, AIT)</h5>
                                <p class="text-gray-600 dark:text-gray-300">Founder, Global Cybersecurity Community Forum</p>
                                <p class="text-gray-600 dark:text-gray-300">IEEE, ISACA, PMI Member</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">PMP, CISA, CISM, CRISC, CEH, CNDA, CDCP, COBIT 5, ISO 27001:2013 LA, ISO 27001:2022 LA, CCNP(Enterprise), ITIL, JNCIA, ActivIdentity Certified</p>
                            </div>
                        </div>
                    </div>

                    <!-- Logistic Partners -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Logistic Partners</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Himalayan Integrated Cloud Technologies</h5>
                                <p class="text-gray-600 dark:text-gray-300">Kathmandu, Nepal</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">The New Gen Infotech Pty</h5>
                                <p class="text-gray-600 dark:text-gray-300">Singapore</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-indigo-50 dark:bg-indigo-900/20 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">For More Details Contact</h4>
                        <p class="text-indigo-600 dark:text-indigo-400 font-medium">info@gccforums.org</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Past Events Section -->
        <div>
            <div class="text-center mb-12 mt-10">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Past Events</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Explore highlights and photos from our successfully completed events and training programs.
                </p>
            </div>

            <!-- Past Event Card -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                <!-- Event Header -->
                <div class="relative h-64 bg-gradient-to-br from-green-600 to-teal-700 overflow-hidden">
                    <div class="absolute inset-0 bg-black/30"></div>
                    <!-- Abstract cybersecurity pattern -->
                    <div class="absolute inset-0 opacity-30">
                        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="past-event-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="10" cy="10" r="2" fill="white" opacity="0.8"/>
                                    <path d="M10 10 L30 30 M10 10 L-10 -10 M10 10 L30 -10 M10 10 L-10 30" stroke="white" stroke-width="0.5" opacity="0.7"/>
                                </pattern>
                            </defs>
                            <rect width="100" height="100" fill="url(#past-event-pattern)"/>
                        </svg>
                    </div>
                    <!-- Event Date Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm font-medium">
                            May 11–15, 2025
                        </span>
                    </div>
                    <!-- Event Title -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-2xl font-bold text-white mb-2">
                            Successful Completion of International Training Program
                        </h3>
                        <p class="text-gray-200">Building Leadership for Digital Transformation and Cyber Resilience Culture</p>
                    </div>
                </div>

                <!-- Event Details -->
                <div class="p-8">
                    <!-- Location -->
                    <div class="flex items-center mb-6">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-900 dark:text-white">AIT Conference Center</p>
                            <p class="text-gray-600 dark:text-gray-300">Asian Institute of Technology</p>
                            <p class="text-gray-600 dark:text-gray-300">Klong Luang, Pathum Thani 12120, Thailand</p>
                            <p class="text-gray-600 dark:text-gray-300">Bangkok, Thailand</p>
                        </div>
                    </div>

                    <!-- Event Description -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Event Summary</h4>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                            The International Training Program on Building Leadership for Digital Transformation and Cyber Resilience Culture, hosted by the Global Cybersecurity Community Forum (GCCF), successfully concluded on May 15, 2025, at the AIT Conference Center, Asian Institute of Technology (AIT), Bangkok, Thailand.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                            Held over five intensive days from May 11 to 15, 2025, the program brought together a diverse cohort of participants and speakers from Nepal, the Philippines, Thailand, and Zimbabwe, representing sectors ranging from government, banking and finance, higher education, telecommunications, to critical infrastructure.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            This international training program was designed to empower current and emerging leaders with the strategic insights and practical tools necessary to lead secure digital transformation initiatives in today's complex threat landscape. The sessions provided a unique blend of theory, policy discourse, and actionable frameworks focusing on cybersecurity governance, resilience strategies, leadership development, and cross-sectoral collaboration.
                        </p>
                    </div>

                    <!-- Event Highlights -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Participants Benefited From</h4>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Hands-on workshops led by global experts on risk-based decision making, zero-trust architecture, and digital governance.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Case studies highlighting real-world incidents and response mechanisms in different geopolitical contexts.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Interactive panels and discussions exploring the evolving role of leadership in building cyber-resilient digital ecosystems.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Networking opportunities that fostered new partnerships and collaboration among cybersecurity professionals across Asia and Africa.
                            </li>
                        </ul>
                    </div>

                    <!-- Event Photos Gallery -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Event Photos</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Photo 1 -->
                            <div class="group relative overflow-hidden rounded-lg shadow-lg">
                                <div class="aspect-w-16 aspect-h-9 bg-gradient-to-br from-blue-400 to-purple-600">
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-white opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Opening Ceremony</p>
                                </div>
                            </div>
                            <!-- Photo 2 -->
                            <div class="group relative overflow-hidden rounded-lg shadow-lg">
                                <div class="aspect-w-16 aspect-h-9 bg-gradient-to-br from-green-400 to-blue-600">
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-white opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Workshop Sessions</p>
                                </div>
                            </div>
                            <!-- Photo 3 -->
                            <div class="group relative overflow-hidden rounded-lg shadow-lg">
                                <div class="aspect-w-16 aspect-h-9 bg-gradient-to-br from-purple-400 to-pink-600">
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-300"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-white opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Closing Ceremony</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Organizing Committee -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">International Organizing Committee and Resource Persons</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Ramhari Subedi (PhD, USA)</h5>
                                <p class="text-gray-600 dark:text-gray-300">Professor, Cybersecurity</p>
                                <p class="text-gray-600 dark:text-gray-300">ECPI University</p>
                                <p class="text-gray-600 dark:text-gray-300">Virginia, USA</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. Suvil Chomchaiya, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Lecturer, Department of Mathematics</p>
                                <p class="text-gray-600 dark:text-gray-300">King Mongkut's University of Technology Thonburi</p>
                                <p class="text-gray-600 dark:text-gray-300">Bangkok, Thailand</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Dr. John Benedict L. Bernardo, PhD</h5>
                                <p class="text-gray-600 dark:text-gray-300">Consultant, IT and Cybersecurity</p>
                                <p class="text-gray-600 dark:text-gray-300">Manila, Philippines</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Mr. Ramamurthi Nagarajan, PMP</h5>
                                <p class="text-gray-600 dark:text-gray-300">Principal Consultant - Digital Transformation</p>
                                <p class="text-gray-600 dark:text-gray-300">The New Gen Infotech</p>
                                <p class="text-gray-600 dark:text-gray-300">Singapore</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Mr. Kumar Pudashine (MEng, AIT)</h5>
                                <p class="text-gray-600 dark:text-gray-300">Founder, Global Cybersecurity Community Forum</p>
                                <p class="text-gray-600 dark:text-gray-300">IEEE, ISACA, PMI Member</p>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">PMP, CISA, CISM, CRISC, CEH, CNDA, CDCP, COBIT 5, ISO 27001:2013 LA, ISO 27001:2022 LA, CCNP(Enterprise), ITIL, JNCIA, ActivIdentity Certified</p>
                            </div>
                        </div>
                    </div>

                    <!-- Logistic Partners -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Logistic Partners</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">Himalayan Integrated Cloud Technologies</h5>
                                <p class="text-gray-600 dark:text-gray-300">Kathmandu, Nepal</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                <h5 class="font-semibold text-gray-900 dark:text-white">The New Gen Infotech Pty</h5>
                                <p class="text-gray-600 dark:text-gray-300">Singapore</p>
                            </div>
                        </div>
                    </div>

                    <!-- Acknowledgments -->
                    <div class="bg-green-50 dark:bg-green-900/20 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Acknowledgments</h4>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                            The Global Cybersecurity Community Forum sincerely thanks the AIT Conference Center for its outstanding support and warm hospitality. We also extend our deep appreciation to all participants, speakers, and partners whose contributions made the event a remarkable success. Special thanks go to Dr. Anish Ghimire, Assistant Professor, Asian Institute of Technology for his valuable support.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            The energy and spirit of collaboration cultivated during the program are expected to drive future regional and global initiatives in cybersecurity leadership and digital resilience. As the digital landscape continues to evolve, programs like this play a critical role in preparing leaders to proactively address emerging threats, build organizational resilience, and contribute to a more secure and inclusive digital future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .aspect-w-16 {
        position: relative;
        padding-bottom: 56.25%;
    }
    
    .aspect-h-9 {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
</style>
@endpush 