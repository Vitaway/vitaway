@extends('layouts.guest')

    @section('title') Power of a Positive Perspective for Better Health | For Indivitual @stop

    @section('metas')
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="Vitaway, mindset, health, well-being, positive perspective, journey, healthier you, For indivituals">
        <meta name="description" content="Discover how changing your mindset can be the key to improving your overall health and well-being. Explore the power of a positive perspective in this journey toward a healthier you. Vitaway is your guide to a healthier life.">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/indivitual.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="canonical" href="{{ route('indivitual') }}">
    @stop

    @section('content')
        <x-navigation-bar />

        <template>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1613089222731-8841ac989caa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTU4fHxoZWFydCUyMGF0dGFja3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Transform your Life and Mindset shift for Optimal Health" />
                <div class="relative bg-opacity-75 bg-gray-900/60">
                    <svg class="absolute inset-x-0 -bottom-1 text-white" viewBox="0 0 1160 163">
                        <path
                        fill="currentColor"
                        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
                        ></path>
                    </svg>
                    <div style="height: 500px" class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                        <div class="flex flex-col items-center justify-between xl:flex-row">
                            <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 mt-4">
                                <h2 style="line-height: 2.9rem" class="max-w-lg mb-6 font-normal font-patua text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                                    Transform your Life and Mindset shift for Optimal Health
                                </h2>
                                <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                    Discover how changing your mindset can be the key to improving your overall health and well-being.
                                    Explore the power of a positive perspective in this journey toward a healthier you
                                </p>
                            </div>
                            <div class="w-full max-w-xl xl:px-8 xl:w-5/12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <div class="aligible-container relative p-10">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
              <div style="border: 1px solid #e7dfd7" class="p-8 absolute -top-20 right-20 left-20 rounded-[20px] bg-white shadow-md sm:p-16">
                <div class="flex flex-col lg:flex-row">
                  <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                    <h2 style="line-height: 2.5rem" class="font-patua font-normal text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        It takes only one minutes to see if <br class="hidden md:block" /> Vitaway is right for you and at no cost.
                      <span class="inline-block text-indigo-600 font-patua font-normal">a lazy dog</span>
                    </h2>
                  </div>
                  <div class="lg:w-1/2">
                    <p class="mb-4 text-base text-gray-700">
                        Your path to better well-being with Vitaway's one-minute wellness assessment.
                        Find out if our tailored solutions are right for you, at no cost.
                        Your journey to improved health begins now!
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center transition-colors duration-200 bg-indigo-600 px-4 py-3 rounded-[10px] font-normal font-patua text-gray-100 hover:text-deep-purple-800">
                     I am Eligible
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!--Boxs section -->
        <style>
            .card-body .icon {
                margin-left: 0px;
                margin-bottom: 30px;
                background-repeat: no-repeat;
                width: 100px;
                height: 100px;
                transition: all 0.3s;
                border-radius: 50%;
                background-color: #f5f5f5;
                display: inline-block;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .card-body .icon img{
                width: 70px;
                height: 70px;
                object-fit: fill;
                transition: all 0.3s;
            }
        </style>

        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-50 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4436/4436450.png" alt="" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-5 text-xl font-normal font-patua">
                                    Small steps, long-term change
                                </h3>
                                <p class="card-text text-black font-medium">Vitaway helps you create healthy routines
                                    that last for years, not just weeks at a time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-50 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4288/4288923.png" alt="Find your Joy" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-5 text-xl font-normal font-patua">
                                    Find your Joy
                                </h3>
                                <p class="card-text text-black font-medium">
                                    Try new things you’ll actually enjoy,
                                    rather than avaiding foods you “can’t eat”
                                    or things you “ shouldn’t do”.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-50 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1685/1685803.png" alt="Virtual Care, uniquely yours" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-5 text-xl font-normal font-patua">
                                    Virtual Care, uniquely yours
                                </h3>
                                <p class="card-text text-black font-medium">
                                    When life happens. Vitaway helps you stay
                                    on  track with a plan that constantly
                                    adapts to meet your needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <virtual-care-programs />
        </div>

        <x-footer />
    @stop

    @section('scripts') @stop
