@extends('layouts.admin')

@section('content')
<div class="main-content position-relative bg-gray-100 h-100">
    {{--  --}}
    <div class="relative">
        <div class="page-header h-[300px] rounded-xl m-4"
            style="background-image: url('https://images.unsplash.com/photo-1686577184196-b13633d8f34d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1675&q=80'); background-position-y: 50%;">
            <span class="mask opacity-6"></span>
        </div>
        <div class="card card-body mt-n6 overflow-hidden absolute -bottom-12 mx-5">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ Auth::user()->avatar }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" />
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-2">{{ Auth::user()->name }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">Vitaway Admin Member</p>
                        <div><a href="{{ route('profile') }}">Preferences</a> / <a href="{{ route('adminLogout') }}">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden" id="blogForm">
        <blog-form categories="{{ json_encode($categories) }}" />
    </div>

    <div class="container-fluid py-4 mt-5">
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                        Blogs
                    </button>
                </li>
                <li class="mr-2">
                    <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        Categories
                    </button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <button onclick="document.getElementById('blogForm').classList.remove('hidden')" type="button" class="text-white flex items-center bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <strong>Write</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </button>
                    <div class="mt-4 grid grid-cols-4 gap-4">
                        @foreach ($blogs as $blog)
                            <blog-cards blog="{{ $blog }}" categories="{{ json_encode($categories) }}" />
                        @endforeach
                    </div>
                </div>
                <div class="hidden relative p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
                    <div><category-form /></div>
                    <div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Category Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Created At
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $category->name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $category->created_at->toDateTimeString() }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © 2023, made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Manirabona Patience</a>
                            for a better web.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@stop

@section('scripts')
<script>
    async function openWriteModel(modalId) {
        document.getElementById(modalId.id).classList.remove('hidden');
    }
</script>
@endsection
