<?php

/**
 * Qubus\Inheritance
 *
 * @link       https://github.com/QubusPHP/inheritance
 * @copyright  2021 Joshua Parker <josh@joshuaparker.blog>
 * @license    https://opensource.org/licenses/mit-license.php MIT License
 *
 * @since      2.0.0
 */

declare(strict_types=1);

namespace Qubus\Inheritance;

use function call_user_func_array;
use function ob_get_clean;
use function ob_start;

trait InvokerAware
{
    /**
     * Call the given Closure with buffering support.
     *
     * @param callable|Closure  $closure
     * @param array     $parameters
     * @return mixed
     */
    public function call($closure, array $parameters = [], bool $buffer = false)
    {
        if ($buffer) {
            ob_start();
        }

        $result = call_user_func_array($closure, $parameters);

        if ($buffer) {
            return ob_get_clean();
        }

        return $result;
    }
}
