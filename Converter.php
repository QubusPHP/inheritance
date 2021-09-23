<?php

/**
 * Qubus\Inheritance
 *
 * @link       https://github.com/QubusPHP/inheritance
 * @copyright  2021 Joshua Parker <josh@joshuaparker.blog>
 * @license    https://opensource.org/licenses/mit-license.php MIT License
 *
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Qubus\Inheritance;

use function get_object_vars;
use function is_array;

trait Converter
{
    /**
     * Takes an array and turns it into an object.
     *
     * @param array $array Array of data.
     * @return object
     */
    public function toObject(array $array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = self::toObject($value);
            }
        }
        return (object) $array;
    }

    /**
     * Takes an object and turns it into an array.
     *
     * @param object $object Object data.
     */
    public function toArray(object $object): array
    {
        return get_object_vars($object);
    }
}
