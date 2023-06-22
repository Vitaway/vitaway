@extends('layouts.guest')

@section('title') blogs @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/blog_page.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <div class="section mt-4">
        <div class="container">
            <div class="row g-5">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="post-entry d-block small-post-entry-v">
                            <div class="thumbnail">
                                <div class="h-[250px]" href="{{ route('single.blog', ['blog' => $blog->id]) }}">
                                    <img src="{{ $blog->blogMedia->graphic }}" alt="{{ $blog->title }}" class="w-full h-full">
                                </div>
                            </div>
                            <div class="content">
                                <div class="post-meta mb-1">
                                    <a href="{{ route('single.blog', ['blog' => $blog->id]) }}" class="category">Business</a>, <a href="{{ route('single.blog', ['blog' => $blog->id]) }}"
                                        class="category">Travel</a> —
                                    <span class="date">July 2, 2020</span>
                                </div>
                                <h2 class="heading mb-3">
                                    <a href="{{ route('single.blog', ['blog' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h2>
                                <p>{{ $blog->caption }}</p>
                                <a href="{{ route('single.blog', ['blog' => $blog->id]) }}" class="post-author d-flex align-items-center">
                                    <div class="text">
                                        <strong>Sergy Campbell</strong>
                                        <span>CEO and Founder</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <x-footer />
@endsection
