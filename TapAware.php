<?php

/**
 * Qubus\Inheritance
 *
 * @link       https://github.com/QubusPHP/inheritance
 * @copyright  2022 Joshua Parker <josh@joshuaparker.blog>
 * @license    https://opensource.org/licenses/mit-license.php MIT License
 *
 * @since      2.0.1
 */

declare(strict_types=1);

namespace Qubus\Inheritance;

use function Qubus\Inheritance\Helpers\tap;

trait TapAware
{
    /**
     * Call the given callable with the given value then return the value.
     *
     * @param callable|null $callable
     */
    protected function tap(mixed $value, ?callable $callback = null): mixed
    {
        return tap($value, $callback);
    }
}
