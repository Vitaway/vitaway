<?php

    namespace App\Http\Controllers;

    class ConditionController extends Controller {
        public function diabetes() {
            return view('Pages.HealthResource.condition.Diabetes');
        }

        public function preDiabetes() {
            return view('Pages.HealthResource.condition.PreDiabetes');
        }

        public function hypertension() {
            return view('Pages.HealthResource.condition.Hypertension');
        }

        public function mentalHealth() {
            return view('Pages.HealthResource.condition.MentalHealth');
        }
    }
