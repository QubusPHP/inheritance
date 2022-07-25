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

trait TapObjectAware
{
    /**
     * Call the given callable with $this object then return the value.
     *
     * @param callable|null $callable
     */
    public function tap(?callable $callback = null): mixed
    {
        return tap($this, $callback);
    }
}
