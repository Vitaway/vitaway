@extends('layouts.guest')

@section('title') Food Groups | Grains Starch food @stop

@section('metas')
    <meta name="description" content="Explore the grains and starch food group on Vitaway. Learn about the importance of grains in a balanced diet. Discover our nutritious products.">
    <meta name="keywords" content="food groups, grains, starch food, balanced diet, nutritious products, Vitaway">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/pages/healthy-eating.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="canonical" href="{{ route('food-groups.grains') }}">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative">
            <img src="https://plus.unsplash.com/premium_photo-1667546569341-1136d35ab1fa?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="absolute inset-0 object-cover w-full h-full" style="-o-object-fit: cover;object-fit: cover;transition: transform 0.3s ease;aspect-ratio: 4/3;" alt="Grains Starch food" />

            <div class="relative bg-opacity-75 bg-gray-900/60">
                <div class="absolute inset-x-0 bottom-0">
                    <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                        <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                    </svg>
                </div>

                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                        <h2 style="line-height: 2.6rem" class="mb-6 font-patua font-normal text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
                            Grains Starch food
                        </h2>
                        <p class="mb-6 text-base text-indigo-100 md:text-lg">
                            Starchy foods like potatoes, bread, rice and pasta should make up around a third of what you eat. They’re a good source of energy and essential fibre, calcium, iron and vitamins. Gram for gram, starchy foods contain less than half the calories of fat. Try not to add extra fat to starchy food by adding butter, oil, spreads, cheese or jam – that’s just adding more calories.
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
                                Wholegrain foods usually have more fibre and nutrients. They take longer to digest so they can help you feel full for longer. Good examples of wholegrains are brown rice, wholewheat pasta, whole oats, wholegrain breakfast cereals and wholemeal bread, pitta and chapatti.
                            </p>

                            <h2>How much should I eat from the Grain ( cereal ) group?</h2>
                            <p>Consuming at least 4-6 serves of grain (cereal) foods per day is recommended for Australian adults, while the amount recommended for children and adolescents depends on their age and sex. Follow the links below to find out how many serves you need to eat per day.</p>
                            <p>
                                Minimum recommended average daily number of serves from each of the five food groups
                                <ul>
                                    <li>Children, Adolescents and Toddlers</li>
                                    <li>Adults</li>
                                </ul>
                            </p>

                            <h2>
                                Health benefits of grain foods
                            </h2>
                            <p>
                                The nutrients provided by grains include carbohydrates/starch (energy), protein, fibre and a wide range of vitamins and minerals including the B vitamins folate, thiamin, riboflavin, niacin, iron, vitamin E, zinc, magnesium and phosphorus.
                            </p>
                            <p>
                                Cereals and wholegrain foods can reduce the risk of developing certain diseases including coronary heart disease, colon cancer, diabetes and diverticular disease. The high fibre in wholegrain cereals also assist in the maintenance of the digestive system and can help prevent constipation.
                            </p>
                            <p>
                                High fibre foods, such as wholegrain breads and cereals, can also be an effective part of any weight loss program. They take longer to digest and create a feeling of fullness, which discourages overeating. Whole grains are also naturally low in saturated fat and contain beneficial polyunsaturated fatty acids.
                            </p>
                            <p>
                                Nutrients:
                                <ul>
                                    <li>Grains are important sources of many nutrients, including complex carbohydrates, dietary fiber, several B vitamins( thiamin, riboflavin, niacin, and folate), and minerals( iron, magnesium, and selenium).</li>
                                    <li>Dietary fiber from whole grains or other foods, may help reduce blood cholesterol levels and may lower risk of heart disease. Fiber is also important for proper bowel function. </li>
                                    <li>The B Vitamins thiamin, riboflavin, and niacin play a key role in metabolism- they help the body release enery from protein, fat, and carbohydrates, B vitamins are also essential for a healthy nervous system. Many refined gains are enriched with these B Vitamins.</li>
                                    <li>Iron is used to carry oxygen in the blood. Many teenage girls and women in their childbearing years have iron- deficiency anemia. They should eat foods high in heme-iron(meats) or eat other iron containing foods along with food  rich in vitamin C, which can improve absorption of non- heme iron. Fortified whole and refiened sources of non – heme iron in American diets.</li>
                                    <li>Whole grains are sources of magnesium and  selenium. Magnesium is a mineral used in building bones and releasing energy from muscles, selenium products cells from oxidation. It is also important for a healthy immune system. </li>
                                </ul>
                            </p>

                            <h2>How much should I eat from the Grain ( cereal ) group?</h2>
                            <p>Consuming at least 4-6 serves of grain (cereal) foods per day is recommended for Australian adults, while the amount recommended for children and adolescents depends on their age and sex. Follow the links below to find out how many serves you need to eat per day.</p>
                            <p>
                                Minimum recommended average daily number of serves from each of the five food groups
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
