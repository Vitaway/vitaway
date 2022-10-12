<?php

    namespace App\Http\Controllers;

    class UserAccountController extends Controller {
        public function home() {
            return view('Pages.UserAccount.index');
        }

        public function account() {
            return view('Pages.UserAccount.account');
        }

        public function payment() {
            return view('Pages.UserAccount.payment');
        }

        public function specialist() {
            return view('Pages.UserAccount.specialist');
        }

        public function space() {
            return view('Pages.UserAccount.space');
        }

        public function resources() {
            return view('Pages.UserAccount.resources');
        }
    }
