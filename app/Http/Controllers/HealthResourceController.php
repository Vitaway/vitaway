<?php

    namespace App\Http\Controllers;

    class HealthResourceController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            return view('Pages.HealthResource.index');
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function role() {
            return view('Pages.HealthResource.Role');
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function types() {
            return view('Pages.HealthResource.Types');
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function condition() {
            return view('Pages.HealthResource.Condition');
        }
    }
