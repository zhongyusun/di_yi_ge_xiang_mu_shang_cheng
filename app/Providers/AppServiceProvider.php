<?php

namespace App\Providers;

use App\Models\Config;
use App\Observers\ConfigObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //解决php版本过低
        Schema::defaultStringLength(191);
        /*******注册观察者****/
        Config::observe(ConfigObserver::class);
        /****注册观察者******/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
