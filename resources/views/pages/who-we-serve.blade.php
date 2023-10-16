@extends('layouts.guest')

@section('title') resource - diabetes @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/who_we_serve.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533556/vite-guest-imgs/allgo-an-app-for-plus-size-people-eqlRthvN188-unsplash_mjb1s7.jpg" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="" />
            <div class="relative bg-opacity-75 bg-gray-900/60">
                <svg class="absolute inset-x-0 -bottom-1 text-white" viewBox="0 0 1160 163">
                    <path
                    fill="currentColor"
                    d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
                    ></path>
                </svg>
                <div style="height: 500px" class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                            <h2 style="line-height: 2.9rem" class="max-w-lg mb-6 font-normal font-patua text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                                Your Well-being with Vitaway's <br class="hidden md:block" />
                                Health Plan
                            </h2>
                            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                Our personalized programs are designed to inspire better health outcomes.
                                We believe in tailoring wellness plans to your unique needs.
                            </p>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <div id="services" class="services section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading text-left">
                        <h4 class="font-normal font-patua tracking-wider">Programs</h4>
                        <p class="leading-6">
                            Virtual care is the first integrated solution. To achieve long-lasting health changes on their
                            terms, Vitaway supports members in changing their thinking.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                        <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                            Diabetes
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            Simply Diabetes management with quick checks and a Proper...
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                        <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                            Hypertension
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            Track Your health trends to work toward reaching your health...
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                        <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                            Weight Management
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            Find tools and strategies to help healthy weight...
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-sm hover:shadow-lg md:px-7 xl:px-10" style="border: 1px solid #e7dfd7">
                        <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-patua font-medium text-dark">
                            Mental Health
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">we care about your mental health.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="features section" style="background: #003E48">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="section-heading text-center">
                        <h4 class="text-white">Features of using Vitaway’s Virtual Care solution</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <ul class="timeline-goal" id="timeline-goal">
                    <li class="li complete">
                        <div class="status">
                            <h4> Plan created for you </h4> <br>
                        </div>
                    </li>
                    <li class="li complete">
                        <div class="status">
                            <h4> Vitaway Care Team </h4> <br>
                        </div>
                    </li>
                    <li class="li complete">
                        <div class="status">
                            <h4> Smart Health Devices </h4> <br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row mt-4">
                        <p class="features-description mb-4">Our Plans are tailor- fit to meet your condition needs and improve
                            your health :</p>
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div class="detail">24/7 Access to health coaches & Specialists</div>
                                    </div>
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                            </svg>
                                        </div>
                                        <div class="detail">Based on your specific needs and goals </div>
                                    </div>
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                            </svg>
                                        </div>
                                        <div class="detail">Condition - specific content & Educational resources </div>
                                    </div>
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <div class="detail">Personalized care plan combine behavior change </div>
                                    </div>
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                        </div>
                                        <div class="detail">Social support from peer groups and conditional - specific
                                            condition </div>
                                    </div>
                                    <div class="features-set">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                            </svg>
                                        </div>
                                        <div class="detail">Tracking your patterns and symptoms </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="right-image wow fadeInRight rounded-full" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533560/vite-guest-imgs/national-cancer-institute-NFvdKIhxYlU-unsplash_vfx6zu.jpg"
                                    alt="" class="rounded-full"
                                    style="border-radius: 50%; width: 400px; height: 400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
@endsection
