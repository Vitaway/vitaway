@extends('layouts.guest')

@section('title') Health Eating Food group @stop

@section('metas')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/healthy-eating.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="canonical" href="{{ route('food-group') }}">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1529314317205-42e5009e8f08?auto=format&fit=crop&q=80&w=2787&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Food Groups" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Food Groups
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            Eating healthily helps us stay at the right weight and lowers the risk of diet-related illness. In this section
                        </p>
                        <a href="/" aria-label="Scroll down" class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <template>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="bg-white border rounded-lg shadow-sm">
                <div class="flex flex-col md:justify-center lg:flex-row">
                    <div class="flex flex-col justify-between p-5 border-b sm:p-10 lg:border-b-0 lg:border-r lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                Vegatables food group
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.vegetables') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                What is Dairy group
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.dairy') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                Grains Starch food
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.grains') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:justify-center lg:flex-row">
                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                Proteins food group
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.proteins') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                Fruit and vegetables
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.fruits') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                What is MyPlate
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.myplate') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:justify-left lg:flex-row">

                    <div class="flex flex-col justify-between p-5 sm:p-10 lg:w-1/2">
                        <div>
                            <h5 class="max-w-md mb-6 text-xl font-patua font-normal leading-none sm:text-2xl">
                                Hydration
                            </h5>
                            <p class="mb-6 text-base text-gray-700 md:text-lg sm:mb-8">
                                Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                            </p>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('food-groups.hydration') }}">
                                <button type="submit" class="inline-flex font-patua font-normal items-center justify-center h-12 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-400 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </template>

    <x-footer />
@stop

@section('scripts') @stop
