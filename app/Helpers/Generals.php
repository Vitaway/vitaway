<?php

use App\Models\User;

    if(!function_exists('tryCatch')){
        /**
         * Catch a potential exception and return a default value.
         *
         * @param  callable  $callback
         * @param  mixed  $rescue
         * @param  bool  $report
         * @return mixed
         */
        function tryCatch(callable $callback, $execute = null, $report = true) {
            try {
                return $callback();
            } catch (Throwable $e) {
                if($report) report($e);
                return $execute instanceof Closure ? $execute($e) : $execute;
            }
        }
    }

    if(!function_exists('socialMedias')){
        /**
         * Catch a potential exception and return a default value.
         *
         * @param  callable  $callback
         * @param  mixed  $rescue
         * @param  bool  $report
         * @return mixed
         */
        function socialMedias($userId) {
            return User::where('id', $userId)->first()->socialMedia;
        }
    }
