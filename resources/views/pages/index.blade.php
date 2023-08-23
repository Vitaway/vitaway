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
                            <h2>Accessible Virtual Care for Everyone's Well-being</h2>
                            <p>Experience comprehensive virtual care that's accessible to all, prioritizing your holistic well-being.</p>
                        </div>
                        <div class="col-lg-12 more-detail-buttons ">
                            <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
                                <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                Sign in with Twitter
                            </button>
                            <button type="button" class="text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                <svg class="w-4 h-4 mr-2 -ml-1 text-[#626890]" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="ethereum" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z"></path></svg>
                                Pay with Ethereum
                            </button>
                        </div>

                      <div class="clients pt-16">
                        <h6 class="mb-2 flex items-center text-xs font-normal text-body-color">
                          Some Of Our Clients
                          <span class="ml-2 inline-block h-[1px] w-8 bg-body-color"></span>
                        </h6>
                        <div class="flex items-center">
                          <div class="mr-4 w-full py-3">
                            <img src="/images/brands/ayroui.svg" alt="ayroui" />
                          </div>
                          <div class="mr-4 w-full py-3">
                            <img
                              src="/images/brands/graygrids.svg"
                              alt="graygrids"
                            />
                          </div>
                          <div class="mr-4 w-full py-3">
                            <img src="/images/brands/uideck.svg" alt="uideck" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 relative mt-4">
                    <div class="mx-auto ml-5 z-20">
                        <div class="absolute left-40">
                            <div class="relative rotate-12 translate-x-10 pt-2 border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                                <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                    <img src="/images/categories.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                                    <img src="/images/categories.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="relative border-gray-800 pt-2 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                            <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                            <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                <img src="/images/categories.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                                <img src="/images/categories.png" class="hidden dark:block w-[272px] h-[572px]" alt="">
                            </div>
                        </div>
                    </div>

                    <span class="absolute right-0 bottom-8 z-10">
                        <svg
                        width="93"
                        height="93"
                        viewBox="0 0 93 93"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                        </svg>
                    </span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- ====== Services Section Start -->
    <section class="pt-15 pb-5 lg:pt-[120px] lg:pb-[10px]">
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
              <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
                    Remote <em>Doctor</em> Consultation
                </h2>
                <p class="text-base text-body-color">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
                </p>
              </div>
            </div>
          </div>

          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
              <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                  </svg>
                </div>
                <h4 class="mb-3 text-xl font-semibold text-dark">
                  Diabetes
                </h4>
                <p class="text-body-color">
                    Simply Diabetes management with quick checks and a Proper...
                </p>
              </div>
            </div>

            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                  <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                    </svg>
                  </div>
                  <h4 class="mb-3 text-xl font-semibold text-dark">
                    Hypertension
                  </h4>
                  <p class="text-body-color">
                    Track Your health trends to work toward reaching your health...
                  </p>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                  <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                    </svg>
                  </div>
                  <h4 class="mb-3 text-xl font-semibold text-dark">
                    Weight Management
                  </h4>
                  <p class="text-body-color">
                    Find tools and strategies to help healthy weight loss.
                  </p>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                  <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-[#3268b9]">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z" fill="white"/>
                    </svg>
                  </div>
                  <h4 class="mb-3 text-xl font-semibold text-dark">
                    Mental Health
                  </h4>
                  <p class="text-body-color">we care about your mental health.</p>
                </div>
            </div>
          </div>
        </div>
    </section>
    <!-- ====== Services Section End -->

    <div class="wellness">
        <div class="wellness-container grid grid-cols-2 gap-3">

            <div class="welness-item">
                <div class="welness-description">
                    <h2>Nutrition consultation</h2>
                    <p>Everyone’s nutritional goals are different, whether it’s losing weight,
                        building fitness or just eating better. That’s why we take a comprehensive,
                        multidisciplinary approach to your care, working with you to overcome your
                        challenges and live a healthier, more active life.</p>
                    <div class="mt-5">
                        <a href="{{ route('contact') }}" class="get-in-touch">Get in Touch</a>
                    </div>
                </div>
                <div class="welness-img">
                    <img src="https://static.wixstatic.com/media/82df8c_80b4b77d2d9048978a8e10f562dc1f5d~mv2.jpg/v1/fill/w_352,h_412,al_c,lg_1,q_80,enc_auto/plan.jpg" alt="">
                </div>
            </div>
            <div class="welness-item">
                <div class="welness-description">
                    <h2>Get Personalized wellness Plan</h2>
                    <p>Our nutrition services team includes doctors,
                        wellness practitioners and nutritionists.
                        These specialists work together with you
                        to help you create a realistic, achievable
                        plan for changing old habits in order to
                        accomplish your nutrition goals.</p>

                    <div class="mt-5">
                        <a href="{{ route('contact') }}" class="get-in-touch">Get in Touch</a>
                    </div>
                </div>
                <div class="welness-img">
                    <img src="https://static.wixstatic.com/media/82df8c_83245a7d38a944b9b8cd1cc750392345~mv2.png/v1/fill/w_352,h_412,al_c,lg_1,q_85,enc_auto/wellness.png" alt="">
                </div>
            </div>

        </div>
    </div>

    {{-- Healcare service section --}}
    <div id="services" class="services section mt-7">
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
