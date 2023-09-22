@extends('layouts.guest')

@section('title') Pricing @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative w-full h-full">
          <div class="absolute hidden w-full bg-green-100 lg:block h-96"></div>
          <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                  <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                      <pattern id="2c67e949-4a23-49f7-bf27-ca140852cf21" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                      </pattern>
                    </defs>
                    <rect fill="url(#2c67e949-4a23-49f7-bf27-ca140852cf21)" width="52" height="24"></rect>
                  </svg>
                  <span class="relative">Affordable</span>
                </span>
                for everyone
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
              </p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-y-8 mt-8 max-md:max-w-sm max-md:mx-auto">
                <div class="bg-gray-100 rounded-3xl overflow-hidden p-8" style="border: 1px solid #e7dfd7">
                    <div class="text-left">
                    <h4 class="text-2xl font-extrabold">Starter</h4>
                    <p class="text-xs mt-2">Ideal for individuals.</p>
                    <h3 class="text-2xl font-extrabold mt-4">$5.00<sub class="text-sm font-medium text-gray-400 ml-2">/ Month</sub></h3>
                    <button type="button" class="w-full mt-8 px-2 py-2.5 text-sm font-semibold bg-blue-600 text-white hover:bg-blue-700 rounded-full">Buy Now</button>
                    </div>
                    <div class="mt-8">
                    <h4 class="text-lg font-bold mb-4">Plan Included</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        50 Image generations
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        500 Credits
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Customer Support
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        50GB Cloud Storage
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited Book Mark
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited basic feature
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="bg-white scale-[1.05] shadow-[0_2px_40px_-4px_rgba(93,96,127,0.2)] rounded-3xl overflow-hidden p-8">
                    <div class="text-left">
                    <h4 class="text-2xl font-extrabold">Professional</h4>
                    <p class="text-xs mt-2">Ideal for small Teams.</p>
                    <h3 class="text-2xl font-extrabold mt-4">$8.00<sub class="text-sm font-medium text-gray-400 ml-2">/ Month</sub></h3>
                    <button type="button" class="w-full mt-8 px-2 py-2.5 text-sm font-semibold bg-blue-600 text-white hover:bg-blue-700 rounded-full">Buy Now</button>
                    </div>
                    <div class="mt-8">
                    <h4 class="text-lg font-bold mb-4">Plan Included</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        100 Image generations
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        1000 Credits
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Customer Support
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        100GB Cloud Storage
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited Book Mark
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited basic feature
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-3xl overflow-hidden p-8" style="border: 1px solid #e7dfd7">
                    <div class="text-left">
                    <h4 class="text-2xl font-extrabold">Enterprise</h4>
                    <p class="text-xs mt-2">Ideal for larger Teams.</p>
                    <h3 class="text-2xl font-extrabold mt-4">$20.00<sub class="text-sm font-medium text-gray-400 ml-2">/ Month</sub></h3>
                    <button type="button" class="w-full mt-8 px-2 py-2.5 text-sm font-semibold bg-blue-600 text-white hover:bg-blue-700 rounded-full">Buy Now</button>
                    </div>
                    <div class="mt-8">
                    <h4 class="text-lg font-bold mb-4">Plan Included</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        500 Image generations
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        5000 Credits
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Customer Support
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        500GB Cloud Storage
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited Book Mark
                        </li>
                        <li class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" class="mr-4 bg-gray-200 fill-[#333] rounded-full p-[3px]" viewBox="0 0 24 24">
                            <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                        </svg>
                        Unlimited basic feature
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </template>

    <x-footer />
@endsection
