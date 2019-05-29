<?php

namespace Artes\LaravelBuilder\Base;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Artes\LaravelBuilder\EloquentModel
 *
 * @method static Builder|EloquentModel newModelQuery()
 * @method static Builder|EloquentModel newQuery()
 * @method static Builder|EloquentModel query()
 */
class EloquentModel extends Model
{
    /**
     * If you want to use your custom builder
     * you need to override this variable
     *
     * @var string $builder
     */
    protected $builder = Builder::class;

    /**
     * Overridden method for using custom builders
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return Builder|Model
     */
    public function newEloquentBuilder($query)
    {
        return new $this->builder($query);
    }
}