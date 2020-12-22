<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\NovaTranslatable\Translatable;

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
//        Translatable::defaultLocales(['en', 'fr','it']);
    }
}
