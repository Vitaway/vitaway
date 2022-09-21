@extends('Layouts.main')

    @section('title') For Indivitual @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/indivitual/hero.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/indivitual/better-health.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/indivitual/virtual-programs.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stop

    @section('content')
        <x-navbar />
        <x-indivitual.hero />
        <x-indivitual.eligible />
        <x-indivitual.better-health />
        <x-indivitual.virtual-programs />
        <x-footer />
    @stop

    @section('scripts') @stop
