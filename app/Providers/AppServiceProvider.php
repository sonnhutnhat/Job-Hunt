<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Banner;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        $banner_data = Banner::where('id',1)->first();
        // $settings_data = Setting::where('id',1)->first();
        view()->share('global_banner_data', $banner_data);
        // view()->share('global_settings_data', $settings_data);
    }
}
