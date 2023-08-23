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
              <li class="scroll-to-section"><a href="{{ route('home') }}" @if(request()->routeIs('home') ?? false) class="active" @endif>Home</a></li>
              <li class="scroll-to-section"><a href="{{ route('who-we-serve') }}" @if(request()->routeIs('who-we-serve') ?? false) class="active" @endif>Who we serve</a></li>
              <li class="scroll-to-section"><a href="{{ route('indivitual') }}" @if(request()->routeIs('indivitual') ?? false) class="active" @endif>For indivitual</a></li>
              <li class="scroll-to-section"><a href="{{ route('blogs') }}" @if(request()->routeIs('blogs') ?? false) class="active" @endif>Blogs</a></li>
              <li class="scroll-to-section"><a href="{{ route('about') }}" @if(request()->routeIs('about') ?? false) class="active" @endif>About</a></li>
              <li class="scroll-to-section"><a href="{{ route('contact') }}" @if(request()->routeIs('contact') ?? false) class="active" @endif>Contact</a></li>
            </ul>

            <div class="mt-4">
                <a href="javascript:void(0)" class="py-3 px-7 text-base font-medium text-dark hover:text-primary">
                  Login
                </a>
                <a href="javascript:void(0)" class="rounded-lg bg-[#3268b9] py-2.5 px-7 text-base font-medium text-white hover:bg-opacity-90">
                  Sign Up
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
