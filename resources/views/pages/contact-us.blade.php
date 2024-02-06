@extends('layouts.guest')

    @section('title') Contact Us | Reach Our Team @stop

    @section('metas')
        <meta name="robots" content="index, follow">
        <meta name="description" content="Contact Vitaway for all your healthcare needs. Reach our dedicated team for product information, support, or partnership inquiries. Your message matters to us. Let's connect for a healthier tomorrow.">
        <meta name="keywords" content="contact Vitaway, healthcare team, product information, support, partnership inquiries, healthcare needs">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/contact.css">
        <link rel="stylesheet" href="/css/footer.css">
    @stop

    @section('content')
        <x-navigation-bar />

        <template>
            <div class="overflow-hidden bg-gray-900">
              <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                  <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-normal font-patua tracking-tight text-white sm:text-4xl sm:leading-none">
                        Contact Vitaway today, and let's connect for <span class="text-gray-400 font-normal font-patua">a Healthier tomorrow</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base font-normal font-patua text-gray-400 md:text-lg">
                        We'd love to hear from you! Reach out to our dedicated team of experts at Vitaway and let us assist you on your healthcare journey.
                    </p>

                    <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
                        <ul class="space-y-3">
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            Product information
                          </li>
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            Any support
                          </li>
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            Partnership opportunities
                          </li>
                        </ul>
                        <ul class="space-y-3">
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            Have question
                          </li>
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            Feedback, or inquiries
                          </li>
                          <li class="flex text-gray-400">
                            <span class="mr-1">
                              <svg class="w-5 h-5 mt-px text-gray-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                              </svg>
                            </span>
                            About us
                          </li>
                        </ul>
                    </div>

                    <div class="col-lg-12 more-detail-buttons mt-4">
                        <a href="https://wa.me/250787279560" rel="noopener" target="__blank">
                            <button type="button" class="text-white font-patua font-normal bg-green-600 hover:bg-green-600/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
                                Use Whatsapp
                            </button>
                        </a>
                        <a href="{{ route('get.download') }}">
                            <button type="button" class="text-gray-900 font-patua font-normal bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                Download The app
                            </button>
                        </a>
                    </div>
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
                          Connect With Vitaway
                        </h3>
                        {{-- Contact Form --}}
                        <div><contact-form /></div>
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

