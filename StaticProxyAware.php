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
use RuntimeException;

trait StaticProxyAware
{
    /**
     * The stored singleton instance.
     *
     * @var self $instance.
     */
    protected static $instance;

    /**
     * Creates the original or retrieves the stored singleton instance.
     *
     * @return self
     * @throws ReflectionException
     */
    public static function getInstance(): static
    {
        if (! static::$instance) {
            static::$instance = (new ReflectionClass(static::class))
                ->newInstanceWithoutConstructor();
        }

        return static::$instance;
    }

    /**
     * Reset the Container instance.
     */
    public static function resetInstance(): void
    {
        if (self::$instance) {
            self::$instance = null;
        }
    }

    /**
     * The constructor is disabled.
     *
     * @throws RuntimeException If called..
     */
    public function __construct()
    {
        throw new RuntimeException('You may not explicitly instantiate this object, because it is a singleton.');
    }

    /**
     * Cloning is disabled.
     *
     * @throws RuntimeException If called.
     */
    public function __clone()
    {
        throw new RuntimeException('You may not clone this object, because it is a singleton.');
    }

    /**
     * Wakeup is disabled.
     *
     * @throws RuntimeException If called.
     */
    public function __wakeup()
    {
        throw new RuntimeException('You may not wakeup this object, because it is a singleton.');
    }

    /**
     * Unserialization is disabled.
     *
     * @throws RuntimeException If called.
     */
    public function unserialize(array $serializedData)
    {
        throw new RuntimeException('You may not unserialize this object, because it is a singleton.');
    }
}
