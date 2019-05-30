<?php

namespace Artes\LaravelBuilder\Base;

use Artes\LaravelBuilder\Base\Commands\BuilderMakeCommand;
use Artes\LaravelBuilder\Base\Commands\ModelMakeCommand;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LaravelBuilderServiceProvider extends ServiceProvider
{
    public function boot(Router $router): void
    {
        $this->commands([
            BuilderMakeCommand::class,
        ]);

        $this->app->extend('command.model.make', function ($app) {
            return new ModelMakeCommand(new \Illuminate\Filesystem\Filesystem);
        });
    }
}