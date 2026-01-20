<?php

declare(strict_types=1);

namespace Qubus\Inheritance;

use Closure;

trait ConditionalAware
{
    /**
     * Apply the callback if the given "value" is (or resolves to) truthy.
     *
     * @param mixed|null $value
     * @param callable|null $callback
     * @param callable|null $default
     * @return mixed
     */
    public function when(mixed $value = null, ?callable $callback = null, ?callable $default = null): mixed
    {
        $value = $value instanceof Closure ? $value($this) : $value;

        if ($value) {
            return $callback($this, $value) ?? $this;
        } elseif ($default) {
            return $default($this, $value) ?? $this;
        }

        return $this;
    }

    /**
     * Apply the callback if the given "value" is (or resolves to) falsy.
     *
     * @param mixed|null $value
     * @param callable|null $callback
     * @param callable|null $default
     * @return mixed
     */
    public function whenNot(mixed $value = null, ?callable $callback = null, ?callable $default = null): mixed
    {
        $value = $value instanceof Closure ? $value($this) : $value;

        if (!$value) {
            return $callback($this, $value) ?? $this;
        } elseif ($default) {
            return $default($this, $value) ?? $this;
        }

        return $this;
    }
}
