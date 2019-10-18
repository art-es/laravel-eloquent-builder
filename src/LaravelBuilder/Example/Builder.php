<?php

namespace Artes\LaravelBuilder\Example;

use Illuminate\Database\Eloquent\Builder as BaseBuilder;

class Builder extends BaseBuilder
{
    /**
     * Search text by column.
     *
     * @param  string  $column
     * @param  string|null  $text
     * @return Builder
     */
    public function searchBy(string $column, ?string $text): self
    {
        return (string) $text !== ''
            ? $this->where($column, 'like', "%{$text}%")
            : $this;
    }
}
