<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

use Qubus\Exception\Data\TypeException;

interface BoolValueType
{
    /**
     * Get the specified boolean value.
     *
     * @param string $key
     * @param (\Closure():(bool|null))|bool|null  $default
     * @return bool
     * @throws TypeException
     */
    public function boolean(string $key, mixed $default = null): bool;
}
