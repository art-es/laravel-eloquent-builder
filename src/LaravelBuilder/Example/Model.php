<?php

namespace Artes\LaravelBuilder\Example;

use Artes\LaravelBuilder\Builderable;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use Builderable;

    public $builder = Builder::class;
}
