<?php

namespace Dragg\LaravelSeedsGuarded;

use Dragg\LaravelSeedsGuarded\Console\SeedCommand;
use Illuminate\Support\ServiceProvider;

class SeedServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSeedCommand();

        $this->commands('command.seed');
    }

    /**
     * Register the seed console command.
     *
     * @return void
     */
    protected function registerSeedCommand()
    {
        $this->app->extend('command.seed', function ($command, $app) {
            return new SeedCommand($app['db']);
        });
    }
}
