<?php declare(strict_types=1);

namespace Swoft\Bean\Concern;

/**
 * Class Prototype
 *
 * @since 2.0
 */
trait PrototypeTrait
{
    /**
     * Get instance from container
     *
     * @return static
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     */
    protected static function __instance()
    {
        return \bean(static::class);
    }
}
