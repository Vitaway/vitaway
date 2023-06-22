<template>
    <div class="fixed bg-black/75 flex items-center justify-center top-0 bottom-0 right-0 left-0 z-10 w-full h-full" id="model">
        <div class="bg-gray-50 rounded-lg border border-gray-200 shadow w-screen m-4 h-[90vh] p-4 overflow-scroll">
            <div class="modal-wrap">
                <div class="cursor-pointer" onclick="document.getElementById('blogForm').classList.add('hidden')" style="position: absolute; width: 50px; height: 50px; top: -5px; right: -5px; background: white; display: flex; align-items: center; justify-content: center; border-radius: 5px; margin: 5px">
                    <i class="fa fa-close"></i>
                </div>

                <h2 class="text-4xl font-extrabold dark:text-white">Write new blog</h2>

                <!-- Modal body -->
                <div class="mt-4">
                    <form @submit.prevent="createDoc()" @keypress.enter.prevent="" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label class="block mb-2 text-md font-bold text-gray-900 dark:text-white" for="file_input">Blog cover image</label>
                            <input @change="onFileChange" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <div class="mb-4">
                            <label for="helper-text" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Add Title</label>
                            <input v-model="data.title" type="text" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">We’ll never share your details. Read our <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
                        </div>

                        <div class="mb-4">
                            <label for="countries" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Select category</label>
                            <select v-model="data.category" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a category</option>
                                <option v-for="category in blog_categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Add Short description</label>
                            <textarea v-model="data.caption" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mb-4 bg-white rounded-t-lg w-full dark:bg-gray-800">
                            <label for="comment" class="sr-only">Write you content here</label>
                            <textarea v-model="data.contents" id="tinymce" rows="4" name="contents"
                                class="form-inputs px-0 w-full h-80 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary bg-indigo-800 text-white hover:bg-indigo-800/75 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Save
                            Publish
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div v-if="isLoading" class="bg-transparent w-full h-full z-50 flex items-center justify-center absolute top-0 right-0 bottom-0 left-0 backdrop-blur-sm">
            <request-loader />
        </div>

        <message-alert :hasResponse="hasResponse" :response="response" :responseType="responseType" />
    </div>
</template>

<script>
    export default {
        props: { categories: { require: true }},
        data() {
            return {
                data: {
                    title: "",
                    caption: "",
                    contents: "## Start writing",
                    image: '',
                    category: ''
                },
                preview: '',
                metaUser: document.querySelector("meta[name='user']").getAttribute("content"),
                blog_categories: [],
                isLoading: false,
                response: "",
                hasResponse: false,
                responseType: 'success',
            };
        },
        watch: {
            categories: {
                handler(newCategories) {
                  this.blog_categories = JSON.parse(newCategories)
                }, immediate: true
            }
        },
        methods: {
            /**
             * Store and publish custom blog
             * then redirect back to dashboard
            */
            async createDoc() {
                this.isLoading = true;

                try{
                    let formData = new FormData;
                        formData.append('title', this.data.title);
                        formData.append('image', this.data.image);
                        formData.append('caption', this.data.caption);
                        formData.append('contents', this.data.contents);
                        formData.append('blog_category_id', this.data.category);

                    let response = await axios.post("/api/blogs", formData);

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
    }
</script>
