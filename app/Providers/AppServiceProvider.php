<?php

namespace App\Providers;

use App\Flowerscategories;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View()->composer(
            ['auth.login', 'auth.register','home','admin','product','detail','update','add','change','mycart'],function($view){
                $view->with('fcategories', Flowerscategories::all());
            }
        );
    }
}
