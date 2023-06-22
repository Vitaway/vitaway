@extends('layouts.guest')

    @section('title') For Indivitual @stop

    @section('metas')
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/contact.css">
        <link rel="stylesheet" href="/css/footer.css">
    @stop

    @section('content')
        <x-navigation-bar />

        <div class="responsive-container-block bigContainer">
            <div class="responsive-container-block Container bottomContainer">
            <div class="ultimateImg">
                <img class="mainImg" src="https://images.unsplash.com/photo-1520857014576-2c4f4c972b57?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
                <div class="purpleBox">
                    <p class="purpleText">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus.
                    </p>
                    <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
                </div>
            </div>
            <div class="allText bottomText">
                <p class="text-blk headingText">
                Contact Us
                </p>
                <p class="text-blk subHeadingText">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <p class="text-blk description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut.
                </p>
                <a class="explore" href="https://api.whatsapp.com/send?phone=250787906391" target="__black">
                    Contact Us
                </a>
            </div>
            </div>
        </div>

        <x-footer />
    @stop

    @section('scripts') @stop

