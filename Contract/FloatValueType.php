<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

use Qubus\Exception\Data\TypeException;

interface FloatValueType
{
    /**
     * Get the specified float value.
     *
     * @param string $key
     * @param (\Closure():(float|null))|float|null  $default
     * @return float
     * @throws TypeException
     */
    public function float(string $key, mixed $default = null): float;
}
