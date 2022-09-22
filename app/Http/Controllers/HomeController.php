<?php

    namespace App\Http\Controllers;

    class HomeController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            return view('index');
        }

         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function about() {
            return view('Pages.About');
        }
    }
