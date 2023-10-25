@extends('layouts.guest')

@section('title') Health Eating Well Guide @stop

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
            <img src="https://images.unsplash.com/photo-1565128401272-fcdd93cd3dc8?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Management Health Issue" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Management Health Issue
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            The proportions of food groups been updated to take into account
                            the new dietary recommendations for more fiber and less sugar.
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
                            <h2>A healthy diet</h2>
                            <p>
                                Eating a healthy diet means you’re more likely to keep your body healthy.
                                Otherwise, you risk various disorders including obesity, type 2 diabetes or
                                cancer.
                            </p>

                            <h2>Overweight and obesity</h2>
                            <p>
                                Obesity is being so overweight that it presents a serious threat to your health.
                                It’s caused by too many calories, and not enough physical activity.
                                Being overweight or obese increases the risk of developing heart disease, stroke,
                                high blood pressure, type 2 diabetes and certain types of cancers. Currently,
                                around two-thirds of adults in Scotland are either overweight or obese.
                            </p>

                            <h2>How to discover whether you’re overweight</h2>
                            <p>
                                If you’re worried about your weight, you can calculate your BMI (body mass index) using a BMI calculator.
                            </p>

                            <h2>How to achieve a healthy weight</h2>
                            <p>
                                You’ll be able to keep your weight healthy by following a healthy diet and
                                staying physically active. Don’t use crash diets, but make small, permanent
                                changes to the food you eat.
                            </p>

                            <h2>Illnesses related to diet</h2>
                            <p>
                                A poor diet – too much fat, not enough fibre and fruit and vegetables, or
                                drinking too much alcohol – can cause a number of illnesses.
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
                <img src="https://images.unsplash.com/photo-1631049123177-37356471f3dd?auto=format&fit=crop&q=80&w=2823&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Cancer" class="object-cover w-full lg:absolute h-80 lg:h-full" />
                <svg class="absolute top-0 right-0 hidden h-full text-white lg:inline-block" viewBox="0 0 20 104" fill="currentColor">
                    <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
                </svg>
            </div>
            <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
                <p class="mb-5">
                    <h3 class="font-patua font-normal text-lg leading-6 mb-2">Cancer</h3>
                    <p class="text-gray-800 leading-6 text-justify">
                        Cancer is the most common cause of death in Scotland.
                    </p>
                    <p class="text-gray-800 leading-6 text-justify">
                        Around 40% of cancers are preventable through lifestyle changes,
                        inlcuding eating a healthy diet, achiving and maintaining a healthy
                        weight, being active, not smoking and avoiding drinking more alcohol
                        than is recommended.
                    </p>

                    <h3 class="font-patua font-normal text-lg leading-6 mb-2 mt-3">Red meat and bowel cancer</h3>
                    <p class="text-gray-800 leading-6 text-justify">
                        Eating lots of red meat (such as beef, lamb and pork) and processed meats
                        (such as meat products such as sausages and ham) increases the risk of bowel cancer.
                        Adults should eat no more than 70g a day, which is the same as around 2 slices of roast
                        meat. You can find out more in our section on a healthy diet.
                    </p>

                    <h3 class="font-patua font-normal text-lg leading-6 mb-2 mt-3">Alcohol and cancer</h3>
                    <p class="text-gray-800 leading-6 text-justify">
                        Reducing the amount of alcohol you drink can help you prevent cancer.
                        Current recommendations are that consumption should be limited to no more than 14 units of alcohol per week for men and women.
                    </p>
                    <p class="text-gray-800 leading-6 text-justify">
                        One unit is the amount of pure alcohol in a 25ml measure of spirits, a third of a pint of beer, or half a 175ml glass of red wine.
                    </p>

                    <h3 class="font-patua font-normal text-lg leading-6 mb-2 mt-3">Body weight and cancer</h3>
                    <p class="text-gray-800 leading-6 text-justify">
                        Being overweight increases the risk of 13 different types of cancer,
                        including 2 of the most common types of cancer (breast and bowel cancers)
                        and 3 of the hardest to treat (pancreatic, oesophageal and gallbladder cancers).
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
                            <h2>Types of diabetes</h2>
                            <p>
                                There are two types of diabetes, Type 1 and Type 2.
                                Type 1 develops when cells in the pancreas that produce insulin are destroyed.
                                This type of diabetes is treated with insulin, a hormone that regulates the blood.
                            </p>

                            <h2>Type 2 diabetes</h2>
                            <p class="mt-2">
                                Type 2 diabetes occurs when the body doesn't produce enough of the hormone insulin to function properly,
                                or the body's cells don't react to it.  It can cause high blood glucose levels which can cause damage to
                                the body. If left untreated, type 2 diabetes can have serious consequences including kidney, eye and foot
                                damage, hearing impairment and heart and blood vessel disease which can result in limb amputations.
                                Being overweight or obese or drinking lots of sugary drinks increases the risk of developing type 2 diabetes.
                                The majority of type 2 diabetics in Scotland are overweight or obese.
                            </p>

                            <p class="mt-2">
                                Eating a healthy diet, achieving and maintaining a healthy weight and being active can reduce the risk of developing
                                type 2 diabetes. More information on diabetes and maintaining a healthy diet can be found on diabetes.org.
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
