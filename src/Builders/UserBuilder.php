<?php

namespace Artes\LaravelBuilder\Builders;

use Illuminate\Database\Eloquent\Builder;

class UserBuilder extends Builder
{
    /**
     * Test method for updating sql query
     *
     * @return UserBuilder
     */
    public function isAdult(): self
    {
        return $this->where('age', '>', 18);
    }
}