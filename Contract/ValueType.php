<?php

declare(strict_types=1);

namespace Qubus\Inheritance\Contract;

interface ValueType extends StringValueType, IntValueType, FloatValueType, BoolValueType, ArrayValueType
{

}
