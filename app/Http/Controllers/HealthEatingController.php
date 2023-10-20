<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class HealthEatingController extends Controller {
        public function guides() {
            return view('pages.Health-Eating.well-guide');
        }

        public function foodGroup() {
            return view('pages.Health-Eating.food-group');
        }

        public function lifeStages() {
            return view('pages.Health-Eating.life-stage');
        }

        public function wellBeing() {
            return view('pages.Health-Eating.well-being');
        }

        public function grains() {
            return view('pages.Health-Eating.Food-Groups.grains');
        }

        public function proteins() {
            return view('pages.Health-Eating.Food-Groups.proteins');
        }

        public function vegetables() {
            return view('pages.Health-Eating.Food-Groups.vegetables');
        }

        public function dairy() {
            return view('pages.Health-Eating.Food-Groups.dairy');
        }

        public function adult() {
            return view('pages.Health-Eating.Life-Stages.Adult');
        }

        public function children() {
            return view('pages.Health-Eating.Life-Stages.children');
        }

        public function pregnancy() {
            return view('pages.Health-Eating.Life-Stages.pregnancy');
        }
    }
