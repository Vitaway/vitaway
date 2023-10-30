@extends('layouts.guest')

@section('title') Food Groups | My Plate @stop

@section('metas')
    <meta name="keywords" content="food groups, My Plate, nutrition, healthy eating, balanced diet, Vitaway">
    <meta name="description" content="There is strong evidence that for each serve of vegetables eaten each day the risk of coronary heart disease is reduced even further!  Also, by eating vegetables, especially colourful vegetables, there is a reduced risk of stroke and weight gain.">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/healthy-eating.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="canonical" href="{{ route('food-groups.myplate') }}">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1514843319620-4f042827c481?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="My plate" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            My plate
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
                            <h2>What is food groups </h2>
                            <p>A balanced diet gives your body the nutrients it needs to function correctly. To meet the nutrient requirements essential for good health, you need to eat a variety from each of the five food groups daily, in the recommended amounts.  It is not necessary to eat from each food group at every meal. In fact, in some instances, you only need to eat some of the foods in each food group a couple of times a week</p>
                            <p class="mt-5">The <b>dietary Guidelines for American</b> and <b>Australian Guide</b> make up these five food groups. Foods are grouped together because they provide similar amounts of the key nutrients of that food group.  For example, the key nutrients of the milk, yogurt, cheese and alternatives food group include calcium and protein, while the fruit group is a good source of vitamins, especially vitamin C.</p>
                            <p>
                                A healthy eating routine is important at every stage of life and can have positive effects that add up over time. It’s important to eat a variety of fruits, vegetables, grains, protein foods, and dairy and fortified soy alternatives. When deciding what to eat or drink, choose options that are full of nutrients. Make every bite count.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
