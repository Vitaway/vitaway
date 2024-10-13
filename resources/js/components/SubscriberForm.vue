<template>
    <div>
        <div class="input-group relative">
            <input v-model="payload.email" type="email" required class="form-control p-3 border-0 font-patua font-normal" placeholder="Your Email Address">
            <button @click="subscribe" type="button" class="btn btn-primary font-patua font-normal">Subscribe</button>
            <div v-if="isLoading" class="absolute z-50 right-0 left-0 bottom-0 top-0 flex items-center rounded justify-center bg-slate-900/30">
                <span class="inline-flex h-6 w-6 animate-spin rounded-full border-4 border-dotted border-gray-200"></span>
            </div>
        </div>
        <div :class="'font-patua font-normal mt-2 '+responseType">{{ responseMessage }}</div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                payload: {
                    email: '',
                },
                responseMessage: '',
                responseType: '',
                isLoading: false,
            }
        },
        methods: {
            async subscribe() {
                this.isLoading = true;

                if(this.payload.email == "") {
                    this.responseMessage = "Email field is required";
                    this.responseType = "text-red-500";
                    this.isLoading = false;
                } else {
                    axios.post('/api/suscribe', { email: this.payload.email })
                        .then((response) => {
                            this.responseMessage = response.data.message;
                            this.responseType = "text-green-500";
                            this.isLoading = false;
                        }).catch((error) => {
                            this.responseMessage = "Unable to save the email, pls try again (use another email)";
                            this.responseType = "text-red-500";
                            this.isLoading = false;
                        });
                }
            }
        }
    }
</script>
