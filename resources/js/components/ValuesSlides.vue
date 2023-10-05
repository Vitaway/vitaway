<template>
    <swiper :navigation="true" :modules="modules" class="mySwiper">
      <swiper-slide>
        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
            <div class="p-4">
            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
            </div>
            <p class="mb-2 font-bold">Football Sports</p>
            <p class="text-sm leading-5 text-gray-900">
                Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
            <div class="p-4">
            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
            </div>
            <p class="mb-2 font-bold">Football Sports</p>
            <p class="text-sm leading-5 text-gray-900">
                Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            </div>
            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
        </div>
      </swiper-slide>
    </swiper>
</template>
<script>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';

    // Import Swiper styles
    import 'swiper/css';
    import 'swiper/css/navigation';

    // import required modules
    import { Navigation } from 'swiper/modules';

    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
      setup() {
        return {
          modules: [Navigation],
        };
      },
    };
  </script>
