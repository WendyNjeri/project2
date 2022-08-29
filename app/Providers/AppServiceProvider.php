<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Routing\Route;

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

        //global setting for authentication
        //Route::pattern('name', '[a-zA-Z]+');
        

    }
}
