<template>
    <div>
        <div class="input-group">
            <input v-model="payload.email" type="email" required class="form-control p-3 border-0 font-patua font-normal" placeholder="Your Email Address">
            <button @click="subscribe" type="button" class="btn btn-primary font-patua font-normal">Subscribe</button>
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
</script>
