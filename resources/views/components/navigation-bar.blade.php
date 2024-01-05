<!-- Topbar Start -->
<div class="container-fluid py-3 border-bottom d-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a href="https://wa.me/250787279560" target="__blank" class="text-decoration-none text-body pe-3 font-patua font-normal" href=""><i class="bi bi-telephone me-2"></i>+250 787 279 560</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3 font-patua font-normal" target="__blank" href="mailto:info@vitaway.org"><i class="bi bi-envelope me-2"></i>info@vitaway.org</a>

                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('about') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>{{ __('lang.about-us') }}</a>
                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('get.team') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>{{ __('lang.our-team') }}</a>
                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('faqs') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>{{ __('lang.faqs') }}</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end top-header-social-links">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-2" target="__blank" href="https://www.facebook.com/VitawayEClinic/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-2" target="__blank" href="https://twitter.com/VitawayCare">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-2" target="__blank" href="https://www.linkedin.com/in/emmanuel-hakuzimana-123309188/?originalSubdomain=rw">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-2" target="__blank" href="https://www.instagram.com/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body ps-2 mr-3" target="__blank" href="https://www.youtube.com/@vitawaye-clinic6903">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <span class="text-body top-header-about-links">|</span>
                    <form action="{{ route('locale') }}" method="POST" id="localeForm">
                        @csrf
                        <div class="flex items-center mx-2">
                            <span class="font-patua font-medium">Eng</span>
                            <label class="relative inline-flex cursor-pointer items-center mx-2">
                                @if(session()->has('locale') && session('locale') == 'kin')
                                    <input id="switch-3" name="locale" type="checkbox" class="peer sr-only" onchange="changeLocale(this)" checked />
                                @else
                                    <input id="switch-3" name="locale" type="checkbox" class="peer sr-only" onchange="changeLocale(this)" />
                                @endif

                                <label for="switch-3" class="hidden"></label>
                                <div class="peer h-4 w-11 rounded border bg-slate-200 after:absolute after:-top-1 after:left-0 after:h-6 after:w-6 after:rounded-md after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-[#3268b9] peer-checked:after:translate-x-full peer-focus:ring-green-300"></div>
                            </label>
                            <span class="font-patua font-medium">Kiny</span>
                        </div>
                    </form>
                    <script>
                        function changeLocale(obj) {
                            const localeForm = document.getElementById('localeForm');
                            localeForm.submit();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky flex justify-center wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="header-inner">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center justify-content-center">
                <x-application-logo />
            </a>

            <ul class="nav">
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('home') }}" @if(request()->routeIs('home') ?? false) class="active" @endif>{{ __('lang.home') }}</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('who-we-serve') }}" @if(request()->routeIs('who-we-serve') ?? false) class="active" @endif>{{ __('lang.who-we-serve') }}</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('indivitual') }}" @if(request()->routeIs('indivitual') ?? false) class="active" @endif>{{ __('lang.for-indivitual') }}</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('blogs') }}" @if(request()->routeIs('blogs') ?? false) class="active" @endif>{{ __('lang.blogs') }}</a></li>
            </ul>

            <div class="mt-4 extra-links">
                <a href="{{ route('get.download') }}" class="py-3 text-base text-dark hover:text-primary font-patua font-normal" style="z-index: 999">{{ __('lang.download') }}</a>
                <a href="{{ route('get.pricing') }}" class="py-3 px-7 text-base text-dark hover:text-primary font-patua font-normal" style="z-index: 999">{{ __('lang.pricing') }}</a>
                <a href="{{ route('contact') }}" class="rounded-lg bg-[#3268b9] py-2.5 px-7 text-base text-white hover:bg-opacity-90 font-patua font-normal" style="z-index: 999">{{ __('lang.contact') }}</a>
            </div>

           <div>
                <mobile-navbar
                    home="{{ __('lang.home') }}"
                    about_us="{{ __('lang.about-us') }}"
                    our_team="{{ __('lang.our-team') }}"
                    faqs="{{ __('lang.faqs') }}"
                    who_we_serve="{{ __('lang.who-we-serve') }}"
                    for_indivitual="{{ __('lang.for-indivitual') }}"
                    download="{{ __('lang.download') }}"
                    pricing="{{ __('lang.pricing') }}"
                    contact="{{ __('lang.contact') }}"
                    blogs="{{ __('lang.blogs') }}"
                />
            </div>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
