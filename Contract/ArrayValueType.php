<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

use Qubus\Exception\Data\TypeException;

interface ArrayValueType
{
    /**
     * Get the specified array value.
     *
     * @param string $key
     * @param (\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null  $default
     * @return array
     * @throws TypeException
     */
    public function array(string $key, mixed $default = null): array;
}
