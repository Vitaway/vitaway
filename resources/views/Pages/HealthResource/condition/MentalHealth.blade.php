@extends('Layouts.main')

@section('title') resource - diabetes @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/sub-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/coaching.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/for-members.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/more-resource.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/home/RemoteDocker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
@stop

@section('content')
    <x-navbar />

    <!-- home section -->
    <section id="home" class="tm-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-white">CONDITIONS WE TREAT / PREVENTION
                                </p>
                                <h2>A healthy lifestyle that lasts</h2>
                                <p class="text-white mt-5">
                                    Vitaway helps you reduce your risk of prediabetes and chronic disease
                                    through nutrition guidance, weight loss, and customized health coaching.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- social icons section -->
    <section id="tm-icons" class="tm-icons">
        <div class="container">
            <div class="row">

                <div class="tm-icon-1">
                    <div class="wow fadeInUp">
                        <div class="media">
                            <div class="media-body">
                                <p>It takes only one minute to see if
                                    Vitaway is right for you and at no cost
                                </p>
                            </div>
                            <div class="readmore-btn text-center">
                                <a href="#">Am aligible <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- start work -->
    <div id="work" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounce">
                    <h2>What you get with Vitaway for Prevention</h2>
                    <p>Our plans adapt to every program participant. Members can message
                        their health coach anytime, anywhere.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="media">
                        <div class="media-object media-left">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">A plan crafted for you
                            </h3>
                            <p>
                                We help you build healthy routines around what you love to do and where you want the most
                                support.
                            </p>
                            <strong>
                                - Nutrition - Exercise - Social Support -
                            </strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="media">
                        <div class="media-object media-left">
                            <i class="fa fa-link"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">No more counting calories</h3>
                            <p>
                                Try new things you’ll enjoy, rather than avoiding foods you “can’t eat” or things you
                                “shouldn’t do.”
                            </p>
                            <strong>
                                - Health Coaches - Safe Space Groups - <br />
                                - Clinical Insights -
                            </strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="media">
                        <div class="media-object media-left">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">We're in your corner</h3>
                            <p>
                                We’ll match you with a dedicated health coach for the support you need to get going and keep
                                going.
                            </p>
                            <strong>
                                - Cellular Connected Devices - Data Tracking -
                                - Goal Achievement -
                            </strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end work -->

    <div id="diabete-program" class="diabete-program section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>How Vitaway's diabetes program works for members</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row program-row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <h4>Apply for vitaway </h4>
                            <p>
                                Complete a quick 5-10 minute
                                application to check your eligibility
                                for the program and enroll.
                            </p>
                            <strong>
                                *Get a confirmation email
                                *Set up your account
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <h4>Get your connected devices</h4>
                            <p>
                                Depending on your eligibility,
                                we’ll send you a blood glucose meter*
                                , plus a continuous glucose monitor
                                (CGM) sensor.
                            </p>
                            <strong>
                                *Monitor your glucose level patterns
                                *Devices come pre-connected***
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <h4>Meet your care team</h4>
                            <p>
                                We’ll match you with a dedicated
                                health coachsupported
                                by a Certified Diabetes Care
                                and Education Specialist
                                (CDCES).
                            </p>
                            <strong>
                                *Track your progress in the app
                                *Join Safe space group
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Whole-Person <br /> Virtual Care for all</h2>
                                        <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS
                                            layout provided by TemplateMo, a great website to download free CSS templates.
                                        </p>
                                    </div>
                                    <div class="col-lg-12 more-detail-buttons">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="#contact">Learn more <i class="fab fa-apple"></i></a>
                                        </div>
                                        <div class="outline-button scroll-to-section">
                                            <a href="#contact">Watch video <i class="fab fa-google-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="https://images.unsplash.com/photo-1664215795139-516f3a4ce81b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2129&q=80"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="more-resource" class="more-resource section">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="res-heading">
                        <h4>Vitaway Resources for Diabetes</h4>
                        <a href="more-">Visit Resource center </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row program-row">
                <div class="col-lg-3">
                    <div class="service-item shadow-md first-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/29/night-square.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2081&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <p>
                                Complete a quick 5-10 minute
                                application to check your eligibility
                                for the program and enroll.
                            </p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item shadow-md second-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/29/night-square.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2081&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <p>
                                Depending on your eligibility,
                                we’ll send you a blood glucose meter*
                                , plus a continuous glucose monitor
                            </p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item shadow-md third-service">
                        <div class="icon">
                            <img src="https://images.unsplash.com/29/night-square.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2081&q=80"
                                alt="">
                        </div>
                        <div class="program-body">
                            <p>
                                We’ll match you with a dedicated
                                health coachsupported
                                by a Certified Diabetes Care
                            </p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <x-footer />
@stop

@section('scripts') @stop
