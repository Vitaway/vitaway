<template>
    <form>
        <div class="mb-1 sm:mb-2">
            <label for="name" class="inline-block mb-1 font-normal font-patua">Fullname</label>
            <input v-model="payload.fullname" placeholder="Use Fullname" type="text" class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" id="fullname" name="fullname" />
        </div>
        <div class="mb-1 sm:mb-2">
          <label for="email" class="inline-block mb-1 font-normal font-patua">E-mail</label>
          <input v-model="payload.email" placeholder="john.doe@example.org" type="text" class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" id="email" name="email" />
        </div>
        <div class="mb-1 sm:mb-2">
          <label for="email" class="inline-block mb-1 font-normal font-patua">Message</label>
          <textarea v-model="payload.message" placeholder="Write a Message..." class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" cols="30" rows="10"></textarea>
        </div>
        <div class="mt-4 mb-2 sm:mb-4">
            <button @click="submitContact" type="button" class="relative inline-flex items-center justify-center w-full h-12 px-6 font-normal font-patua tracking-wide text-white transition duration-200 rounded bg-indigo-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                Contact
                <div v-if="isLoading" class="absolute right-0 left-0 bottom-0 top-0 flex items-center rounded justify-center bg-slate-900/30">
                    <span class="inline-flex h-6 w-6 animate-spin rounded-full border-4 border-dotted border-gray-200"></span>
                </div>
            </button>
        </div>
        <p class="text-xs text-gray-600 sm:text-sm font-normal font-patua">
            We respect your privacy. <span class="text-green-600">{{ responseMessage }}</span>
        </p>
    </form>
</template>
<script>
    export default {
        data() {
            return {
                payload: {
                    fullname: '',
                    email: '',
                    message: ''
                },
                responseMessage: '',
                isLoading: false,
            }
        },
        methods: {
            async submitContact() {
                this.isLoading = true;
                axios.post('/api/contacts', {
                    name: this.payload.fullname,
                    email: this.payload.email,
                    message: this.payload.message,
                }).then((response) => {
                    this.responseMessage = response.data.message;
                    this.isLoading = false;
                }).catch((error) => {
                    this.responseMessage = error.response.data.message;
                    this.isLoading = false;
                });
            }
        }
    }
</script>
