<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use App\View\Components\layouts\app;
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
        // if(config("app.env") === 'local'){
        //     URL::forceScheme('https');
        // }
        Blade::anonymousComponentPath(resource_path('views/components/layouts'), 'website');

    }
}
