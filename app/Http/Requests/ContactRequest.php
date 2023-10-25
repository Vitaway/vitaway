<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ContactRequest extends FormRequest {
        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules() {
            return [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'message' => ['required', 'string'],
            ];
        }
    }
