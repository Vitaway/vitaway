<template>
    <div v-if="isOpened" class="fixed transition-all ease-in-out delay-150 flex items-center top-0 right-0 left-0 bottom-0 bg-gray-900/25 h-screen w-screen z-[9999]">
        <div class="relative isolate w-full overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                  <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Subscribe to Our Newsletter.</h2>
                  <p class="mt-4 text-lg leading-8 text-gray-300">
                    Get exclusive wellness tips, expert insights, special offers & unlock a healthier you!
                    Start your journey to vitality now by subscribing to Vitaway's newsletter.
                  </p>
                  <div class="mt-6 flex max-w-md gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input v-model="payload.email" id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" placeholder="Enter your email">
                    <button v-if="isLoading" type="submit" class="flex-none rounded-md bg-[#3268b9] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        <svg aria-hidden="true" role="status" class="inline h-5 w-5 animate-spin text-indigo-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="rgb(79 70 229)"></path>
                        </svg>
                    </button>
                    <button v-else @click="subscribe" type="submit" class="flex-none rounded-md bg-[#3268b9] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Subscribe Now
                    </button>
                  </div>
                  <div :class="'font-patua font-normal mt-2 '+responseType">{{ responseMessage }}</div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                  <div class="flex flex-col items-start">
                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                      <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                      </svg>
                    </div>
                    <dt class="mt-4 font-semibold text-white">Weekly Blogs</dt>
                    <dd class="mt-2 leading-7 text-gray-400">
                        Our expert advice will help you elevate your wellbeing one read at a time🌿! Whether you're looking to improve your nutrition, fitness, or mental health 💚
                    </dd>
                  </div>
                  <div class="flex flex-col items-start">
                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <dt class="mt-4 font-semibold text-white">Feature Updates</dt>
                    <dd class="mt-2 leading-7 text-gray-400">
                        Track your health journey with Vitaway's innovative features and elevate your well-being seamlessly. Stay connected to your path to optimal health, because you deserve the best!
                    </dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
              <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#07f394] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>

        <div @click="closeModel" class="rounded-md absolute top-10 right-10 bg-white/50 cursor-pointer p-2 ring-1 ring-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                isOpened: false,
                activeClose: false,
                payload: {
                    email: '',
                },
                responseMessage: '',
                responseType: '',
                isLoading: false,
                localStorageKey: 'vitaway-subscriber',
            }
        },
        methods: {
            async subscribe() {
                this.isLoading = true;

                if(this.payload.email == "") {
                    this.responseMessage = "Email field is Now Required";
                    this.responseType = "text-red-500";
                    this.isLoading = false;
                } else {
                    axios.post('/api/suscribe', { email: this.payload.email })
                        .then((response) => {
                            this.responseMessage = response.data.message;
                            this.responseType = "text-green-500";
                            this.isLoading = false;
                            this.closeModel();
                            localStorage.setItem("vitaway-subscriber", this.payload.email);
                        }).catch((error) => {
                            this.responseMessage = "Unable to save the email, pls try again (use another email)";
                            this.responseType = "text-red-500";
                            this.isLoading = false;
                        });
                }

            },
            closeModel() {
                this.isOpened = false;
                this.activeClose = true;
            },
            openModel() {
                this.isOpened = true;
            },
            handleScroll() {
                const scrollHeightToShowCard = 1800;

                if (window.scrollY >= scrollHeightToShowCard && !this.activeClose && !this.localStorageHasItem()) {
                    this.isOpened = true;
                } else {
                    this.isOpened = false;
                }
            },
            localStorageHasItem() {
                return localStorage.getItem(this.localStorageKey) !== null;
            },
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll);
        },
    }
</script>
