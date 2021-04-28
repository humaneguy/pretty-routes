<?php
namespace GabrielFemi\Rootz;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class RootzServiceProvider extends ServiceProvider {

    /**
     * Register.
     *
     * @return
     */
    public function register()
    {
        //
    }

    /**
     * Boot.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        $this->mergeConfigFrom(
            __DIR__ . '/../config.php', 'pretty-routes'
        );

        if (config('pretty-routes.debug_only', true) && empty(config('app.debug'))) {
            return;
        }

        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'rootz');

        $this->publishes([
            __DIR__ . '/../config.php' => config_path('pretty-routes.php')
        ]);
    }

}
