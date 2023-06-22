@extends('layouts.guest')

@section('title') Home @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/index_page.css">
    <link rel="stylesheet" href="/css/footer.css">
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
                      <div class="col-lg-12 hero-title">
                        <h2>Whole-Person <br /> Virtual Care for all</h2>
                        <p>Technology to connect, expertise you can trust and the power to improve health</p>
                      </div>
                      <div class="col-lg-12 more-detail-buttons ">
                        <button type="button" class="text-white flex items-center bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class="mr-2">Learn More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </button>
                        <button type="button" class="text-gray-700 flex items-center bg-gray-50 border border-gray-200 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class="mr-2">Watch video</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-3">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="https://images.ctfassets.net/4f3rgqwzdznj/ykVlagbpeM6JxCeSXvXds/191c9ba7dbd61ef79d63b669aff2b18f/care-home-hero-graphic.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Remote Docker Section --}}
    <div id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading text-left">
                <h4>Remote <em>Doctor</em> Consultation</h4>
                <img src="assets/images/heading-line-dec.png" alt="">
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
                  {{-- <a href="{{ route('condition.diabetes') }}">Read More <i class="fa fa-arrow-right"></i></a> --}}
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
                  {{-- <a href="{{ route('condition.hypertension') }}">Read More <i class="fa fa-arrow-right"></i></a> --}}
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
                  {{-- <a href="{{ route('condition.pre-diabetes') }}">Read More <i class="fa fa-arrow-right"></i></a> --}}
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
                  {{-- <a href="{{ route('condition.mental-health') }}">Read More <i class="fa fa-arrow-right"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Timeline --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <a href="#" class="timeline">
                        <div class="timeline-icon">
                            <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533561/vite-guest-imgs/towfiqu-barbhuiya-jOeh3Lv88xA-unsplash_p9m8xz.jpg"
                                alt="">
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">Wellness Test</h3>
                            <p class="description mt-3">
                                Talking to a doctor has never been easier and more affordable.
                                Get personalized, premium care when you speak to our licensed and experienced Medical
                                Doctors. Our call centre is open 24/7 and you can consult in English and Kinyarwanda through
                                chats, voice and video calls.
                            </p>
                            <button class="btn button-order">order</button>
                        </div>
                    </a>
                    <a href="#" class="timeline">
                        <div class="timeline-icon">
                            <img src="https://images.unsplash.com/photo-1576402187878-974f70c890a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2666&q=80"
                                alt="">
                        </div>
                        <div class="timeline-content">
                            <h3 class="title"></h3>
                            <p class="description">
                                Take charge of your health with our range of wellness tests.

                                Screening helps in early detection of certain preventable and controllable conditions such
                                as high blood pressure, high cholesterol, diabetes, stroke and coronary heart disease.
                            </p>
                            <button class="btn button-order">order</button>
                        </div>
                    </a>
                    <a href="#" class="timeline">
                        <div class="timeline-icon">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">Chronic Care Management</h3>
                            <p class="description">
                                We make it easy for you to manage ongoing chronic conditions like type-2-diabetes and
                                hypertension.

                                We offer monthly medicine refills, reminders for routine laboratory tests, reviews with a
                                specialist and annual healthcare plans for optimum care management.
                            </p>
                            <button class="btn button-order">order</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Healcare service section --}}
    <div id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4 class="text-4xl">We put Care into Healthcare</h4>
                <img src="assets/images/heading-line-dec.png" alt="">
                <div class="header-readme-button"><a href="#">Request a Demo</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Our Goals section --}}
    <div id="services" class="services section" style="background: #00306A">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading text-left">
                        <h4 class="text-white">Our Goal : A Solution for Everyone </h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <ul class="timeline-goal" id="timeline-goal">
                    <li class="li complete">
                        <div class="status">
                            <h4> Patient </h4> <br>
                            <p>Reducing the degree of disability and dependence for daily living activities</p>
                        </div>
                    </li>
                    <li class="li complete">
                        <div class="status">
                            <h4> Healthy Provider </h4> <br>
                            <p>Creating better patient outcomes with a seamless and comfortable treatment experience</p>
                        </div>
                    </li>
                    <li class="li complete">
                        <div class="status">
                            <h4> Society </h4> <br>
                            <p> Decreasing long-term costs and burdens</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Eating health --}}
    <div id="eating-health-section" class="eating-health-section section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4>How Vitaway's diabetes program works for members </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="service-item first-service">
                <div class="icon">
                    <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">
                </div>
                <h4>Eat Well Guide </h4>
                <p>
                    Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service-item second-service">
                <div class="icon">
                    <img src="https://myplate-prod.azureedge.us/sites/default/files/styles/medium/public/2020-11/myplate-brand--labelled.png?itok=7VtFXcBC" alt="">
                </div>
                <h4>The Food Group</h4>
                <p>
                    Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.
                </p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service-item third-service">
                <div class="icon">
                    <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533561/vite-guest-imgs/national-cancer-institute-VJVsEnR_vNE-unsplash_rd7ttf.jpg" alt="">
                </div>
                <h4>Health & Life stage</h4>
                <p>Our advice covers everything from getting the right amount of healthy food and cutting down on fat, salt and sugar to hydration and staying active.</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="service-item fourth-service">
                <div class="icon">
                    <img src="https://storage.ning.com/topology/rest/1.0/file/get/9256217282?profile=RESIZE_710x&width=650" alt="">
                </div>
                <h4>Health & well Being </h4>
                <p>
                    The proportions of food groups been updated to take into account the new dietary recommendations for more fiber and less sugar.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <x-footer />
@stop

@section('scripts') @stop
