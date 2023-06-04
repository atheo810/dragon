<?php

namespace Dragon\system\Entity\Cast;

class IntegerCast extends BaseCast
{
    /**
     * {@inheritDoc}
     */
    public static function get($value, array $params = []): int
    {
        return (int) $value;
    }
}
