@extends('layouts.guest')

@section('title') Personalized Health Programs @stop

@section('metas')
    <meta name="keywords" content="Vitaway, personalized health programs, wellness plans, better health outcomes, tailored wellness, unique needs">
    <meta name="description" content="Discover Vitaway's personalized programs designed to inspire better health outcomes. We believe in tailoring wellness plans to your unique needs for a healthier you.">
    <meta name="robots" content="index, follow">
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
            <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533556/vite-guest-imgs/allgo-an-app-for-plus-size-people-eqlRthvN188-unsplash_mjb1s7.jpg" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Vitaway's Health Plan" />
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
                                {{ __('pages/who-we-serve.hero-title') }}
                            </h2>
                            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                {{ __('pages/who-we-serve.hero-desc') }}
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
                        <h4 class="font-normal font-patua tracking-wider">{{ __('pages/who-we-serve.program-title') }}</h4>
                        <p class="leading-6">{{ __('pages/who-we-serve.program-desc') }}</p>
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
                            {{ __('pages/who-we-serve.program-diabete-title') }}
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            {{ __('pages/who-we-serve.program-diabete-desc') }}
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
                            {{ __('pages/who-we-serve.program-hypertension-title') }}
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            {{ __('pages/who-we-serve.program-hypertension-desc') }}
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
                            {{ __('pages/who-we-serve.program-weight-title') }}
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">
                            {{ __('pages/who-we-serve.program-weight-desc') }}
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
                            {{ __('pages/who-we-serve.program-mental-title') }}
                        </h4>
                        <p class="text-gray-600 font-merri font-semibold leading-6 text-md">{{ __('pages/who-we-serve.program-mental-desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <virtual-care-solution />
    </div>

    <x-footer />
@endsection
