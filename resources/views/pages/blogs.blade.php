@extends('layouts.guest')

@section('title') blogs @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <div class="section py-20">
        <div class="container">
            <div class="row g-5">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="post-entry d-block small-post-entry-v">
                            <div class="thumbnail">
                                <div class="h-[250px] rounded-lg" href="{{ route('single.blog', ['blog' => $blog->id]) }}">
                                    <img src="{{ $blog->blogMedia->graphic }}" alt="{{ $blog->title }}" class="w-full h-full rounded-lg">
                                </div>
                            </div>
                            <div class="post-content mt-4">
                                <div class="post-meta mb-1">
                                    <a href="{{ route('single.blog', ['blog' => $blog->id]) }}" class="category">Business</a>, <a href="{{ route('single.blog', ['blog' => $blog->id]) }}"
                                        class="category">Travel</a> —
                                    <span class="date">July 2, 2020</span>
                                </div>
                                <h2 class="heading mb-3">
                                    <a class="font-patua font-normal text-2xl" href="{{ route('single.blog', ['blog' => $blog->id]) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="trancate block line-clamp-3 font-merri font-normal leading-7 text-gray-600" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{ $blog->caption }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <x-footer />
@endsection
