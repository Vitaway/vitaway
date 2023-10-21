@extends('layouts.guest')

@section('title') Food Groups | Hydration @stop

@section('metas')
<meta name="description" content="The body constantly loses fluid through breathing, sweating or going to the toilet and therefore this needs to be replaced. Aim to drink 6-8 glasses of fluid each day to help keep the body hydrated.">
<meta name="keywords" content="food groups, hydration, Vitaway, healthy eating, nutrition, staying hydrated">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/healthy-eating.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1568691422603-24041316b924?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Hydration
                        </h2>
                        <a href="/" aria-label="Scroll down" class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <section class="content-section">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="col-lg-8">
                    <div class="main-contents">
                        <div class="font-merri font-normal text-gray-900">
                            <p>
                                The body constantly loses fluid through breathing, sweating or going to the toilet and therefore this needs to be replaced. Aim to drink 6-8 glasses of fluid each day to help keep the body hydrated.
                            </p>
                            <p>
                                Water, lower fat milk and sugar free drinks, including tea and coffee all count. Choose sugar free options instead of sugary drinks.
                            </p>
                            <p>
                                Limit consumption of fruit juices and smoothies to no more than a combined total of 150ml per day, because they are high in sugar.
                            </p>
                            <p>Alcohol contains lots of calories, however the amount of calories an alcoholic drink contains depends on the type of alcohol, the amount served and what mixers are added. As an example, 1 pint of lager or a 175ml glass of wine contains around 135 calories while a 25ml shot of spirit contains around 56 calories.</p>
                            <p>To minimise the health risks associated with drinking alcohol, consumption should be limited to no more than 14 units per week for men and women. One unit is the same as one small single measure of spirits, while a 175ml glass of wine or a pint of standard strength lager or cider contains 2 units.</p>

                            <h2>Dehydration</h2>
                            <p>We get dehydrated when we don’t drink enough fluid. One of the first signs of dehydration is feeling thirsty but you may notice other signs:</p>
                            <ul>
                                <li>darker urine than usual or not passing much urine when you go to the toilet</li>
                                <li>headaches</li>
                                <li>feeling confused or irritable, or finding it hard to concentrate.</li>
                            </ul>
                            <p>Talk to your doctor if you have concerns about any of these symptoms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
