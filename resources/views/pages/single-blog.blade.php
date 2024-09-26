@extends('layouts.guest')

@section('title') {{ $blog->title }} @stop

@section('metas')
    <!-- Primary Meta Tags -->
    <title>{{ $blog->title }} | vitaway</title>
    <meta name="title" content="{{ $blog->title }}">
    <meta name="description" content="{{ $blog->caption }}">
    <meta name="keywords" content="VITAWAY, BLOGS, E-CLINIC">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ env('APP_URL').'/blogs/'.$blog->slug }}">
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->caption }}">
    <meta property="og:image" content="{{ $blog->blogMedia->graphic }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ env('APP_URL').'/blogs/'.$blog->slug }}">
    <meta property="twitter:title" content="{{ $blog->title }}">
    <meta property="twitter:description" content="{{ $blog->caption }}">
    <meta property="twitter:image" content="{{ $blog->blogMedia->graphic }}">
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
                            <h2 class="title font-patua font-normal tracking-wide">{{ $blog->title }}</h2>
                        </a>
                        <div class="user_details">
                            <div class="float-left">
                                <div class="flex items-center justify-center">
                                    <div class="">
                                        <img class="rounded-circle w-10 h-10" alt="{{ $blog->user->name }}" src="{{ $blog->user->avatar }}" />
                                    </div>
                                    <div class="media-body ml-3 mt-3">
                                        <h5 class="font-patua font-normal text-md">{{ $blog->user->name }}</h5>
                                        <p class="text-gray-900 font-semibold">{{ $blog->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Share this doc --}}
                            <social-links
                                page_description="{{ $blog->caption }}"
                                page_title="{{ $blog->title }}"
                            />
                        </div>
                        <div class="post-img">
                            <img class="w-full" src="{{ $blog->blogMedia->graphic }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="post-content font-merri font-normal text-gray-950">{!! $blog->blogContent->contents !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
