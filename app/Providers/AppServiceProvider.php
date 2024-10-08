<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\TayhuControllere;
use App\Models\Team;
use App\Observers\BlogObserver;
use App\Observers\ProdductObserver;
use App\Observers\ProductObserver;
use App\Observers\TeamObserver;
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
        $site = TayhuControllere::first();
        View::share('site', $site);
        
    }
}
