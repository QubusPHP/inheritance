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

namespace Qubus\Inheritance\Proxy;

final class TapProxy
{
    public function __construct(private object $object)
    {
    }

    public function __call($method, $arguments): object
    {
        $this->object->{$method}(...$arguments);

        return $this->object;
    }
}
