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

    <!-- home section -->
    <section id="home" class="tm-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>VITAWAY FOR HEALTH PLAN</h2>
                                <h3 class="mt-2">Evidence - base Health care </h3>
                                <p class="mt-5">
                                    Vitaway’s personalized programs inspire better health outcome.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="services" class="services section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading text-left">
                        <h4>Programs</h4>
                        <p>
                            Virtual care is the first integrated solution. To achieve long-lasting health changes on their
                            terms, Vitaway supports members in changing their thinking.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/4349/4349215.png" alt="">
                        </div>
                        <h4>Diabetes</h4>
                        <p>Simply Diabetes management with quick checks and a Proper...</p>
                        <div class="text-button text-center">
                            <a href="{{ route('condition.diabetes') }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/4799/4799067.png" alt="">
                        </div>
                        <h4>Hypertension</h4>
                        <p>Track Your health trends to work toward reaching your health...</p>
                        <div class="text-button text-center">
                            <a href="{{ route('condition.hypertension') }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/847/847345.png" alt="">
                        </div>
                        <h4>Weight Management</h4>
                        <p>Find tools and strategies to help healthy weight loss.</p>
                        <div class="text-button text-center">
                            <a href="{{ route('condition.pre-diabetes') }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/3997/3997942.png" alt="">
                        </div>
                        <h4>Mental health</h4>
                        <p>we care about your mental health.</p>
                        <div class="text-button text-center">
                            <a href="{{ route('condition.mental-health') }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="features section mb-4" style="background: #003E48">
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
