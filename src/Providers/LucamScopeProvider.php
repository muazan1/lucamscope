<?php

namespace Sty\Lucamscope\Providers;

use Illuminate\Support\ServiceProvider;

class LucamScopeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

    public function boot()
    {
        // for Packge API Routes
        $this->loadRoutesFrom(__DIR__ . '/../Routes/Api/api.php');

        // for Package Migrations
        $this->loadMigrationsFrom(
            __DIR__ . '/../Publishable/Database/Migrations',
            'migrations'
        );

        // for Loading Views from Package
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Lucam');

        // for Package Seeders
        $this->publishes([
            __DIR__ . '/../Publishable/Database/Seeders' => database_path(
                'seeders'
            ),
        ]);
    }
}
