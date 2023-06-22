<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class StoreProfileRequest extends FormRequest {
        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules() {
            return [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'facebook' => ['string'],
                'twitter' => ['string'],
                'instagram' => ['string'],
                'youtube' => ['string'],
                'linkedin' => ['string'],
                'bio' => ['string']
            ];
        }
    }
