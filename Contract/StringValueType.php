<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

use Qubus\Exception\Data\TypeException;

interface StringValueType
{
    /**
     * Get the specified string value.
     *
     * @param string $key
     * @param (\Closure():(string|null))|string|null  $default
     * @return string
     * @throws TypeException
     */
    public function string(string $key, mixed $default = null): string;
}
