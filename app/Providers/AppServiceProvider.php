<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use App\Models\PageSeo;

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
        try {
            if (Schema::hasTable('settings')) {
                $settings = Setting::all()->pluck('value', 'key');
                View::share('settings', $settings);
            }

            if (Schema::hasTable('page_seos')) {
                View::composer(['website.*', 'website.layouts.*'], function ($view) {
                    $route = request()->route();
                    $pageKey = $route ? $route->getName() : 'home';
                    if (!$pageKey || !PageSeo::where('page_key', $pageKey)->exists()) {
                        $path = trim(request()->path(), '/');
                        $pageKey = $path ?: 'home';
                    }
                    $seo = PageSeo::where('page_key', $pageKey)->first() ?? PageSeo::where('page_key', 'home')->first();
                    $view->with('seo', $seo);
                });
            }
        } catch (\Exception $e) {
            // Ignore during CLI migration steps
        }
    }
}
