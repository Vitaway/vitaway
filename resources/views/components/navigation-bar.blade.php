<!-- Topbar Start -->
<div class="container-fluid py-3 border-bottom d-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3 font-patua font-normal" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-decoration-none text-body px-3 font-patua font-normal" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body ps-2" href="">
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

            <div class="mt-4">
                <a href="{{ route('contact') }}" class="py-3 px-7 text-base text-dark hover:text-primary font-patua font-normal">
                  About Us
                </a>
                <a href="{{ route('contact') }}" class="rounded-lg bg-[#3268b9] py-2.5 px-7 text-base text-white hover:bg-opacity-90 font-patua font-normal">
                  Contact
                </a>
            </div>

            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
