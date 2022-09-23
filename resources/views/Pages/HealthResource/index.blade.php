@extends('Layouts.main')

    @section('title') resource - home @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/healthresource/Content.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    @stop

    @section('content')
        <x-navbar />
        <x-healthresource.navbar />
        <x-healthresource.content />
        <x-footer />
    @stop

    @section('scripts') @stop
