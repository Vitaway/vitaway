@extends('Layouts.main')

@section('title') resource - diabetes @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/hypertension.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/care-plan.css') }}">
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
                                <p class="">CONDITIONS WE TREAT / PREVENTION
                                </p>
                                <h2>A healthy lifestyle that lasts</h2>
                                <p class="mt-5">
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
    <section id="tm-icons" class="tm-icons bg-white">
        <div class="container">
            <div class="row">

                <div class="tm-icon-1 bg-white">
                    <div class="wow fadeInUp">
                        <div class="media">
                            <div class="media-body">
                                <img src="https://images.unsplash.com/photo-1555708982-8645ec9ce3cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80"
                                    alt="">
                            </div>
                            <div class="readmore-btn">
                                <h3> Effective care needs to be about more than nudges</h3>
                                <p>
                                    To win the battle against chronic conditions like hypertension, patients need
                                    behavioral, science-led care between in-person appointments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div id="services" class="care-plan section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading text-left">
                        <h4>Vitaway E-Clinic’s Hypertension program makes it simple to track and manage blood pressure, lose weight, and gain energy.</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="plans">
                <div class="plan-item">
                    <div class="icon">
                        <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                </div>
                <div class="plan-item">
                    <div class="img">
                        <img src="https://pic.onlinewebfonts.com/svg/img_418607.png" alt="">
                    </div>
                </div>
                <div class="service-middle-item">
                    <div class="icon"></div>
                    <h4>Vitaway’s Care Plan</h4>
                    <p>If this template is beneficial for your work, please support us <a rel="nofollow"
                            href="https://paypal.me/templatemo" target="_blank">a little via PayPal</a>. Thank you.</p>
                    <div class="text-button text-center">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="plan-item">
                    <div class="img">
                        <img src="https://d29fhpw069ctt2.cloudfront.net/icon/image/37948/preview.svg" alt="">
                    </div>
                </div>
                <div class="plan-item">
                    <div class="icon">
                        <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="proactive-support wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Members receive proactive support and science-backed intervention</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>
                                            Comprehensive care path and team
                                        </h3>
                                        <strong>
                                            Support provided to members by:
                                        </strong>
                                        <p>
                                            Health coaches and hypertension specialists
                                            Hypertension-specific peer groups and communities
                                            Virtual physician visits
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <h3>
                                            Data-driven care, from real people
                                        </h3>
                                        <p>
                                            Vitaway provides cellular-connected devices for progress tracking
                                            Receive evidence-based proactive guidance
                                            See best-in-class health outcomes
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <h3>
                                            Achievable plans for lasting outcomes
                                            Designed to drive results with:
                                        </h3>
                                        <p>
                                            Understanding of real motivations behind health choices
                                            Ongoing personal support with Smart, Measurable, Achievable,
                                            Relevant and Time-Bound (S.M.A.R.T) goal setting
                                            Introducing innovative methods to make lasting health behavior adjustments
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
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
