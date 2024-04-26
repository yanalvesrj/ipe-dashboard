<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('ambiente', function ($attribute, $value, $parameters, $validator) {
            // Valida se o valor é uma sequência de números
            return preg_match('/^[0-9]+$/', $value);
        });
    
        Validator::extend('usuario', function ($attribute, $value, $parameters, $validator) {
            // Valida se o valor contém apenas letras, números, pontos, traços e underscores
            return preg_match('/^[\w.-]+$/', $value);
        });
    
        Validator::extend('senha', function ($attribute, $value, $parameters, $validator) {
            // Valida se o valor contém pelo menos uma letra e um número
            return preg_match('/^(?=.*[A-Za-z])(?=.*\d).*$/', $value);
        });
    }
}
