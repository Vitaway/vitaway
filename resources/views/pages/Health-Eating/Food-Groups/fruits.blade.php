@extends('layouts.guest')

@section('title') Food Groups | Fruits and Vegetables @stop

@section('metas')
    <meta name="description" content="Explore the health benefits and variety of vegetables in different food groups with Vitaway. Learn about the nutritional value of vegetables for a balanced diet.">
    <meta name="keywords" content="vegetables, food groups, nutrition, health benefits, balanced diet, Vitaway">
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
            <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=2874&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="What is Fruit and vegetables?" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            What is Fruit and vegetables?
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            Vegetables and fruits are an important part of a healthy diet, and variety is as important as quantity.
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
                                No single fruit or vegetable provides all of the nutrients you need to be healthy. Eat plenty every day.
                            </p>

                            <h2>
                                How much should I eat ?
                            </h2>
                            <p>
                                You should eat at least five portions of fruit and vegetables a day. They contain important vitamins and minerals that help prevent disease as well as fibre which can lower cholesterol, keep the bowel healthy and help digestion.
                            </p>
                            <p>It’s easy to get your five a day if you spread your portions through the day. Try:</p>
                            <ul>
                                <li>adding chopped bananas to your cereal or toast at breakfast</li>
                                <li>enjoying a piece of fruit as a mid-morning snack</li>
                                <li>including a bowl of salad or vegetable soup with your lunch</li>
                                <li>snacking on a bowl of raw carrots, peppers and cucumbers mid-afternoon</li>
                                <li>adding a portion of veg to your evening meal.</li>
                            </ul>

                            <h2>
                                What counts as a portion of fruit and vegetables?
                            </h2>
                            <p>
                                <ol>
                                    <li>1 apple, banana, pear, orange or other similar sized fruit</li>
                                    <li>2plums or similar sized fruit</li>
                                    <li>Half a grapefruit or avocado</li>
                                    <li>1slice of large fruit like melon or pineapple</li>
                                    <li>3 heaped tablespoons of vegetables</li>
                                    <li>3 heaped tablespoons of fruit salad or stewed fruit</li>
                                    <li>A dessert bowl of salad</li>
                                </ol>
                                Fruit juice and smoothies contain a lot of sugar, so limit them to just 150ml a day – that’s around the same as a small glass. Dried fruit is also high in sugar so it’s best not to eat it in-between meals to help prevent tooth decay.
                            </p>

                            <h2>
                                Why is it important to eat the Fruit and Vegetables?
                            </h2>
                            <p>
                                A diet rich in vegetables and fruits can lower blood pressure, reduce the risk of heart disease and stroke, prevent some types of cancer, lower risk of eye and digestive problems, and have a positive effect upon blood sugar, which can help keep appetite in check. Eating non-starchy vegetables and fruits like apples, pears, and green leafy vegetables may even promote weight loss. Their low glycemic loads prevent blood sugar spikes that can increase hunger (1) .
                            </p>

                            <p>
                                Protein Foods subgroups can help increase intake of important nutrients, including unsaturated fats, dietary fiber, and vitamin D and help to limit intake of sodium and saturated fats coming from processed meat and poultry.
                            </p>

                            <h3>Nutrients</h3>
                            <ul>
                                <li>Most fruits are naturally low in fat, sodium, and calories. None have cholesterol </li>
                                <li>Fruits are sources of many essential nutrients that many people don’t get enough of including potassium, dietary fiber, vitamin C, and folate.</li>
                                <li>Diets rich in potassium may help to maintain healthy blood pressure. Fruit sources of potassium include bananas, prunes and prune juice, dried peaches and apricots, cantaloupe, honeydew melon, orange juice, sapote, jack fruit,guava, and kiwi.</li>
                                <li>Dietary fiber from fruitsm as part of an overall healthy diet, helps reduce blood cholesterol levels and  may lower risk of heart disease. Fiber is important for proper bowel function. Whole or cut-up fruits are sources of dietary fiber; fruit juices contain little or non fiber.</li>
                                <li>Vitamin C is important for growth and repair of all body tissues, helps heal cuts and wounds, and keeps teeth and gums healthy. Vitamin C helps your body absorb iron more easily. </li>
                            </ul>

                            <h3>References</h3>
                            <ul>
                                <li>
                                    1.Bertoia ML, Mukamal KJ, Cahill LE, Hou T, Ludwig DS, Mozaffarian D, Willett WC, Hu FB, Rimm EB. Changes in intake of fruits and vegetables and weight change in United States men and women followed for up to 24 years: analysis from three prospective cohort studies. PLoS medicine. 2015 Sep 22;12(9):e1001878.
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
