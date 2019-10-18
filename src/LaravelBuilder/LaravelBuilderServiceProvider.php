<?php

namespace Artes\LaravelBuilder;

use Artes\LaravelBuilder\Commands\BuilderMakeCommand;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelBuilderServiceProvider
 * Add make:builder command to artisan console.
 *
 * @package Artes\LaravelBuilder\Base
 */
class LaravelBuilderServiceProvider extends ServiceProvider
{
    public function boot(Router $router): void
    {
        $this->commands([
            BuilderMakeCommand::class,
        ]);
    }
}
