@extends('layouts.guest')

    @section('title') For Indivitual @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/about.css">
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
                            <h4>Why Vitaway?</h4>
                            <h2>Virtual care, <br /> uniquely yours? </h2>
                            <p>Vitaway is proving real transformative health changes
                                for your population are possible.
                                </p>
                            <div class="header-readme-button"><a href="#">Request a Demo</a></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="main-banner wow fadeIn bg-white" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                      <h4 class="text-4xl">
                          Why health industry professionals and employers
                          Choose Vitaway
                      </h4>
                      <img src="assets/images/heading-line-dec.png" alt="">
                    </div>
                  </div>
                </div>
            </div>
            <div class="container mt-5">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 align-self-center">
                      <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                          <div class="col-lg-12">
                            <h2>Billions of data points,
                                driving better outcomes </h2>
                            <p>Vitaway Insights Lab is constantly innovating care delivery to
                                help every member experience long- term health improvements.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="/images/lines.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="better-you wow fadeIn bg-white" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 align-self-center">
                      <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="row">
                          <div class="col-lg-12">
                            <h2>Better Gut
                                Better You</h2>
                            <h3 class="mb-2">Creating change that lasts</h3>
                            <p>Guiding you with customized nutritional recommendations for chronic health issues, insights based on Gut and knowledge
                                to make mindful food choices</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="https://images.unsplash.com/photo-1663777041964-0ff41b875419?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="rounded">
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
