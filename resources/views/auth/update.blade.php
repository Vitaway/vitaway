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

    <div class="container-fluid py-4 mt-5">
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <a href="/admin/dashboard" id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 font-bold text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                        Home
                    </a>
                </li>
                <li class="mr-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 font-bold text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">
                        Update blog
                    </button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <edit-blog-form
                        categories="{{ $categories }}"
                        current_title="{{ $blog->title }}"
                        current_caption="{{ $blog->caption }}"
                        current_category="{{ $blog->blogCategory->name }}"
                        current_content="{{ $blog->blogContent->contents }}"
                        blog_id="{{ $blog->id }}"
                    />
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
