<?php

namespace Artes\LaravelBuilder\Base;

use Illuminate\Database\Eloquent\Builder as BaseBuilder;
use Illuminate\Database\Query\Builder;
use ReflectionClass;
use ReflectionException;

/**
 * Trait Builderable
 * @property BaseBuilder $builder
 * @package Artes\LaravelBuilder\Base
 */
trait Builderable
{
    /**
     * Check property existing
     *
     * @return bool
     */
    protected function builderPropertyExists(): bool
    {
        return property_exists(self::class, 'builder');
    }

    /**
     * Generate builder class by model name
     *
     * Example:
     *      Model: \App\Models\Post
     *      Builder: \App\Models\PostBuilder
     *
     * @return string
     * @throws ReflectionException
     */
    protected function generateBuilderClassByModelName(): string
    {
        $shortName = (new ReflectionClass($this))->getShortName();

        return "App\\Builders\\{$shortName}Builder";
    }

    /**
     * $builder getter
     * Main method for getting builder
     *
     * @return BaseBuilder|mixed
     * @throws ReflectionException
     */
    protected function getBuilder()
    {
        if ($this->builderPropertyExists()) {
            return $this->builder;
        }

        $builderClass = $this->generateBuilderClassByModelName();

        if (class_exists($builderClass)) {
            return $builderClass;
        }

        return BaseBuilder::class;
    }

    /**
     * Overridden method for using custom builders
     *
     * @param  Builder  $query
     * @return Builder|\Illuminate\Database\Eloquent\Model
     * @throws ReflectionException
     */
    public function newEloquentBuilder($query)
    {
        $builder = $this->getBuilder();

        return new $builder($query);
    }
}
