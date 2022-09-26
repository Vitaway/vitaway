@extends('Layouts.main')

    @section('title') resource - diabetes @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/hero.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/coaching.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/for-members.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/condition/more-resource.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/home/RemoteDocker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stop

    @section('content')
        <x-navbar />
        <x-healthresource.condition.hero />
        <x-healthresource.condition.coaching />
        <x-healthresource.condition.for-members />
        <x-healthresource.condition.more-resource />
        <x-home.health-care />
        <x-footer />
    @stop

    @section('scripts') @stop
