@extends('layouts.guest')

@section('title') Life Stages | Adult @stop

@section('metas')
    <meta name="description" content="">
    <meta name="keywords" content="">
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
            <img src="https://images.unsplash.com/photo-1534954553104-88cb75be7648?auto=format&fit=crop&q=80&w=2960&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Managing a healthy weight" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Managing a healthy weight
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            The proportions of food groups been updated to take into account the new dietary recommendations for more fiber and less sugar.
                        </p>
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
                            <h2>Managing a healthy weight</h2>
                            <p>Being overweight can make it harder to get around and increase your risk of heart disease and type 2 diabetes. Equally, any sudden loss of weight can also indicate a health problem. Talk to your GP if you’re worried about your weight.</p>
                            <p>The Eatwell Guide has lots of information about how to have a healthy, balanced diet. If you have any special dietary requirements or medical needs, talk to your GP or a registered dietician about adapting the Eatwell guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-3">
        <div class="flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded shadow-sm lg:flex-row sm:mx-auto">
            <div class="relative lg:w-1/2">
                <img src="https://images.unsplash.com/photo-1675179181234-aa537607528b?auto=format&fit=crop&q=80&w=2926&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Getting enough to drink" class="object-cover w-full lg:absolute h-80 lg:h-full" />
                <svg class="absolute top-0 right-0 hidden h-full text-white lg:inline-block" viewBox="0 0 20 104" fill="currentColor">
                    <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
                </svg>
            </div>
            <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
                <p class="mb-5">
                    <h3 class="font-patua font-normal text-lg leading-6 mb-2">Getting enough to drink</h3>
                    <p class="text-gray-800 leading-6 text-justify">Even if you don’t feel thirsty, your body needs water. Signs of dehydration include:</p>
                    <ul>
                        <li>darker urine than usual or not passing much urine when you go to the toilet</li>
                        <li>headaches</li>
                        <li>feeling confused or irritable, or finding it hard to concentrate.</li>
                    </ul>

                    <h2 class="font-patua font-normal text-lg leading-6 mb-2 mt-4">Losing your appetite</h2>
                    <p class="text-gray-800 leading-6 text-justify">
                        As we get older, our appetite can decrease. Even if you don’t feel like eating,
                        it’s still important to have a healthy balanced diet to get all the energy and
                        nutrients you need.
                    </p>
                    <p class="text-gray-800 leading-6 text-justi mt-2">
                        If you are underweight and your appetite has decreased, try not to fill up on
                        foods that are high in saturated fat or sugar like cakes, biscuits and sugary
                        drinks.
                    </p>
                </p>
            </div>
        </div>
    </div>

    <section class="content-section">
        <div class="container">
            <div class="flex items-center justify-center">
                <div class="col-lg-8">
                    <div class="main-contents">
                        <div class="font-merri font-normal text-gray-900">
                            <h2>Staying active</h2>
                            <p>Physical activity helps you stay healthy, mobile and independent.
                                It also helps keep the heart healthy and lowers the risk of heart disease and stroke.
                                Keeping active can also improve your appetite.</p>
                            <p>
                                If you’re underweight, have mobility problems or a disability talk to your GP or
                                practice nurse before starting any physical activity.
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
