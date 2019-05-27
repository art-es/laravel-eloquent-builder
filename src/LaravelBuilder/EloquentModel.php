<?php

namespace Artes\LaravelBuilder;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Artes\LaravelBuilder\EloquentModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Artes\LaravelBuilder\EloquentModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Artes\LaravelBuilder\EloquentModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Artes\LaravelBuilder\EloquentModel query()
 * @mixin \Eloquent
 */
class EloquentModel extends Model
{
    protected $builder = Builder::class;

    /**
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return Builder|Model
     */
    public function newEloquentBuilder($query)
    {
        return new $this->builder($query);
    }
}