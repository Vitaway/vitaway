@extends('layouts.guest')

@section('title') Life Stages | Pregnancy @stop

@section('metas')
    <meta name="robots" content="index, follow">
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
            <img src="https://images.unsplash.com/photo-1457342813143-a1ae27448a82?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Eating Health: Pregnancy" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Pregnancy
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            Making healthy food choices along with regular physical activity will help fuel your baby’s
                            growth and keep you healthy during pregnancy and while you are breastfeeding.
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
                            <p>
                                Eating well during pregancy and while breastfeeding has health benefits for you and your baby.
                            </p>
                            <p>
                                VITAWAY E-Clinic is a great source of information if you are pregnant, trying to get pregnant or breastfeeding. They have lots of tips to give your child a great start in life by offering a healthy balanced diet which will support their developing bodies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-3">
        <div class="flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded shadow-sm lg:flex-row sm:mx-auto">
            <div class="relative lg:w-1/2">
                <img src="https://images.unsplash.com/photo-1454334281609-87a89762912c?auto=format&fit=crop&q=80&w=2785&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Eat Healthy" class="object-cover w-full lg:absolute h-80 lg:h-full" />
                <svg class="absolute top-0 right-0 hidden h-full text-white lg:inline-block" viewBox="0 0 20 104" fill="currentColor">
                    <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
                </svg>
            </div>
            <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
                <p class="mb-5">
                    <h3 class="font-patua font-normal text-lg leading-6 mb-2">Eat Healthy</h3>
                    <p class="text-gray-800 leading-6 text-justify">
                        Fruits, vegetables, whole grains, protein foods, and fat-free or low-fat dairy products are healthy choices.
                        Include a variety of protein foods such as seafood, lean meats, poultry, beans, peas, lentils, nuts, and eggs.
                        Limit foods and beverages higher in added sugars, saturated fat, and sodium. Eating seafood during pregnancy may
                        benefit your baby's growth and is a healthy protein source for you during both pregnancy and while breastfeeding.
                        Choose options lower in methylmercury, like cod, salmon, tilapia, or herring.
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
                            <h2>Make Safe Choices</h2>
                            <ul>
                                <li class="mb-3">
                                    <b>Food Safety During Pregnancy</b> <br>
                                    You and your unborn child are more susceptible to the effects of foodborne illnesses. Take special care to keep foods safe and to avoid certain foods that increase your risk.
                                    <ul class="ml-4">
                                        <li>
                                            During pregnancy, make sure that seafood, meat, poultry, or eggs have been cooked to the recommended safe minimum internal temperatures.
                                        </li>
                                        <li>oAvoid consuming unpasteurized (raw) juice or milk, raw sprouts, or some soft cheeses made from unpasteurized milk.</li>
                                        <li>Reheat deli and luncheon meats and hot dogs to steaming hot or 165°F.</li>
                                        <li>More information is available at CDC's Maternal Diet webpage.</li>
                                    </ul>
                                </li>
                                <li class="mb-3">
                                    <b>Food Allergies in Your Child</b> <br>
                                    When making food and beverage choices, unless you are advised by your healthcare provider, you do not need to restrict your choices during pregnancy or while breastfeeding to prevent food allergies from developing in your child.
                                </li>
                                <li class="mb-3">
                                    <b>Alcohol</b> <br>
                                    Pregnant women and women who may become pregnant should not drink alcohol. Drinks containing alcohol include beer, wine, liquor, mixed drinks, malt beverages, etc. No amount of alcohol is safe for your baby when you are pregnant. Talk with your doctor before considering drinking alcohol while you are breastfeeding. No alcohol consumption is the safest option.
                                </li>
                                <li class="mb-3">
                                    <b>Caffeine</b> <br>
                                    Caffeine is found in coffee, tea, and soda. Consult your healthcare provider for advice about consuming caffeine during pregnancy and while you are breastfeeding.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@stop

@section('scripts') @stop
