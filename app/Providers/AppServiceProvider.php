<?php

namespace App\Providers;

use App\Models\Letter;
use App\Models\Project;
use App\Models\Website;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {

            $view->with('website',   Website::find(1));
            $view->with('letters',   Letter::all());
            $view->with('projects',   Project::all());


           
        });
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
