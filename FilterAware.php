<?php

declare(strict_types=1);

namespace Qubus\Inheritance;

use Qubus\EventDispatcher\ActionFilter\Filter;

trait FilterAware
{
    /**
     * Determines whether pipeline uses filters.
     */
    protected bool $useFilter = false;

    /**
     * Enable filters in pipeline.
     */
    public function withFilter(): static
    {
        $this->useFilter = true;

        return $this;
    }

    protected function applyFilter(...$params): void
    {
        if (! $this->useFilter) {
            return;
        }

        Filter::getInstance()->applyFilter(...$params);
    }
}
