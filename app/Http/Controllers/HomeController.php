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

        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function userAccount() {
            return view('Pages.user-account');
        }


        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function memberLogin() {
            return view('Pages.UserAccount.Auth.member');
        }

        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function createAccount() {
            return view('Pages.UserAccount.Auth.account');
        }

        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function gender() {
            return view('Pages.UserAccount.Auth.gendder');
        }

        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function ageRange() {
            return view('Pages.UserAccount.Auth.age');
        }

        /**
         * Return user account page
         *
         * @return \Illuminate\Http\Response
         */
        public function username() {
            return view('Pages.UserAccount.Auth.username');
        }
    }
