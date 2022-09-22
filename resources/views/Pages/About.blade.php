@extends('Layouts.main')

    @section('title') For Indivitual @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/indivitual/hero.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/about/better-you.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/about/partners.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stop

    @section('content')
        <x-navbar />
        <x-about.hero />
        <x-about.choose />
        <x-about.better-you />
        <x-about.partners />
        <x-footer />
    @stop

    @section('scripts') @stop
