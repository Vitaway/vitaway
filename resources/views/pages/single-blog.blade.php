@extends('layouts.guest')

@section('title') {{ $blog->title }} @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/single-page.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <section class="blog_area p_120 single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="img/blog/news-blog.jpg" alt="" />
                        <a href="#">
                            <h4>{{ $blog->title }}</h4>
                        </a>
                        <div class="user_details">
                            <div class="float-left">
                                <a href="#">{{ $blog->blogCategory->name}}</a>
                            </div>
                            <div class="float-right">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>{{ $blog->user->name }}</h5>
                                        <p>{{ $blog->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="img/blog/user-img.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>{!! $blog->blogContent->contents !!}</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="rounded-circle w-25 h-25" alt="avatar1" src="{{ $blog->user->avatar }}" />
                            <h4>{{ $blog->user->name }}</h4>
                            <p>Vitaway Member</p>

                            <div class="social_icon flex">
                                <a href="{{ socialMedias($blog->user->id)->facebook ?? '' }}"><img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" alt=""></a>
                                <a href="{{ socialMedias($blog->user->id)->instagram ?? '' }}"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt=""></a>
                                <a href="{{ socialMedias($blog->user->id)->youtube ?? '' }}"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt=""></a>
                                <a href="{{ socialMedias($blog->user->id)->linkedin ?? '' }}"><img src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png" alt=""></a>
                                <a href="{{ socialMedias($blog->user->id)->twitter ?? '' }}"><img src="https://cdn-icons-png.flaticon.com/512/3670/3670151.png" alt=""></a>
                            </div>

                            {{-- <p class="mt-3">{{ socialMedias($blog->user->id)->bio }}</p> --}}
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
