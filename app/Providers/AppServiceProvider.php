<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Baidu\GetJsonUrl;
use App\Baidu\GetContent;
use App\Myobject\Getsignature;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('GetJsonUrl', function ($app) {
            return new GetJsonUrl();
        });

        $this->app->bind('GetContent', function ($app) {
            return new GetContent();
        });

        $this->app->singleton('Getsignature', function ($app) {
            return new Getsignature();
        });
    }
}
