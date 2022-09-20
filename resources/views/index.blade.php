@extends('Layouts.main')

    @section('title') Home @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/Hero.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/RemoteDocker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/Timeline.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/EatingHealth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/Blogs.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stop

    @section('content')
        <x-navbar />
        <x-home.hero />
        <x-home.timeline />
        <x-home.remote-docker />
        <x-home.health-care />
        <x-home.eating-health />
        <x-home.blogs />
        <x-footer />
    @stop

    @section('scripts') @stop
