@extends('layouts.guest')

    @section('title') About Us @stop

    @section('metas')
        <meta name="robots" content="index, follow">
        <meta name="description" content="Discover Vitaway - a leading healthcare startup on a mission to transform the healthcare industry. Learn about our dedicated team, innovative solutions, and commitment to improving lives.">
        <meta name="keywords" content="vitaway, About Us, Healthcare Startup, Mission, Team, Innovations, about vitaway">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/about.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="canonical" href="{{ route('about') }}">
    @stop

    @section('content')
        <x-navigation-bar />

        <template>
            <div class="hero-section relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
                <div class="right-image inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
                    <svg class="absolute left-7 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                        <path d="M50 0H100L50 100H0L50 0Z"></path>
                    </svg>
                    <img class="object-cover w-full h-56 rounded lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="https://images.unsplash.com/photo-1543300055-4a87568503c8?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Elevate Your Health with Vitaway Virtual Care: Uniquely" />
                </div>
                <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
                    <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
                        <h2 class="mb-5 font-normal leading-10 font-patua text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            Elevate Your Health with Virtual Care: Uniquely
                            <span class="inline-block text-deep-purple-accent-400 font-normal font-patua text-indigo-600">Tailored for You</span>
                        </h2>
                        <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                            We believe in putting your health first. Our virtual care is uniquely designed to cater to your individual needs, ensuring a personalized and convenient healthcare experience.
                        </p>
                        <div class="flex items-center">
                            <div class="col-lg-12 more-detail-buttons ">
                                <button type="button" class="text-white font-patua font-normal bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
                                    Request a Demo
                                </button>
                                <a href="{{ route('get.download') }}">
                                    <button type="button" class="text-gray-900 font-patua font-normal bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                        Download The app
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template>
            <div class="pledge px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <div>
                    <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        Our Pledge to You
                    </p>
                    </div>
                    <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                            </svg>
                            <span class="relative font-patua font-normal">Elevating</span>
                        </span>
                        Your Wellness - Your Journey, Our Commitment
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                        Discover the Vitaway difference as we pledge to provide you with the highest quality healthcare solutions,
                        personalized to your unique well-being.
                    </p>
                </div>
                <div class="grid max-w-screen-xl gap-8 lg:grid-cols-2 sm:mx-auto" style="margin-top: 30px">
                    <div class="flex flex-col justify-center">
                        <div class="flex">
                            <div class="mr-4">
                                <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-indigo-50">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-2 font-semibold leading-5">
                                    Your Health and Time Matter that Committed to Your Best Life
                                </h6>
                                <p class="text-sm text-gray-900">
                                    At Vitaway + , your health and time matter. We are committed to helping you live your best life. We offer accessible, convenient care for your busy lifestyle.
                                </p>
                                <hr class="w-full my-6 border-gray-300" />
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mr-4">
                                <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-indigo-50">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-2 font-semibold leading-5">
                                    Our Formula for Lasting Health Transformation
                                </h6>
                                <p class="text-sm text-gray-900">
                                    We employ leading-edge science, personal health management and ongoing support to provide lasting changes.
                                </p>
                                <hr class="w-full my-6 border-gray-300" />
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <img class="object-cover w-full h-56 col-span-2 rounded" src="/images/Team/bg-1.jpeg" alt="vitaway core team" />
                        {{-- <img class="object-cover w-full h-48 rounded" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                        <img class="object-cover w-full h-48 rounded" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" /> --}}
                    </div>
                </div>
            </div>
        </template>

        {{-- Our values --}}
        <template>
            <div class="relative px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-15 lg:pb-20">
                <div class="absolute inset-x-0 top-0 items-top justify-center hidden overflow-hidden md:flex md:inset-y-0">
                    <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-blue-200">
                        <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
                        <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
                        <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
                        <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
                        <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
                    </svg>
                </div>
                <div>
                    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 z-40 relative">
                        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                            <div>
                            <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                                Brand new
                            </p>
                            </div>
                            <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                                <span class="relative inline-block">
                                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                                    <defs>
                                        <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                        </pattern>
                                    </defs>
                                    <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                                    </svg>
                                    <span class="relative font-patua font-normal">The</span>
                                </span>
                                Our Guiding Values that Inspiring Integrity and Dedication, Every Day.
                            </h2>
                            <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                                These six values give us the courage to do the right thing for our members, partners, and each other, every day.
                            </p>
                        </div>
                    </div>
                    <div class="relative grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                        <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-patua font-normal text-xl">Start with Trust </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We listen closely, and we operate with kindness. We provide respectful and candid feedback to each other.
                            </p>
                        </div>
                        <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-patua font-normal text-xl">Seek Context</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We ask to understand, and we build connections. We do our research up front to move faster down th road.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 font-patua font-normal text-gray-800 text-xl">Act Boldly</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We innovate daily to solve problems, improve processes, and find new opportunities for our members and customers.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-patua font-normal text-xl">Deliver Results </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We reward impact above output. We set a high bar. We’re not afraid to fail, and we take pride in our work.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-patua font-normal text-xl">Succeed Together </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We prioritize Vitaway’s progress over team or self. We have fun as we get stuff done, and we celebrate together.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-patua font-normal text-xl">Remember Why we’re Here</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We push through the challenges of changing healthcare because we know the destination is worth it
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        {{-- Gallerry --}}
        <template>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                    <span class="inline-block mb-1 sm:mb-4 font-patua font-normal leading-10">
                        Real people who have experienced positive changes in their lives through Vitaway
                    </span>
                    <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
                    </h2>
                    <p class="text-gray-700 lg:text-md leading-6 lg:max-w-md font-patua font-normal">
                        Where our healthcare journey comes to life. Take a visual tour through the heart of our startup and discover the world of innovative solutions and compassionate care that define us.
                    </p>
                </div>

                <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
                    <a href="/" aria-label="View Item">
                        <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                            <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="/images/Team/bg.jpeg" alt="vitaway team during meetup" />
                            <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                                <p class="mb-4 text-lg font-bold text-gray-100">Mona Lisa</p>
                                <p class="text-sm tracking-wide text-gray-300">
                                    Painted between 1503 and 1517, Da Vinci’s alluring portrait has been dogged by two questions since the day it was made: Who’s the subject and why is she smiling?
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="/images/Team/bg-1.jpeg" alt="vitaway team during meetup" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">The Starry Night</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                Vincent Van Gogh’s most popular painting, The Starry Night was created by Van Gogh at the asylum in Saint-Rémy, where he’d committed himself in 1889.
                            </p>
                        </div>
                    </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="/images/summit.jpeg" alt="vitaway team during meetup" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">The Kiss</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                Opulently gilded and extravagantly patterned, The Kiss, Gustav Klimt’s fin-de-siècle portrayal of intimacy, is a mix of Symbolism and Vienna Jugendstil, the Austrian variant of Art Nouveau.
                            </p>
                        </div>
                    </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.unsplash.com/photo-1543300055-4a87568503c8?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="vitaway team during meetup" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">The Harvesters</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                Bruegel’s fanfare for the common man is considered one of the defining works of Western art. This composition was one of six created on the theme of the seasons.
                            </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </template>

        {{-- Reach Out --}}
        <template>
            <div class="overflow-hidden bg-gray-900">
              <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                  <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-normal font-patua tracking-tight text-white sm:text-4xl sm:leading-none">
                        Fastest Way To Reach The Right Expert:
                        <span class="text-gray-400 font-normal font-patua">Fill Out The Form.</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base font-normal font-patua text-gray-400 md:text-lg">
                        After getting your message, we will forward it to appropriate person in the team who will get back to you shortly. Usually, we will reply within 24h (Mon-Fri).
                    </p>
                  </div>
                  <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="relative">
                      <svg viewBox="0 0 52 24" fill="currentColor" class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-gray-300 lg:w-32 lg:-mr-16 sm:block">
                        <defs>
                          <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                          </pattern>
                        </defs>
                        <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
                      </svg>
                      <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
                        <h3 class="mb-4 text-xl font-normal font-patua sm:text-center sm:mb-6 sm:text-2xl">
                          Fill out the Form
                        </h3>
                        <form>
                          <div class="mb-1 sm:mb-2">
                            <label for="name" class="inline-block mb-1 font-normal font-patua">Firstname</label>
                            <input placeholder="Use Firstname" required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="name"
                              name="name"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">Lastname</label>
                            <input
                              placeholder="Use Lastname"
                              required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="lastname"
                              name="lastname"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">E-mail</label>
                            <input
                              placeholder="john.doe@example.org"
                              required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="email"
                              name="email"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">Message</label>
                            <textarea
                              placeholder="Write a Message..."
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="message"
                              name="message"
                            ></textarea>
                          </div>
                          <div class="mt-4 mb-2 sm:mb-4">
                            <button
                              type="submit"
                              class="inline-flex items-center justify-center w-full h-12 px-6 font-normal font-patua tracking-wide text-white transition duration-200 rounded bg-indigo-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            >
                              Submit
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </template>

        <x-footer />
    @stop

    @section('scripts') @stop
