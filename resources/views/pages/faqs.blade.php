@extends('layouts.guest')

@section('title') Frequent Asked Questions @stop

@section('metas')
    <meta name="description" content="Explore Vitaway's Frequently Asked Questions (FAQ) to find answers to common queries about our healthcare products, services, and team to Learn more about how we're dedicated to enhancing your well-being.">
    <meta name="keywords" content="Vitaway, FAQ, Frequently Asked Questions, healthcare, products, services, team, well-being, answers">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <div class="team-section relative w-full h-full">
        <div class="absolute hidden w-full from-green-50 bg-gradient-to-b lg:block h-96"></div>

        <div class="px-4 z-10 py-16 mx-auto relative sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
                <div class="flex flex-col mb-16 sm:text-center">
                    <a href="/" class="mb-6 sm:mx-auto">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full ring-1 ring-gray-200 bg-indigo-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                    </a>
                    <div class="max-w-xl md:mx-auto sm:text-center lg:max-w-2xl">
                        <h2 class="max-w-lg mb-6 font-patua font-normal text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                            <span class="relative inline-block font-patua font-normal">
                                <span class="relative font-patua font-normal">Find</span>
                            </span>
                            and Unlock Answers to Your Questions! from different Insights
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            Get the answers you've been seeking! Dive into our FAQs for quick, concise solutions to common queries. Your knowledge, simplified.
                        </p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="border rounded shadow-sm">
                        <button type="button" aria-label="Open item" title="Open item" class="flex items-center justify-between w-full p-4 focus:outline-none">
                            <p class="text-lg text-gray-600 font-patua font-normal">What services does the platform offer?</p>
                            <div class="flex items-center justify-center w-8 h-8 border rounded-full">
                                <!-- Add "transform rotate-180" classes on svg, if is open" -->
                                <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200">
                                    <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                                </svg>
                            </div>
                        </button>
                        <!-- Show content if is open
                        <div class="p-4 pt-0"><p class="text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.</p></div>
                        -->
                    </div>

                    <div class="border rounded shadow-sm">
                        <button type="button" aria-label="Open item" title="Open item" class="flex items-center justify-between w-full p-4 focus:outline-none">
                            <p class="text-lg text-gray-600 font-patua font-normal">Is the platform secure?</p>
                            <div class="flex items-center justify-center w-8 h-8 border rounded-full">
                                <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200 transform rotate-180">
                                    <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                                </svg>
                            </div>
                        </button>
                        <!-- Show content if is open
                        <div class="p-4 pt-0"><p class="text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.</p></div>
                        -->
                    </div>

                    <div class="border rounded shadow-sm">
                        <button type="button" aria-label="Open item" title="Open item" class="flex items-center justify-between w-full p-4 focus:outline-none">
                            <p class="text-lg text-gray-600 font-patua font-normal">Why should I choose a vitaway as digital healthcare platform?</p>
                            <div class="flex items-center justify-center w-8 h-8 border rounded-full">
                                <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200 transform rotate-180">
                                    <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                                </svg>
                            </div>
                        </button>
                        <!-- Show content if is open
                        <div class="p-4 pt-0"><p class="text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.</p></div>
                        -->
                    </div>

                    <div class="border rounded shadow-sm">
                        <button type="button" aria-label="Open item" title="Open item" class="flex items-center justify-between w-full p-4 focus:outline-none">
                            <p class="text-lg text-gray-600 font-patua font-normal">Is vitaway platform fee of use?</p>
                            <div class="flex items-center justify-center w-8 h-8 border rounded-full">
                                <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200 transform rotate-180">
                                    <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                                </svg>
                            </div>
                        </button>
                        <!-- Show content if is open
                        <div class="p-4 pt-0"><p class="text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.</p></div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-footer />
@stop

@section('scripts') @stop
