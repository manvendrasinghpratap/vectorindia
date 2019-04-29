<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        Schema::defaultStringLength(191);
        $settings = Setting::where('status','=',1)->pluck('value','field_name');
        view()->composer('*', function ($view) use($settings) {
            $view->with('settings', $settings);
        });
    }
}
