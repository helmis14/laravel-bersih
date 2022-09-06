<?php

namespace App\Providers;

use App\View\Components\Button;
use Illuminate\Support\ServiceProvider;


class CustomServiceProvider extends ServiceProvider
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
        Blade::component('custom-btn', Button::class);
    }
}
