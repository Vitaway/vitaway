@extends('layouts.guest')

@section('title') Home @stop

@section('metas')
    <meta name="description" content="Rwandan digital healthcare platform that provides multi-disciplinary health practices, with a mission of equipping people, especially young ones, with the knowledge and skills on healthy nutrition to improve awareness in food choice and healthy lifestyle, and to use digital technology in raising NCDs awareness and nutritional education.">
    <meta name="keywords" content="vitaway, vitaway.org, e-clinic, digital healthcare, platform, multi-disciplinary, health practices, equipping, young, NCDs, nutritional, education">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/index_page.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="canonical" href="{{ env('APP_URL') }}">
@stop

@section('content')
    <x-navigation-bar />

    {{-- Hero section --}}
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 align-self-center">
                  <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="row">
                        <div class="col-lg-12 hero-title font-patua font-normal">
                            <h2 class="wow fadeIn">Universal Access <br> To Virtual Health <br> Services for Enhanced Well-being</h2>
                            <p class="wow fadeIn">Virtual healthcare solutions to empower individuals from all walks of life, promoting overall well-being and health equity.</p>
                        </div>

                        <div class="col-lg-12 more-detail-buttons ">
                            <a href="{{ route('get.pricing') }}">
                                <button type="button" class="text-white animate__animated animate__fadeInUp animate__delay-1s animate__slow font-patua font-normal bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
                                    Get Started
                                </button>
                            </a>
                            <a href="{{ route('get.download') }}">
                                <button type="button" class="text-gray-900 animate__animated animate__fadeInUp animate__delay-1s animate__slow font-patua font-normal bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                    Download The app
                                </button>
                            </a>
                        </div>

                        <div class="clients pt-16">
                            <h6 class="mb-2 flex items-center text-xs font-patua font-normal text-body-color">
                                Some Of Our Paterners
                            <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
                            </h6>
                            <div class="flex items-center">
                                <a href="https://www.minict.gov.rw/" target="__blank" class="mr-4 w-80 py-3">
                                    <div>
                                        <img src="https://amarebe.com/wp-content/uploads/2022/11/MINICT-1.png" alt="MINICT" />
                                    </div>
                                </a>
                                <a href="https://www.undp.org/rwanda" target="__blank" class="mr-4 w-40 py-3">
                                    <div>
                                        <img src="https://www.undp.org/sites/g/files/zskgke326/files/2022-04/undp-logo-blue.svg" alt="UNDP" />
                                    </div>
                                </a>
                                <a href="https://tefconnect.net" target="__blank" class="mr-4 w-full py-3">
                                    <div>
                                        <img src="https://tefconnect.net/static/media/logo_new.4eee159d.webp" alt="tefconnect" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 relative mobile-view">
                    <div class="mx-auto ml-5 z-20">
                        <div class="absolute left-40 animate__animated animate__fadeInUp animate__delay-1s animate__slow">
                            <div class="relative rotate-12 translate-x-10 pt-[13px] border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                                <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                    <img src="/images/Categories_2.png" class="dark:hidden w-[272px] h-[572px]" alt="vitaway client coach dashboard">
                                    <img src="/images/Categories_2.png" class="hidden dark:block w-[272px] h-[572px]" alt="vitaway client coach dashboard">
                                </div>
                            </div>
                        </div>
                        <div class="relative wow bounceInUp border-gray-800 pt-[13px] dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                            <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                            <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                <img src="/images/Categories.png" class="dark:hidden w-[272px] h-[572px]" alt="vitaway client dashboard">
                                <img src="/images/Categories.png" class="hidden dark:block w-[272px] h-[572px]" alt="vitaway client dashboard">
                            </div>
                        </div>
                    </div>

                    <span class="absolute right-0 bottom-8 z-10">
                        <svg
                        width="93"
                        height="93"
                        viewBox="0 0 93 93"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                        </svg>
                    </span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- ====== Services Section Start -->
    <template>
        <div style="z-index: 6 !important" class=" bg-transparent px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-28 lg:px-11 lg:pt-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    Consultation
                </p>
                </div>
                <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 right-10 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative font-patua font-normal">Accessible</span>
                    </span>
                    Remote Doctor Consultation
                </h2>
                <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                    Connect with qualified medical professionals from the comfort of your home,
                    ensuring convenient, safe, and efficient healthcare access whenever you need it.
                </p>
            </div>
            <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div style="z-index: 6 !important" class="flex animate__animated animate__fadeInUp animate__slow flex-col justify-between p-5 border rounded-[20px] shadow-sm">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                           <img src="https://cdn-icons-png.flaticon.com/512/4349/4349215.png" alt="Diabetes">
                        </div>
                        <h4 class="mb-3 font-patua font-normal leading-5 text-xl">Diabetes</h4>
                        <p class="mb-3 text-sm text-gray-900">
                            Comprehensive guide explores the various types of diabetes, their causes, symptoms, and management
                        </p>
                    </div>
                    <a href="/" aria-label="" class="inline-flex items-center font-patua font-normal transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
                <div style="z-index: 6 !important" class="flex animate__animated animate__fadeInUp animate__slow flex-col justify-between p-5 border rounded-[20px] shadow-sm">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="https://cdn-icons-png.flaticon.com/512/4799/4799067.png" alt="Hypertension">
                        </div>
                        <h4 class="mb-3 font-patua font-normal leading-5 text-xl">Hypertension</h4>
                        <p class="mb-3 text-sm text-gray-900">
                            Learn how to measure your blood pressure, spot the warning signs, and discover practical steps
                            to manage and prevent this silent but deadly health threat
                        </p>
                    </div>
                    <a href="/" aria-label="" class="inline-flex items-center font-patua font-normal transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
                <div style="z-index: 6 !important" class="flex animate__animated animate__fadeInUp animate__slow flex-col justify-between p-5 border rounded-[20px] shadow-sm">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="https://cdn-icons-png.flaticon.com/512/847/847345.png" alt="Weight Management">
                        </div>
                        <h4 class="mb-3 font-patua font-normal leading-5 text-xl">Weight Management</h4>
                        <p class="mb-3 text-sm text-gray-900">
                            Comprehensive guide offers expert insights, practical tips, and personalized plans
                            to help you achieve and maintain a weight that promotes your well-being
                        </p>
                    </div>
                    <a href="/" aria-label="" class="inline-flex items-center font-patua font-normal transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
                <div style="z-index: 30 !important" class="flex animate__animated animate__fadeInUp animate__slow bg-white flex-col justify-between p-5 border rounded-[20px] shadow-sm">
                    <div>
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <img src="https://cdn-icons-png.flaticon.com/512/3997/3997942.png" alt="Mental health">
                        </div>
                        <h4 class="mb-3 font-patua font-normal leading-5 text-xl">Mental health</h4>
                        <p class="mb-3 text-sm text-gray-900">
                            Your mental health is as important to us as your physical health,
                            and we believe that taking care of your mind
                            is a crucial part of overall wellness
                        </p>
                    </div>
                    <a href="/" aria-label="" class="inline-flex items-center font-patua font-normal transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
        </div>
    </template>
    <!-- ====== Services Section End -->

    <div class="wellness relative">
        <div class="absolute right-0 -top-32" style="z-index: 3 !important">
            <img src="/images/services-right-dec.png" alt="">
        </div>

        <div class="wellness-container grid grid-cols-2 gap-3 z-10">
            <div class="welness-item animate__animated animate__fadeInUp animate__slow" style="z-index: 6 !important">
                <div class="welness-description">
                    <h2 class="font-patua font-medium tracking-wide">Nutrition Consultation</h2>
                    <p class="text-gray-600 font-merri font-semibold leading-8 text-md">Everyone’s nutritional goals are different, whether it’s losing weight,
                        building fitness or just eating better. That’s why we take a comprehensive,
                        multidisciplinary approach to your care, working with you to overcome your
                        challenges and live a healthier, more active life.</p>
                    <div class="mt-5">
                        <a href="{{ route('contact') }}" class="get-in-touch font-patua font-medium tracking-wide">Get in Touch</a>
                    </div>
                </div>
                <div class="welness-img">
                    <img src="https://static.wixstatic.com/media/82df8c_80b4b77d2d9048978a8e10f562dc1f5d~mv2.jpg/v1/fill/w_352,h_412,al_c,lg_1,q_80,enc_auto/plan.jpg" alt="Nutrition Consultation">
                </div>
            </div>
            <div class="welness-item animate__animated animate__fadeInUp animate__slow" style="z-index: 6 !important">
                <div class="welness-description">
                    <h2 class="font-patua font-medium tracking-wide">Get Personalized wellness Plan</h2>
                    <p class="text-gray-600 font-merri font-semibold leading-8 text-md">Our nutrition services team includes doctors,
                        wellness practitioners and nutritionists.
                        These specialists work together with you
                        to help you create a realistic, achievable
                        plan for changing old habits in order to
                        accomplish your nutrition goals.</p>

                    <div class="mt-5">
                        <a href="{{ route('contact') }}" class="get-in-touch">Get in Touch</a>
                    </div>
                </div>
                <div class="welness-img">
                    <img src="https://static.wixstatic.com/media/82df8c_83245a7d38a944b9b8cd1cc750392345~mv2.png/v1/fill/w_352,h_412,al_c,lg_1,q_85,enc_auto/wellness.png" alt="Personalized wellness Plan">
                </div>
            </div>

        </div>
    </div>

    {{-- Our Goals section --}}
    <template>
        <div class="our-goal relative mt-4 px-4 pt-20 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-24">
            <div class="absolute inset-x-0 top-0 items-top justify-center hidden overflow-hidden md:flex md:inset-y-0">
                <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-blue-200">
                    <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
                    <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
                    <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
                    <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
                    <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
                </svg>
            </div>
            <div class="relative">
                <div class="pt-7">
                    <div class="grid gap-5 row-gap-8 lg:grid-cols-2 items-center">
                        <div class="flex flex-col justify-center">
                            <div class="max-w-xl">
                                <h2 style="line-height: 2.6rem" class="max-w-lg mb-6 font-patua font-normal leading-10 text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                                    Virtual-first care <br class="hidden md:block" />
                                    to address expensive chronic conditions found
                                    <span class="relative px-1">
                                        <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-teal-accent-400"></div>
                                        <span class="relative inline-block text-deep-purple-accent-400 font-patua font-normal text-indigo-700">across your population</span>
                                    </span>
                                </h2>
                                <p class="text-base text-gray-700 md:text-lg">
                                    We leverage our expertise and tech-savvy skills to drive your digital transformation,
                                    unlocking competitive advantages through cutting-edge technologies, data solutions,
                                    and digital healthcare services. Our experience guarantees improved patient care,
                                    smarter decision-making, and enhanced healthcare management.
                                </p>
                            </div>
                            <div class="grid gap-3 row-gap-2 sm:grid-cols-2 mt-5">
                                <div class="mb-2 animate__animated animate__fadeInUp animate__slow rounded-[20px] bg-white p-3 shadow-sm hover:shadow-lg md:px-4 xl:px-5" style="border: 1px solid #e7dfd7">
                                    <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                                        Vitaway for Diabetes
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        A specially formulated supplement designed to complement your health journey
                                    </p>
                                </div>
                                <div class="mb-2 animate__animated animate__fadeInUp animate__slow rounded-[20px] bg-white p-3 shadow-sm hover:shadow-lg md:px-4 xl:px-5" style="border: 1px solid #e7dfd7">
                                    <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                                        Vitaway for Prevention
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        The power of Vitaway, a comprehensive solution for proactive health and prevention
                                    </p>
                                </div>
                                <div class="mb-2 animate__animated animate__fadeInUp animate__slow rounded-[20px] bg-white p-3 shadow-sm hover:shadow-lg md:px-4 xl:px-5" style="border: 1px solid #e7dfd7">
                                    <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                                        Vitaway for Hypertension
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        Improve heart health, and lead a more balanced life without relying solely on medication
                                    </p>
                                </div>
                                <div class="mb-2 animate__animated animate__fadeInUp animate__slow rounded-[20px] bg-white p-3 shadow-sm hover:shadow-lg md:px-4 xl:px-5" style="border: 1px solid #e7dfd7">
                                    <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                                        For also Mental Wellness
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        Encouraging and optimize mental wellness alongside professional care
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img class="animate__animated animate__fadeInUp animate__slow object-cover w-full h-40 rounded sm:h-40 shadow-sm" src="https://plus.unsplash.com/premium_photo-1679392532113-bee46deab9fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="Vitaway for Diabetes" />
                            <img class="animate__animated animate__fadeInUp animate__slow object-cover w-full h-40 rounded sm:h-40 mt-4 shadow-sm" src="https://plus.unsplash.com/premium_photo-1672292535264-ef6dab7d6a90?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWVudGFsfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60" alt="Vitaway for Prevention" />
                            <img class="animate__animated animate__fadeInUp animate__slow object-cover w-full h-40 rounded sm:h-40 mt-4 shadow-sm" src="https://images.unsplash.com/photo-1621525434111-87a99d170b0e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80" alt="Vitaway for Hypertension" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <div id="about" class="about-us section pb-10">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 align-self-center">
              <div class="left-image relative">
                <div border-radius="50% 200% 40% 80%" class="css-1ueqzyg"></div>
                <div border-radius="50% 200% 40% 80%" class="css-10gqqxt"></div>
                <span class="absolute right-0 bottom-8 z-10">
                    <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                    </svg>
                </span>
                <div class="relative animate__animated animate__fadeInUp animate__slow rotate-6 translate-x-10 pt-[13px] border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                    <div class="w-[148px] h-[20px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[274px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                        <img src="/images/learn.png" class="dark:hidden w-[274px] h-[572px]" alt="vitaway programs and learning">
                        <img src="/images/learn.png" class="hidden dark:block w-[274px] h-[572px]" alt="vitaway programs and learning">
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 ">
                <div class="section-heading">
                    <h2 style="line-height: 2.6rem" class="mb-3 text-3xl text-dark sm:text-4xl md:text-[40px] font-patua font-medium leading-9">
                        How Vitaway's diabetes program works <span class="relative inline-block text-deep-purple-accent-400 font-patua font-normal text-indigo-700"> for members </span>
                    </h2>
                    <p class="mb-5 text-xl font-merri font-normal leading-10 text-gray-600">
                        Our program empowers individuals to manage their diabetes and improve their overall health
                    </p>

                    <div class="-mx-4 flex flex-wrap">
                        <a href="{{ route('well-guide') }}" class="w-full px-2 md:w-2/3 lg:w-3/6">
                            <div class="animate__animated animate__fadeInUp animate__slow">
                                <div class="mb-8 rounded-[20px] bg-white p-4 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                                    <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-md font-patua font-medium text-gray-600">
                                        Eat Well Guide
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        Whether you're looking to improve your dietary habits, explore sustainable eating options,
                                        or simply find healthy food establishments near you.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('food-group') }}" class="w-full px-2 md:w-2/3 lg:w-3/6">
                            <div class="animate__animated animate__fadeInUp animate__slow">
                                <div class="mb-8 rounded-[20px] bg-white p-4 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                                    <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-2 text-md font-patua font-medium text-gray-600">
                                        The Food goup
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('life-stages') }}" class="w-full px-2 md:w-2/3 lg:w-3/6">
                            <div class="animate__animated animate__fadeInUp animate__slow">
                                <div class="mb-8 rounded-[20px] bg-white p-4 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                                    <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-2 text-md font-patua font-medium text-gray-600">
                                        Health & life Stage
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('well-being') }}" class="w-full px-2 md:w-2/3 lg:w-3/6">
                            <div class="animate__animated animate__fadeInUp animate__slow">
                                <div class="mb-8 rounded-[20px] bg-white p-4 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                                    <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <h4 class="mb-2 text-md font-patua font-medium text-gray-600">
                                        Health & Well being
                                    </h4>
                                    <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                                        The proportions of food groups been updated to take into account the new dietary recommendations for more fiber and less sugar.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <x-footer />
@stop

@section('scripts') @stop
