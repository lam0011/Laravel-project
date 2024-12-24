<?php
return [
    // Core Laravel Providers
    App\Providers\AppServiceProvider::class,
    App\Providers\RouteServiceProvider::class,

    // Custom Providers
    App\Providers\CustomServiceProvider::class,

    // Third-party providers
    Barryvdh\LaravelDebugbar\ServiceProvider::class,  // Example of a third-party package
];
