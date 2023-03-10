<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidatorServiceProvaider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend(
            'postcode',
            function ($attribute, $value, $parameters, $validator) {
                return preg_match('/[0-9]{3}-[0-9]{4}/', $value);
            }
        );
    }
}
