<?php

namespace Fomvasss\Punycode;

use Illuminate\Support\ServiceProvider;

class PunycodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/punycode.php';
        $publishPath = config_path('punycode.php');

        $this->publishes([$configPath => $publishPath], 'config');

        $this->registerHelpers();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('punycode', function () {
            return new Punycode();
        });

        $this->mergeConfigFrom(__DIR__.'/../config/punycode.php', 'punycode');
    }

    public function registerHelpers()
    {
        if (file_exists($file = __DIR__.'/helpers.php')) {
            require $file;
        }
    }
}
