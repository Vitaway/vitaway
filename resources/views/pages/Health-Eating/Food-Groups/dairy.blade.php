@extends('layouts.guest')

@section('title') Food Groups | Vegetables @stop

@section('metas')
    <meta name="robots" content="index, follow">
    <meta name="description" content="Explore a wide variety of healthy vegetables at Vitaway. Discover the nutritional benefits and delicious recipes of vegetables from different food groups.">
    <meta name="keywords" content="food groups, vegetables, healthy vegetables, nutritional benefits, vegetable recipes, Vitaway">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/healthy-eating.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="canonical" href="{{ route('food-groups.dairy') }}">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://plus.unsplash.com/premium_photo-1683141058830-bf7feb63212c?auto=format&fit=crop&q=80&w=2944&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Dairy group" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            What is Dairy group
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
                                Dairy and dairy alternatives are good sources of protein and vitamins. They also contain calcium, which helps keep our bones healthy and strong. Semi-skimmed, skimmed, and 1% fat milk all contain less fat than full-fat milk, but still give you protein, vitamins and calcium.
                            </p>
                            <p>
                                Dairy-free milk alternatives include soya milk and nut milks – if you chose dairy-free milk then go for unsweetened varieties which have been fortified with calcium.
                            </p>

                            <h2>
                                How much should I eat from Dairy group
                            </h2>
                            <p >
                                The amount of dairy you need depends on your age, sex, height, weight, and level of physical activity. For women, the amount can also depend on whether you are pregnant or breastfeeding.
                            </p>
                            <p>
                               In general, 1 cup of milk, yogurt, or soy milk, or 1 ½ ounces of natural cheese can be considered as 1 cup from the Dairy Group. The table below lists specific amounts that count as 1 cup in the Dairy Group towards your daily recommended intake.
                            </p>


                            <h2>
                                Daily dairy tables
                            </h2>
                            <p>These are general recommendations by age</p>
                            <table class="table-auto items-center bg-transparent w-full border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Daily Recommendation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 font-patua font-normal">Toddlers</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">12 to 23 months</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1⅔ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2">Children</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2-3 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 to 2½ cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4-8 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2½ cups</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2">Girls</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">9-13 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">14-18 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2">Boys</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">9-13 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">14-18 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="3">Women</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">19-30 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">31-59 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">60+ yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="3">Men</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">19-30 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">31-59 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3 cups</td>
                                    </tr>
                                    <tr>
                                        <td>60+ yrs</td>
                                        <td>3 cups</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h4 class="mt-5">Cup of dairy table</h4>
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"> </th>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Amount That Counts as 1 Cup in the Dairy Group</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="5">Milk</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 cup milk</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 half-pint container milk</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">½ cup evaporated milk</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 cup calcium-fortified soy milk</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 half-pint container calcium-fortified soy milk</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">Yogurt</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 cup yogurt (dairy or fortified soy)</td>
                                    </tr>

                                    <tr>
                                        <td class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="7">Cheese</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 ½ ounces hard cheese (cheddar, mozzarella, Swiss, Parmesan)</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">⅓ cup shredded cheese</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 ounce processed cheese (American)</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">½ cup ricotta cheese</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 ¼ cup cottage cheese</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 ounces Queso fresco</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 slices Queso blanco</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2>
                                Health benefit of Dairy group
                            </h2>
                            <p >
                                Consuming dairy products provides health benefits — especially building and maintaining strong bones. Foods in the Dairy Group provide nutrients that are vital for health and maintenance of your body. These nutrients include calcium, potassium, vitamin D, and protein.
                            </p>
                            <p>
                                Calcium and vitamin D are important nutrients at any age. Intake of dairy products that contain these nutrients help to:
                            </p>
                            <ul>
                                <li>Improve bone health especially in children and adolescents, when bone mass is being built.</li>
                               <li>Promote bone health and prevent the onset of osteoporosis in adults, most of whom do not get enough of these nutrients.</li>
                            </ul>

                            <h2>Nutrients </h2>
                            <ul>
                                <li>The dairy group provides many nutrients including calcium, phosphorus, vitamin A, vitamin D ( in products fortified with vitamin D), riboflavin, vitamin B12, protein, potassium, zinc, choline, magnesium, and selenium</li>
                                <li>Calcium is used for building bones and teeth and in maintaining bone strength as you grow older. Dairy products are the main source of calcium in American diets.</li>
                                <li>Many people do not get enough potassium. Diets rich in potassium may help to maintain healthy blood pressure. Dairy products, especially dairy milk and yogurt, and fortified soy milk, provide potassium.</li>
                                <li>Vitamin D function in the body to maintain proper levels of calcium and phosphorous, there by helping to build and maintain bones. Milk and soy milk that are fortified with vitamin D are good sources of this nutrient. Other sources including some fish such as salmon , and other foods fortified with vitamin D </li>
                                <li>Milk products that are consumed in their low – fat or fat-free forms provide very little saturated fat. </li>
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
