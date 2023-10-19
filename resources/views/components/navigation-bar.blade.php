<!-- Topbar Start -->
<div class="container-fluid py-3 border-bottom d-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3 font-patua font-normal" href=""><i class="bi bi-telephone me-2"></i>+250 787 906 391</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>info@vitaway.org</a>

                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('about') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>About Us</a>
                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('get.team') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>Our Team</a>
                    <span class="text-body top-header-about-links">|</span>
                    <a href="{{ route('faqs') }}" class="text-decoration-none top-header-about-links text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>FAQs</a>
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
                    <a class="text-body ps-2" target="__blank" href="https://www.youtube.com/@vitawaye-clinic6903">
                        <i class="fab fa-youtube"></i>
                    </a>
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
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('home') }}" @if(request()->routeIs('home') ?? false) class="active" @endif>Home</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('who-we-serve') }}" @if(request()->routeIs('who-we-serve') ?? false) class="active" @endif>Who we serve</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('indivitual') }}" @if(request()->routeIs('indivitual') ?? false) class="active" @endif>For indivitual</a></li>
                <li class="scroll-to-section font-patua font-normal"><a href="{{ route('blogs') }}" @if(request()->routeIs('blogs') ?? false) class="active" @endif>Blogs</a></li>
            </ul>

            <div class="mt-4 extra-links">
                <a href="{{ route('get.download') }}" class="py-3 text-base text-dark hover:text-primary font-patua font-normal" style="z-index: 999">Download</a>
                <a href="{{ route('get.pricing') }}" class="py-3 px-7 text-base text-dark hover:text-primary font-patua font-normal" style="z-index: 999">Pricing</a>
                <a href="{{ route('contact') }}" class="rounded-lg bg-[#3268b9] py-2.5 px-7 text-base text-white hover:bg-opacity-90 font-patua font-normal" style="z-index: 999">Contact</a>
            </div>

           <div><mobile-navbar /></div>

            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
