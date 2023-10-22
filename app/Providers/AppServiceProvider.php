<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $settings = DB::table('app_settings')->where('id',1)->first();
        $hotel = DB::table('hotels')->where('is_active',1)->get();
        View::share('app_settings', $settings);
        View::share('all_hotels', $hotel);
    }
}
