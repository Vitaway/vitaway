<template>
    <div class="virtual-programs from-indigo-50 bg-gradient-to-b">
        <div class="sm:max-w-xl relative md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                <defs>
                    <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                    </pattern>
                </defs>
                <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
            </svg>
            <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12 mt-4">
                <h2 style="line-height: 2.5rem" class="max-w-lg mb-6 font-normal font-patua text-3xl tracking-tight text-black sm:text-4xl sm:leading-none">
                    With multi-condition virtual care programs, Vitaway
                    provides everything you need to experience better health
                </h2>
                <p class="max-w-xl mb-4 text-base text-gray-800 md:text-lg">
                    We've got everything you need to improve your health, from expert guidance to personalized solutions. Experience a healthier you, today.
                </p>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 align-self-center">
                  <div class="left-content show-up header-text">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="measurements">
                            <li class="rounded hover:bg-gray-300 hover:rounded" v-on:click="toggleTabs(1)" v-bind:class="{'text-gray-900 bg-white': openTab !== 1, 'text-white bg-indigo-200': openTab === 1}">
                                <a href="#" class="rounded hover:bg-gray-300 hover:rounded">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4327/4327809.png" alt="Pre-Diabetes">
                                    Pre-Diabetes
                                </a>
                            </li>
                            <li class="rounded hover:bg-gray-300 hover:rounded" v-on:click="toggleTabs(2)" v-bind:class="{'text-gray-900 bg-white': openTab !== 2, 'text-white bg-indigo-200': openTab === 2}">
                                <a href="#" class="rounded hover:bg-gray-300 hover:rounded">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4349/4349215.png" alt="Diabetes">
                                    Diabetes
                                </a>
                            </li>
                            <li class="rounded hover:bg-gray-300 hover:rounded" v-on:click="toggleTabs(3)" v-bind:class="{'text-gray-900 bg-white': openTab !== 3, 'text-white bg-indigo-200': openTab === 3}">
                                <a href="#" class="rounded hover:bg-gray-300 hover:rounded">
                                    <img class="circular" src="https://cdn-icons-png.flaticon.com/512/4799/4799067.png" alt="Hypertension">
                                    Hypertension
                                </a>
                            </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}" class="right-image wow fadeInRight rounded ring ring-gray-300" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="https://images.unsplash.com/photo-1685660478285-ab8e2876780e?auto=format&fit=crop&q=80&w=2580&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pre-Diabetes" class="rounded">
                    </div>
                    <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}" class="right-image wow fadeInRight rounded ring ring-gray-300" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="https://images.unsplash.com/photo-1683726815994-d76cb5ea6b8b?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Diabetes" class="rounded">
                    </div>
                    <div v-bind:class="{'hidden': openTab !== 3, 'block': openTab === 3}" class="right-image wow fadeInRight rounded ring ring-gray-300" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="https://images.unsplash.com/photo-1683187884086-365d0b9f2b06?auto=format&fit=crop&q=80&w=2940&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hypertension" class="rounded">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "pink-tabs",
        data() {
            return {
                openTab: 1
            }
        },
        methods: {
            toggleTabs: function(tabNumber){
                this.openTab = tabNumber
            }
        }
    }
</script>
