<?php

namespace App\Providers;

use App\Events\UserRegisterEvent;
use Illuminate\Support\ServiceProvider;
use App\Listeners\UserRegisterListener;

class AppServiceProvider extends ServiceProvider
{
    protected $listen=[
        UserRegisterEvent::class=>[
            UserRegisterListener::class,
        ]
    ];

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
    }
}