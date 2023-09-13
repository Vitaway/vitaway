<template>
    <div>
        <form @submit.prevent="updateBlog()" @keypress.enter.prevent="" enctype="multipart/form-data">
            <div class="mb-4">
                <label class="block mb-2 text-md font-bold text-gray-900 dark:text-white" for="file_input">Blog cover image</label>
                <input @change="onFileChange" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            </div>
            <div class="mb-4">
                <label for="helper-text" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Add Title</label>
                <input v-model="data.title" type="text" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hospitality in the crisis world">
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your details. Read our <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
            </div>

            <div class="mb-4">
                <label for="countries" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Select category</label>
                <select v-model="data.category" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option v-for="category in blog_categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Add Short description</label>
                <textarea v-model="data.caption" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
            <div class="mb-4 bg-white rounded-t-lg w-full dark:bg-gray-800">
                <label for="comment" class="sr-only">Write you content here</label>
                <textarea id="tinymce" rows="4" name="contents"
                    class="form-inputs px-0 w-full h-80 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"></textarea>
            </div>
            <button type="submit" class="btn btn-primary bg-indigo-800 text-white hover:bg-indigo-800/75 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                Save Changes
            </button>
        </form>

        <div v-if="isLoading" class="bg-transparent w-full h-full z-50 flex items-center justify-center absolute top-0 right-0 bottom-0 left-0 backdrop-blur-sm">
            <request-loader />
        </div>

        <message-alert :hasResponse="hasResponse" :response="response" :responseType="responseType" />
    </div>
</template>

<script>
    export default {
        props: {
            categories: { require: true },
            current_title: { require: true },
            current_caption: { require: true },
            current_category: { require: true },
            current_content: { require: true },
            blog_id: { require: true },
        },
        data() {
            return {
                data: {
                    title: "",
                    caption: "",
                    image: '',
                    category: '',
                    content: ''
                },
                preview: '',
                metaUser: document.querySelector("meta[name='user']").getAttribute("content"),
                isLoading: false,
                response: "",
                hasResponse: false,
                responseType: 'success',
                blog_categories: {}
            };
        },
        watch: {
            categories: {
                handler(newCategories) {
                  this.blog_categories = JSON.parse(newCategories)
                }, immediate: true
            },
            current_title: {
                handler(newTitle) {
                    this.data.title = newTitle
                }, immediate: true
            },
            current_caption: {
                handler(newCaption) {
                    this.data.caption = newCaption
                }, immediate: true
            },
            current_category: {
                handler(newCategory) {
                    this.data.category = newCategory
                }, immediate: true
            },
            current_content: {
                handler(newContent) {
                    this.data.content = newContent
                }, immediate: true
            },
        },
        methods: {
            /**
             * Store and publish custom blog
             * then redirect back to dashboard
            */
            async updateBlog() {
                this.isLoading = true;

                try {
                    let formData = new FormData;
                        formData.append('title', this.data.title);
                        formData.append('image', this.data.image);
                        formData.append('caption', this.data.caption);
                        formData.append('contents', window.parent.tinymce.get('tinymce').getContent());
                        formData.append('blog_category_id', this.data.category);

                    let response = await axios.post(`/api/blogs/${this.blog_id}`, formData);

                    this.responseType = "success";
                    this.response = response.data.message;
                } catch(error) {
                    this.responseType = "error";
                    this.response = error.response.data.message;
                }

                this.isLoading = false;
                this.hasResponse = true;
            },

            /**
             * listern to inputfile change
             * and keep image in data handler
            */
            onFileChange(e) {
                this.data.image = e.target.files[0];
                this.preview = URL.createObjectURL(e.target.files[0]);
            },
        },
        mounted() {
            document.getElementById('tinymce').value = this.current_content;
        }
    }
</script>
