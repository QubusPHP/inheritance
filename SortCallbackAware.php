<?php

/**
 * Qubus\Inheritance
 *
 * @link       https://github.com/QubusPHP/inheritance
 * @copyright  2022
 * @author     Joshua Parker <josh@joshuaparker.blog>
 * @license    https://opensource.org/licenses/mit-license.php MIT License
 *
 * @since      2.0.1
 */

declare(strict_types=1);

namespace Qubus\Inheritance;

trait SortCallbackAware
{
    /**
     * Protected callback function for the usort function.
     *
     * @param array $a Action or Filter.
     * @param array $b Action or Filter.
     * @return int Comparison
     */
    protected function afsort(array $a, array $b): int
    {
        if (isset($a['priority']) && isset($b['priority'])) {
            $priority1 = (int) $a['priority'];
            $priority2 = (int) $b['priority'];

            if ($priority1 < $priority2) {
                return -1;
            } elseif ($priority1 > $priority2) {
                return 1;
            }
        }
        return 0;
    }
}
