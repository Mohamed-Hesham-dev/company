<?php

namespace App\Providers;
use View;
use App\About;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        $all_about=About::all();
        View::share('about', $all_about);
        Schema::defaultStringLength(190);
        //
    }
}
