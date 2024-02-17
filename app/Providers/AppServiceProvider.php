<?php

namespace App\Providers;

use App\View\Components\vou_input;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        //
        // Blade::component('vou_input',  vou_input::class);
        
         Paginator::useBootstrapFive();
    Paginator::useBootstrapFour();
    }
}
