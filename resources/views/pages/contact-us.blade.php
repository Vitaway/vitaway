@extends('layouts.guest')

    @section('title') Contact us @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/contact.css">
        <link rel="stylesheet" href="/css/footer.css">
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
            }

            .contact-form:before {
                position: absolute;
                content: '';
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                border-radius: 6px;
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

            h2.contact-title {
                font-size: 35px;
                font-weight: 600;
                color: #fff;
                margin-bottom: 30px;
            }

            .contact-info p {
                color: #ececec;
            }

            ul.contact-info {
                margin-top: 30px;
            }

            ul.contact-info li {
                margin-bottom: 22px;
            }



            ul.contact-info span {
                font-size: 20px;
                line-height: 26px;
            }
            ul.contact-info li {
                display: flex;
                width: 100%;
            }

            .info-left {
                width: 10%;
            }

            .info-left i {
                width: 30px;
                height: 30px;
                line-height: 30px;
                font-size: 30px;
                color: #ffffff;
            }

            .info-right h4 {
                color: #fff;
                font-size: 18px;
            }
            .contact-page .info-left i{
            color: #FE846F;
            }
            .btn {
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
            .btn-big {
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

        {{-- <div class="responsive-container-block bigContainer">
            <div class="responsive-container-block Container bottomContainer">
            <div class="ultimateImg">
                <img class="mainImg" src="https://images.unsplash.com/photo-1520857014576-2c4f4c972b57?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
                <div class="purpleBox">
                    <p class="purpleText">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus.
                    </p>
                    <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
                </div>
            </div>
            <div class="allText bottomText">
                <p class="text-blk headingText">
                Contact Us
                </p>
                <p class="text-blk subHeadingText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <p class="text-blk description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut.
                </p>
                <a class="explore" href="https://api.whatsapp.com/send?phone=250787906391" target="__black">
                    Contact Us
                </a>
            </div>
            </div>
        </div> --}}

        <section class="section-bg" style="background-image: url(https://images.unsplash.com/photo-1485848395967-65dff62dc35b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1769&q=80);"  data-scroll-index="7">
            <div class="overlay pt-100 pb-100 ">
              <div class="container pt-16">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="contact-info">
                            <h2 class="contact-title">
                                Connect with us</h2>
                            <p class="font-semibold">Learn simple steps you can take right now to improve your health and wellness.
                                Our bespoke meal plans are curated based on your body’s needs, food sensitivities and reactions, and the goal you want to achieve.
                                </p>
                            <ul class="contact-info">
                                <li>
                                    <div class="info-left">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="info-right">
                                        <h4>+250787279560</h4>
                                    </div>
                                </li>
                                <li>
                                <div class="info-left">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="info-right">
                                    <h4> vitawayeclinic@gmail.com </h4>
                                </div>
                                </li>
                                <li>
                                <div class="info-left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-right">
                                    <h4>Kigali- Rwanda </h4>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center bg-white">
                        <div class="contact-form bg-white">
                            <!--Contact Form-->
                            <form method='POST'>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="forms-input">
                                            <input type="text" name="name" class="input-controll" id="first-name" placeholder="Enter Your Name *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="forms-input">
                                            <input type="email" name="email" class="input-controll" id="email" placeholder="Enter Your Email *" required="required">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="forms-input">
                                            <textarea rows="4" name="message" class="input-controll" id="description" placeholder="Enter Your Message *" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <!--contact button-->
                                        <button  class="btn-big btn btn-bg">
                                            Send Us <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
             </div>
            </div>
        </section>

        <x-footer />
    @stop

    @section('scripts') @stop

