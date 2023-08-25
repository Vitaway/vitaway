@extends('layouts.guest')

    @section('title') For Indivitual @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/indivitual.css">
        <link rel="stylesheet" href="/css/footer.css">
    @stop

    @section('content')
        <x-navigation-bar />

        <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 align-self-center">
                      <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                          <div class="col-lg-12">
                            <h4 class="text-white">Vitaway for Individuals</h4>
                            <h2>Shift your mindset,
                                change your health </h2>
                            <p>Vitaway shows you a different way  to think about
                                your health so you can expercience lasting change </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-image rounded-[20px] wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="rounded-[20px]" src="https://images.unsplash.com/photo-1621525466547-4ac135e85f59?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>

         <style>
            .aligible-container{
                position: relative;
                height: 150px;
            }
            .aligible-panel{
                margin: 0px 20px;
                border-radius: 20px;
                position: absolute;
                top: -60px;
                right: 0;
                left: 0;
                background: #F5F5F5;
                color: black;
            }
            .aligible-panel h3{
                font-size: 20px !important;
                line-height: 30px;
                font-weight: 700;
            }
        </style>

        <div class="aligible-container relative p-10">
            <section class="p-5 aligible-panel shadow-md absolute -top-20 right-10 left-10 rounded-lg bg-white">
                    <div class="flex justify-between items-center">
                        <h2 class="mb-3 mb-md-0">
                            It takes only one minutes to see if
                            Vitaway is right for you and at no cost
                        </h2>
                        <div class="input-group news-input ml-4">
                            <div class="aligible-button cursor-pointer" type="button">
                                <a href="#">Am I eligible </a>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <!--Boxs section -->
        <style>
            .card-body .icon {
                margin-left: 0px;
                margin-bottom: 30px;
                background-repeat: no-repeat;
                width: 100px;
                height: 100px;
                transition: all 0.3s;
                border-radius: 50%;
                background-color: #f5f5f5;
                display: inline-block;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .card-body .icon img{
                width: 70px;
                height: 70px;
                object-fit: fill;
                transition: all 0.3s;
            }
        </style>
        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-400 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4436/4436450.png" alt="" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-3 font-bold text-xl">
                                    Small steps, long-term change
                                </h3>
                                <p class="card-text text-black font-medium">Vitaway helps you create healthy routines
                                    that last for years, not just weeks at a time</p>
                                <a href="#" class="btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-400 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/4288/4288923.png" alt="" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-3 font-bold text-xl">
                                    Find your Joy
                                </h3>
                                <p class="card-text text-black font-medium">
                                    Try new things you’ll actually enjoy,
                                    rather than avaiding foods you “can’t eat”
                                    or things you “ shouldn’t do”.
                                </p>
                                <a href="#" class="btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-white border-0">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="icon bg-indigo-400 rounded-full p-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1685/1685803.png" alt="" class="w-[100px]">
                                </div>
                                <h3 class="card-title mb-3 mt-3 font-bold text-xl">
                                    Virtual Care, uniquely yours
                                </h3>
                                <p class="card-text text-black font-medium">
                                    When life happens. Vitaway helps you stay
                                    on  track with a plan that constantly
                                    adapts to meet your needs.
                                </p>
                                <a href="#" class="btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="virtual-programs">
            <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="heading">
                      <h4>With multi-condition virtual care programs, Vitaway
                        provides everything you need to experience better health
                        </h4>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 align-self-center">
                      <div class="left-content show-up header-text">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="measurements">
                                <li><a href="#home">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4327/4327809.png" alt="">
                                     Prevention </a>
                                </li>
                                <li><a href="#news">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4349/4349215.png" alt="">
                                    Diabetes </a>
                                </li>
                                <li><a href="#contact">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4799/4799067.png" alt="">
                                    Hypertension </a>
                                </li>
                                <li><a href="#about">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/3997/3997942.png" alt="">
                                    Behavioral Health </a>
                                </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="https://res.cloudinary.com/dzhuhtn30/image/upload/v1671533558/vite-guest-imgs/louis-hansel--9CjvlbUGhY-unsplash_zxsnxn.jpg" alt="" class="rounded">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>

         <x-footer />
    @stop

    @section('scripts') @stop
