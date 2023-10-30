@extends('layouts.guest')

    @section('title') Contact Us | Reach Our Team @stop

    @section('metas')
        <meta name="description" content="Contact Vitaway for all your healthcare needs. Reach our dedicated team for product information, support, or partnership inquiries. Your message matters to us. Let's connect for a healthier tomorrow.">
        <meta name="keywords" content="contact Vitaway, healthcare team, product information, support, partnership inquiries, healthcare needs">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/contact.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="canonical" href="{{ route('contact') }}">
        <style>
            .overlay {
                background-image: linear-gradient(to right, rgba(45, 126, 131, 0.9), rgba(45, 126, 131, 0.9));
                width: 100%;
                height: 100%;
                z-index: 1;
                position: relative;
                padding: 110px 0;
            }
            .section-bg {
                background-size: cover;
                position: relative;
                background-position: left;
                z-index: 0;
                padding: 0;
                min-height: auto;
                overflow: hidden;
            }
            .contact-form {
                position: relative;
                padding: 45px 0 45px 60px;
                border-radius: 20px
            }

            .contact-form:before {
                position: absolute;
                content: '';
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                border-radius: 20px;
                box-shadow: 10px 40px 40px rgba(0,0,0,.2);
                pointer-events: none;
                right: auto;
                width: 100vw;
            }
            .particles-js-canvas-el {
                position: absolute;
                left: 0;
                top: 0;
                z-index: 1;
            }
            .contact-form input {
                border: 0;
                background: yellow;

                display: block;
                width: 100%;
                min-height: 50px;
                padding: 11px 0;
                font-size: 16px;
                font-weight: 600;
                line-height: 27px;

                background-color: transparent;
                background-image: none;
                border-radius: 0;
                -webkit-appearance: none;
                transition: .3s ease-in-out;
                border: 2px solid transparent;
                border-bottom-color: rgba(0,0,0,.1);
            }

            .contact-form textarea {
                border: 0;
                background: transparent;
                display: block;
                width: 100%;
                min-height: 50px;
                padding: 11px 0;
                font-size: 16px;
                font-weight: 600;
                line-height: 27px;

                background-color: transparent;
                background-image: none;
                border-radius: 0;
                -webkit-appearance: none;
                transition: .3s ease-in-out;
                border: 2px solid transparent;
                border-bottom-color: rgba(0,0,0,.1);
            }
            .contact-form input::placeholder {
                color:#222;
            }
            .contact-form textarea::placeholder {
                color:#222;
            }
            .contact-form input {
                margin-bottom: 30px;
                font-size: 16px;
                font-weight: 600;
                height: 55px;
            }
            .contact-form input:hover, .contact-form input:focus{
                outline: none;
                box-shadow: none;
                background: transparent;
                border: 2px solid transparent;
                border-bottom-color: rgb(254, 132, 111);

            }
            .contact-form textarea:hover, .contact-form textarea:focus{
                background: transparent;
                outline: none;
                box-shadow: none;
                border: 2px solid transparent;
                border-bottom-color: rgb(254, 132, 111);

            }

            .taso-btn {
                background-color: #fff;
                margin: 25px 0;
                color: #214dcb;
                -webkit-box-shadow: 0px 10px 30px 0px rgba(255, 255, 255, 0.32);
                box-shadow: 0px 10px 30px 0px rgba(255, 255, 255, 0.17);
            }
            .contact-info {
                padding: 0 30px 0px 0;
            }

            .contact-info h2.contact-title {
                font-size: 35px;
                font-weight: 600;
                color: #fff;
                margin-bottom: 30px;
            }

            .contact-info p {
                color: #ececec;
            }

            .contact-info ul.contact-info {
                margin-top: 30px;
            }

            .contact-info ul.contact-info li {
                margin-bottom: 22px;
            }

            .contact-info ul.contact-info span {
                font-size: 20px;
                line-height: 26px;
            }
            .contact-info ul.contact-info li {
                display: flex;
                width: 100%;
            }

            .contact-info .info-left {
                width: 10%;
            }

            .contact-info .info-left i {
                width: 30px;
                height: 30px;
                line-height: 30px;
                font-size: 30px;
                color: #ffffff;
            }

            .contact-info .info-right h4 {
                color: #fff;
                font-size: 18px;
            }
            .contact-page .info-left i{
                color: #FE846F;
            }
            .contact-form .btn {
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                font-family: 'Poppins', sans-serif;
                padding: 10px 30px 10px;
                font-size: 17px;
                line-height: 28px;
                border: 0px;
                border-radius: 10px;
                -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            .contact-form .btn-big {
                color: #ffffff;
                -webkit-box-shadow: 0px 5px 20px 0px rgba(45, 45, 45, 0.47843137254901963);
                box-shadow: 2px 5px 5px 0px rgba(45, 45, 45, 0.19);
                color: #fff !important;
                margin-right: 20px;
                background: #FE846F;
                transition: .2s;
                border: none;
                margin-top: 50px;
            }

            @media only screen and (max-width: 767px) {
                .contact-form {
                    padding: 30px;
                }
                .contact-form:before {
                    width: 100%;
                }
            }
        </style>
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
                        <a href="https://wa.me/250787279560" target="__blank">
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

