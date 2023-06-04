<?php


namespace Dragon\system\Entity\Cast;

/**
 * Class FloatCast
 */
class FloatCast extends BaseCast
{
    /**
     * {@inheritDoc}
     */
    public static function get($value, array $params = []): float
    {
        return (float) $value;
    }
}
