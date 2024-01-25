@extends('layouts.guest')

@section('title') Food Groups | Proteins @stop

@section('metas')
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="food groups, proteins, protein-rich foods, healthy diet, nutrition, Vitaway">
    <meta name="description" content="All foods made from seafood; meat, poultry, and eggs; beans, peas, and lentils; and nuts, seeds, and soy products are part of the Protein Foods Group. Beans, peas, and lentils are also part of the Vegetable Group.">
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
            <img src="https://images.unsplash.com/photo-1598514983318-2f64f8f4796c?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Did you know that adult males need to eat less red meat? Yet many children and some women may need to eat more?" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Did you know that adult males need to eat less red meat? Yet many children and some women may need to eat more?
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
                                All foods made from seafood; meat, poultry, and eggs; beans, peas, and lentils; and nuts, seeds, and soy products are part of the Protein Foods Group. Beans, peas, and lentils are also part of the Vegetable Group.
                            </p>

                            <h2>
                                Foods from this food group fall into 6 categories. <br> Examples include:
                            </h2>
                            <p>
                                <ol type="1">
                                    <li>Lean meats - Beef, lamb, veal, pork, kangaroo, lean (lower salt) sausages</li>
                                    <li>Poultry - Chicken, turkey, duck, emu, goose, bush birds</li>
                                    <li>Fish and seafood - Fish, prawns, crab, lobster, mussels, oysters, scallops, clams</li>
                                    <li>Eggs - Chicken eggs, duck eggs</li>
                                    <li>Nuts and seeds - Almonds, pine nuts, walnut, macadamia, hazelnut, cashew, peanut, nut spreads, pumpkin seeds, sesame seeds, sunflower seeds, brazil nuts</li>
                                    <li>Legumes/beans - All beans, lentils, chickpeas, split peas, tofu.</li>
                                </ol>
                                The Guidelines recommend that you eat 1-3 serves of foods from this food group a day, depending on your age.  During pregnancy, 3-4 serves a day are recommended.
                            </p>

                            <h2>
                                Daily Protein Foods Table
                            </h2>
                            <p>
                                These are general recommendations by age. Find
                                the right amount for you by getting your
                                <a href="https://www.myplate.gov/myplate-plan"><strong>MyPlate Plan</strong></a>.
                            </p>

                            <table class="usa-table" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" colspan="3">Daily Recommendations*
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><strong>Toddlers</strong></th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">12 to 23 months</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">½ to 1 cup</td>
                                    </tr>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2">
                                            <strong>Children</strong>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2-4 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 to 1½ cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">5-8 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1 to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2"><strong>Girls</strong>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">9-13 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">14-18 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="2"><strong>Boys</strong>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">9-13 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">14-18 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 to 2½ cups</td>
                                    </tr>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="3"><strong>Women</strong>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">19-30 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">31-59 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">60+ yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">1½ to 2 cups</td>
                                    </tr>
                                    <tr>
                                        <th class="border-t-2 border-gray-100 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" rowspan="3"><strong>Men</strong>
                                        </th>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">19-30 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 to 2½ cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">31-59 yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 to 2½ cups</td>
                                    </tr>
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">60+ yrs</td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2 cups</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h2>
                                Why is it important to eat proteins?
                            </h2>
                            <p>
                                Lean red meat provides a very good source of nutrients, however consumption of greater than 100/120g per day of red meat, which is more than double the recommended amount, is associated with an increased risk of colorectal cancer and renal cancer.  So remember to also eat other foods from this food group. Non meat options such as legumes provide many of the same nutrients as meats, poultry, fish and eggs. In fact, nuts and seeds may help reduce the risk of heart disease and are not associated with weight gain if total energy intake (kilojoules) is controlled.
                            </p>

                            <blockquote>
                                Protein Foods subgroups can help increase intake of important nutrients, including unsaturated fats, dietary fiber, and vitamin D and help to limit intake of sodium and saturated fats coming from processed meat and poultry.
                            </blockquote>

                            <h2>Nutrients of  protein group</h2>
                            <ul>
                                <li>Meat, poultry, seafood, beans,peans, and lentils, eggs,and nuts, seeds, and soy products supply many nutrients. These include protein, B vitamins ( niacin, thiamin, riboflavin, and B6), vitamin E, iron, zinc and magnesium. </li>
                                <li>Some food choices in the protein food group are high in saturated fat. These include fatty cuts of beef, pork, and lamb; regular ( 75% to 85% lean) ground beef; regular sausages,hot dogs, and bacon; some luncheon meats such as regular bologna and salami; and some poultry such as duck. To help keep saturated fat intake below 10% of daily calories, limit the amount of these foods you eat.</li>
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
