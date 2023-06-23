<template>
    <div>
        <div class="mb-4">
            <label for="helper-text" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Category Name</label>
            <input v-model="category_name" type="text" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Ex: Science, Nutrition</p>
        </div>
        <button @click="createCategory" type="submit" class="btn btn-primary bg-indigo-800 text-white hover:bg-indigo-800/75 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
            Save
        </button>

        <div v-if="isLoading" class="bg-transparent w-full h-full z-50 flex items-center justify-center absolute top-0 right-0 bottom-0 left-0 backdrop-blur-sm">
            <request-loader />
        </div>

        <message-alert :hasResponse="hasResponse" :response="response" :responseType="responseType" />
    </div>
</template>
<script>
export default {
    data() {
        return {
            category_name: "",
            isLoading: false,
            response: "",
            hasResponse: false,
            responseType: 'success',
        };
    },
    methods: {
        /**
         * Store and publish custom blog
         * then redirect back to dashboard
        */
        async createCategory() {
            this.isLoading = true;

            try{
                let formData = new FormData;
                    formData.append('category_name', this.category_name);

                let response = await axios.post("/api/categories", formData);

                this.responseType = "success";
                this.response = response.data.message;
                this.isLoading = false;
            } catch(error) {
                this.responseType = "error";
                this.response = error.response.data.message;
                this.isLoading = false;
            }

            this.hasResponse = true;
        },
    },
}
</script>
