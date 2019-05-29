<?php

namespace Artes\LaravelBuilder\Base;

use Artes\LaravelBuilder\Base\Commands\BuilderMakeCommand;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LaravelBuilderServiceProvider extends ServiceProvider
{
    public function boot(Router $router): void
    {
        $this->commands([
            BuilderMakeCommand::class,
        ]);
    }
}