<?php

namespace Artes\LaravelBuilder\Models;

use Artes\LaravelBuilder\Builders\UserBuilder;
use Artes\LaravelBuilder\Base\EloquentModel;

class User extends EloquentModel
{
    /**
     * Override variable
     *
     * @var string $builder
     */
    protected $builder = UserBuilder::class;

    /**
     * For testing
     * It's not need for you
     *
     * @var string $connection
     */
    protected $connection = 'builder';
}