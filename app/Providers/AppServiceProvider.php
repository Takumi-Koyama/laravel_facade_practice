<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ClassA;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('classA', ClassA::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}