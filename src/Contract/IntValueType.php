<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

use Qubus\Exception\Data\TypeException;

interface IntValueType
{
    /**
     * Get the specified integer value.
     *
     * @param string $key
     * @param (\Closure():(int|null))|int|null  $default
     * @return int
     * @throws TypeException
     */
    public function integer(string $key, mixed $default = null): int;
}
