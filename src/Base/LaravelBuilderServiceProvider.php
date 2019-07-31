<?php

namespace Artes\LaravelBuilder\Base;

use Artes\LaravelBuilder\Base\Commands\BuilderMakeCommand;
use Artes\LaravelBuilder\Base\Commands\ModelMakeCommand;
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
