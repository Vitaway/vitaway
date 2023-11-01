@extends('layouts.guest')

@section('title') Passionate & Dedicated Individuals | Meet Our Team @stop

@section('metas')
    <meta name="robots" content="index, follow">
    <meta name="description" content="Discover the passionate and dedicated individuals who make Vitaway a leader in healthcare innovation and tick. Get to know our team of experts committed to enhancing your well-being." />
    <meta name="keywords" content="Vitaway, Meet Our Team, Healthcare Experts, Dedicated Team, Healthcare Innovation, Wellness, Health Professionals" />
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <style>
        @media (max-width: 720px) {
            .team-section {
                padding: 20px;
            }
        }
    </style>
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="team-section relative w-full h-full">
            <div class="absolute hidden w-full from-indigo-50 bg-gradient-to-b lg:block h-96"></div>

            <div class="relative py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:py-20">

                <div class="max-w-xl mb-20 md:mx-auto sm:text-center lg:max-w-2xl md:mb-20">
                    <div>
                    <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        Meet Our Team
                    </p>
                    </div>
                    <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                            </svg>
                            <span class="relative font-patua font-normal">Meet </span>
                        </span>
                        The Dedicated Individuals Who Make Vitaway Tick.
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                        This dedicated group of individuals forms the backbone of Vitaway, and their collective expertise and commitment drive the mission forward.
                    </p>
                </div>

                <div class="grid gap-5 mx-auto lg:grid-cols-3 lg:max-w-screen-xl mt-5">

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-48 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-1.jpeg" alt="Emmanuel HAKUZIMANA" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-normal font-patua mb-3">Emmanuel HAKUZIMANA</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Co-founder and Managing Director</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                                Vincent Van Gogh’s most popular painting, The Starry Night.
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-96 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-6.jpeg" alt="Eric NIYONGIRA" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-bold">Eric NIYONGIRA</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Co-founder && Strategic Business Development</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                            Amet I love liquorice jujubes pudding croissant I love pudding.
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-96 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-4.jpeg" alt="Steven SHIMIRWA" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-bold">Steven SHIMIRWA</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Co-founder && Head of Clinical Medicine</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                            Lorizzle ipsum bling bling sit amizzle, consectetuer adipiscing elit.
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-96 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-5.jpeg" alt="Stacy Charlene USANASE" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-bold">Stacy Charlene USANASE</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Head of Finance</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                            Bacon ipsum dolor sit amet salami jowl corned beef, andouille flank.
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-96 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-2.jpeg" alt="Gisele IREBE" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-bold">Gisele IREBE</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Head of Communication && Public Relations</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                            Bacon ipsum dolor sit amet salami jowl corned beef, andouille flank.
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-6">
                        <div class="relative w-full h-48 max-h-full rounded sm:h-auto sm:col-span-3">
                            <img class="absolute object-cover w-full h-full rounded" src="/images/Team/member-8.png" alt="MANIRABONA H. Patience" />
                        </div>
                        <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-3">
                            <p class="text-lg font-bold">Patience H. MANIRABONA</p>
                            <p class="mb-4 text-md leading-5 text-gray-600 mt-2 font-patua font-normal">Software Engineer && Head of Product Development</p>
                            <p class="mb-4 text-sm tracking-wide text-gray-800">
                                Thousand Hills-born Software Engineer, better known as a FullStack Developer,
                            </p>
                            <div class="flex items-center space-x-3">
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                                </a>
                                <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </template>

    <x-footer />
@endsection
