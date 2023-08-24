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

use ReflectionClass;
use ReflectionException;

trait MultitonAware
{
    use StaticProxyAware;

    /**
     * @throws ReflectionException
     */
    public static function getInstance()
    {
        return static::getNamedInstance();
    }

    /**
     * @throws ReflectionException
     */
    public static function getNamedInstance($key = '__DEFAULT__')
    {
        if (! isset(static::$instance[$key])) {
            if (! static::$instance) {
                static::$instance = [];
            }
            static::$instance[$key] = (new ReflectionClass(static::class))
                ->newInstanceWithoutConstructor();
        }

        return static::$instance[$key];
    }
}
