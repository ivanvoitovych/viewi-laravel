<?php

namespace ViewiLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Viewi\Routing\Route as ViewiRoute;
use ViewiLaravel\Adapters\ViewiLaravelAdapter;

class ViewiServiceProvider extends ServiceProvider
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
        $adapter = new ViewiLaravelAdapter();
        ViewiRoute::setAdapter($adapter);
    }
}
