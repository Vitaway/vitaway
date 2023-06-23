@extends('layouts.guest')

@section('title') {{ $blog->title }} @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/single-page.css">
    <link rel="stylesheet" href="/css/pages/bash.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <section class="blog_area p_120 single-post-area">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="img/blog/news-blog.jpg" alt="" />
                        <a href="#">
                            <h2 class="title">{{ $blog->title }}</h2>
                        </a>
                        <div class="user_details">
                            <div class="float-left">
                                <div class=" flex items-center justify-center">
                                    <div class="">
                                        <img class="rounded-circle w-10 h-10" alt="avatar1" src="{{ $blog->user->avatar }}" />
                                    </div>
                                    <div class="media-body ml-3 ">
                                        <h5>{{ $blog->user->name }}</h5>
                                        <p class="text-gray-900 font-semibold">{{ $blog->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-img">
                            <img class="w-full" src="{{ $blog->blogMedia->graphic }}" alt="">
                        </div>
                        <div class="post-content text-gray-950">{!! $blog->blogContent->contents !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
