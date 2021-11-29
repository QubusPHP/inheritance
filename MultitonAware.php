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

use ReflectionClass;

trait MultitonAware
{
    use StaticProxyAware;

    public static function getInstance()
    {
        return static::getNamedInstance();
    }

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
