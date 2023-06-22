@extends('Layouts.admin')

@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="text-white opacity-5" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">
                            Profile
                        </li>
                    </ol>
                    <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->

        {{--  --}}
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://i.pinimg.com/736x/25/4f/bb/254fbb68c99d9a1555c30ffc1fdff2f0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="/images/admin/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm" />
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                            <p class="mb-0 font-weight-bold text-sm">Vitaway Admin Member</p>
                            <div><a href="{{ route('dashboard') }}">Home</a> / <a href="{{ route('profile') }}">Preferences</a> / <a href="{{ route('adminLogout') }}">Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-1">Profile Preferences</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <form method="POST" action="{{ route('post.profile') }}">
                                    @csrf
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="nameInput" name="name" placeholder="Full-name" value="{{ Auth::user()->name ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" id="emailInput" name="email" placeholder="emailInput" value="{{ Auth::user()->email ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" id="twitterInput" name="twitter" placeholder="twitter url" value="{{ Auth::user()->socialMedia->twitter ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Facebook">Facebook</label>
                                        <input type="text" class="form-control" id="FacebookInput" name="facebook" placeholder="Facebook url" value="{{ Auth::user()->socialMedia->facebook ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Instagram">Instagram</label>
                                        <input type="text" class="form-control" id="InstagramInput" name="instagram" placeholder="Instagram url" value="{{ Auth::user()->socialMedia->instagram ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Youtube">Youtube</label>
                                        <input type="text" class="form-control" id="YoutubeInput" name="youtube" placeholder="Youtube url" value="{{ Auth::user()->socialMedia->youtube ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="LinkedIn">LinkedIn</label>
                                        <input type="text" class="form-control" id="LinkedInInput" name="linkedin" placeholder="LinkedIn url" value="{{ Auth::user()->socialMedia->linkedin ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <textarea class="form-control" id="bioInInput" name="bio" placeholder="Your short bio" value="{{ Auth::user()->socialMedia->bio ?? '' }}">
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer pt-3">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold"
                                    target="_blank">Manirabona Patience</a>
                                for a better web.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
