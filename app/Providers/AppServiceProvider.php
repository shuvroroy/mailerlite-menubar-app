<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
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
        Http::macro('mailerlite', function () {
            return Http::withToken(Session::get('token'))
                ->baseUrl('https://connect.mailerlite.com/api')
                ->accept('application/json')
                ->contentType('application/json');
        });
    }
}
