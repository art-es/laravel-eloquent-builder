<?php

namespace Artes\LaravelBuilder\Base\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as ModelMakeOriginCommand;

class ModelMakeCommand extends ModelMakeOriginCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        if ($this->option('pivot')) {
            return parent::getStub();
        }

        return __DIR__.'/stubs/model-with-builder.stub';
    }
}