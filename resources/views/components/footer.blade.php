<!-- Footer Start -->
<div class="container-fluid bg-[#1D2A4D] text-light py-5">
    <div class="container py-5 font-patua">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4 font-patua text-gray-100">{{ __('footer.in-touch') }}</h4>
                <p class="mb-4 font-patua text-gray-100 leading-6">
                    Multi-disciplinary health practices, with a mission of equipping people, especially young ones
                    to use digital technology in raising NCDs awareness and nutritional education.
                </p>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-uppercase border-bottom border-5 border-secondary mb-4 font-patua text-gray-100">{{ __('footer.links') }}</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2 font-patua font-normal" href="{{ route('home') }}"><i class="fa fa-angle-right me-2"></i>{{ __('lang.home') }}</a>
                    <a class="text-light mb-2 font-patua font-normal" href="{{ route('about') }}"><i class="fa fa-angle-right me-2"></i>{{ __('lang.about-us') }}</a>
                    <a class="text-light mb-2 font-patua font-normal" href="{{ route('get.team') }}"><i class="fa fa-angle-right me-2"></i>{{ __('lang.our-team') }}</a>
                    <a class="text-light mb-2 font-patua font-normal" href="{{ route('blogs') }}"><i class="fa fa-angle-right me-2"></i>{{ __('lang.blogs') }}</a>
                    <a class="text-light font-patua font-normal" href="{{ route('contact') }}"><i class="fa fa-angle-right me-2"></i>{{ __('lang.contact') }}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block font-patua text-gray-100 text-uppercase border-bottom border-5 border-secondary mb-4">{{ __('footer.contacts') }}</h4>
                <p class="mb-1 font-patua font-normal text-gray-100"><i class="fa fa-map-marker-alt font-patua font-normal text-gray-100 me-3"></i>1 KN 78 St, Kigali, Rwanda</p>
                <p class="mb-1 font-patua font-normal text-gray-100"><i class="fa fa-envelope font-patua font-normal text-gray-100 me-3"></i>info@vitaway.org</p>
                <p class="mb-0 font-patua font-normal text-gray-100"><i class="fa fa-phone-alt font-patua font-normal text-gray-100 me-3"></i>+250 787 279 560</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block font-patua text-gray-100 text-uppercase border-bottom border-5 border-secondary mb-4">{{ __('footer.newsletter') }}</h4>
                <form action="">
                    <div><subscriber-form /></div>
                </form>
                <h6 class="font-patua text-gray-100 text-uppercase mt-4 mb-3">{{ __('footer.follow-us') }}</h6>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="__blank" href="https://twitter.com/VitawayCare"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="__blank" href="https://www.facebook.com/VitawayEClinic/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" target="__blank" href="https://www.linkedin.com/in/emmanuel-hakuzimana-123309188/?originalSubdomain=rw"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" target="__blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-[#1D2A4D] text-light border-top border-[#354F8E] py-4">
    <div class="container font-patua font-medium">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start font-patua font-normal">
                <p class="mb-md-0 text-gray-100">&copy; <a class="font-patua font-normal text-gray-100" href="#">Vitaway</a>. {{ __('footer.right-reserved') }}</p>
            </div>
            <div class="col-md-6 text-center text-md-end font-patua font-normal">
                <p class="mb-0 text-gray-100">{{ __('footer.designed-by') }}<a class="font-patua font-normal text-gray-100" href="https://htmlcodex.com">Vitaway Team</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
